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
use Cake\Mailer\Email;

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
		$job_seeker_name=$this->Auth->User('name');
		$located_city=$this->Auth->User('located_city');
		$this->set(compact('job_seeker_name','located_city'));
		$this->Auth->allow(['logout']);
	}
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow([ 'logout', 'login', 'add', 'checkExistEmail', 'forgotPassword', 'resetPassword','sendResetEmail']);
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
		$this->viewBuilder()->layout('dashboard2');
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
	public function checkExistEmail($email = null)
	{
		echo $jobSeeker = $this->JobSeekers->find()->where(['email'=>$email])->count();
		exit;
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
				$this->Auth->setUser($job_seeker_data);
                $this->Flash->success(__('The job seeker registration has been saved.'));

				return $this->redirect(['controller'=>'JobSeekers','action' => 'index']);
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
	////////////////  Forget Password  ////////////////////////////
	public function forgotPassword()
    {
		$this->viewBuilder()->layout('signup');
        if ($this->request->is('post')) {
			
            $query = $this->JobSeekers->findByEmail($this->request->data['email']);
            $user = $query->first();
			
            if (is_null($user)) {
                $this->Flash->error('Email address does not exist. Please try again');
            } else {
				
                $passkey = uniqid();
                $url = Router::Url(['controller' => 'JobSeekers', 'action' => 'reset_password'], true) . '/' . $passkey;
                $timeout = time() + DAY;
                 if ($this->JobSeekers->updateAll(['passkey' => $passkey, 'timeout' => $timeout], ['id' => $user->id])){
					
                    $this->sendResetEmail($url, $user);
					
                    $this->redirect(['action' => 'login']);
                } else {
                    $this->Flash->error('Error saving reset passkey/timeout');
                }
            }
        }
    }

    private function sendResetEmail($url, $user) {
		
			$email = new Email();
			$email->transport('SendGrid');
			$email->profile('default')
			->template('resetpw')
			->emailFormat('html');

			$email->from(['ucciudaipur@gmail.com' => 'UCCI'])
			->to($user->email, $user->member_name)
			->subject('UCCI - Reset your password')
			->viewVars(['url' => $url, 'email' => $user->email]);

     if ($email->send()) {
		  
            $this->Flash->success(__('Check your email for your reset password link'));
        } else {
            $this->Flash->error(__('Error sending email: ') . $email->smtpError);
        }  
      
    }

    public function resetPassword($passkey = null) {
		$this->viewBuilder()->layout('login_layout');
        if ($passkey) {
            $query = $this->JobSeekers->find('all', ['conditions' => ['passkey' => $passkey, 'timeout >' => time()]]);
            $user = $query->first();
			
			
            if ($user) {
                if (!empty($this->request->data)) {
                    // Clear passkey and timeout
                    $this->request->data['passkey'] = null;
                    $this->request->data['timeout'] = null;
                    $user = $this->JobSeekers->patchEntity($user, $this->request->data);
                    if ($this->JobSeekers->save($user)) {
                        //$this->Flash->success(__('Your password has been updated.'));
                        $this->Auth->setUser($user);
						return $this->redirect(['controller'=>'JobSeekers','action' => 'index']);
						
                    } else {
                        $this->Flash->error(__('The password could not be updated. Please, try again.'));
                    }
                }
            } else {
                $this->Flash->error('Invalid or expired passkey. Please check your email or try again');
                $this->redirect(['action' => 'forgot_password']);
            }
            unset($user->password);
            $this->set(compact('user'));
        } else {
            $this->redirect('/');
        }
    }
}
