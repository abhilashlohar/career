<?php
namespace App\Controller;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\View\View;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validation;
use Cake\Routing\Router;

/**
 * JobSeekers Controller
 *
 * @property \App\Model\Table\JobSeekersTable $JobSeekers
 *
 * @method \App\Model\Entity\JobSeeker[] paginate($object = null, array $settings = [])
 */
class JobSeekersController extends AppController
{
	public function initialize()
	{
		parent::initialize();
		$this->Auth->allow(['logout']);
	}
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow([ 'logout', 'login', 'add']);
    }
	
	public function logout()
	{
		
		//$this->Flash->success('You are now logged out.');
		return $this->redirect($this->Auth->logout());
	}
	public function login()
    {
		$this->viewBuilder()->layout('signup');
        if ($this->request->is('post')) 
		{
            $user = $this->Auth->identify();
            if ($user) 
			{
                $this->Auth->setUser($user);
				
				return $this->redirect(['controller'=>'JobSeekers','action' => 'index']);
            }
            $this->Flash->error(__('Invalid Username or Password'));
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $jobSeekers = $this->paginate($this->JobSeekers);

        $this->set(compact('jobSeekers'));
        $this->set('_serialize', ['jobSeekers']);
    }

    /**
     * View method
     *
     * @param string|null $id Job Seeker id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobSeeker = $this->JobSeekers->get($id, [
            'contain' => ['JobSeekerRows']
        ]);

        $this->set('jobSeeker', $jobSeeker);
        $this->set('_serialize', ['jobSeeker']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->layout('signup');
        $jobSeeker = $this->JobSeekers->newEntity();
        if ($this->request->is('post')) {
			$files=$this->request->data['profile_document'];
			$this->request->data['profile_document']=$files['name'];
            $jobSeeker = $this->JobSeekers->patchEntity($jobSeeker, $this->request->getData());
            if ($job_seeker_data=$this->JobSeekers->save($jobSeeker)) {
				
				$job_seeker_id=$job_seeker_data->id; 
				
				$dir = new Folder(WWW_ROOT . 'img/jobseeker/'.$job_seeker_id, true, 0755);
				$file_path = str_replace("\\","/",WWW_ROOT).'img/jobseeker/'.$job_seeker_id;
				
					move_uploaded_file($files['tmp_name'], $file_path.'/' . $files['name']);
				
                $this->Flash->success(__('The job seeker has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job seeker could not be saved. Please, try again.'));
        }
        $this->set(compact('jobSeeker'));
        $this->set('_serialize', ['jobSeeker']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Job Seeker id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobSeeker = $this->JobSeekers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobSeeker = $this->JobSeekers->patchEntity($jobSeeker, $this->request->getData());
            if ($this->JobSeekers->save($jobSeeker)) {
                $this->Flash->success(__('The job seeker has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The job seeker could not be saved. Please, try again.'));
        }
        $this->set(compact('jobSeeker'));
        $this->set('_serialize', ['jobSeeker']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Job Seeker id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobSeeker = $this->JobSeekers->get($id);
        if ($this->JobSeekers->delete($jobSeeker)) {
            $this->Flash->success(__('The job seeker has been deleted.'));
        } else {
            $this->Flash->error(__('The job seeker could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
