<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\View\View;
use Cake\ORM\TableRegistry;
use Cake\Validation\Validation;
use Cake\Routing\Router;


/**
 * CorporateUsers Controller
 *
 * @property \App\Model\Table\CorporateUsersTable $CorporateUsers
 *
 * @method \App\Model\Entity\CorporateUser[] paginate($object = null, array $settings = [])
 */
class CorporateUsersController extends AppController
{

	public function initialize()
	{
		parent::initialize();
		$full_name=$this->Auth->User('full_name');
		$corporate_name=$this->Auth->User('corporate_name');
		$this->set(compact('full_name','corporate_name'));
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
				return $this->redirect(['controller'=>'CorporateUsers','action' => 'index']);
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
		$this->viewBuilder()->layout('corporate_dashboard');
		
        $corporateUsers = $this->paginate($this->CorporateUsers);

        $this->set(compact('corporateUsers'));
        $this->set('_serialize', ['corporateUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Corporate User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $corporateUser = $this->CorporateUsers->get($id, [
            'contain' => []
        ]);

        $this->set('corporateUser', $corporateUser);
        $this->set('_serialize', ['corporateUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->viewBuilder()->layout('signup');
		
        $corporateUser = $this->CorporateUsers->newEntity();
        if ($this->request->is('post')) {
            $corporateUser = $this->CorporateUsers->patchEntity($corporateUser, $this->request->getData());
            if ($corporateUser_data=$this->CorporateUsers->save($corporateUser)) {
				$this->Auth->setUser($corporateUser_data);
                $this->Flash->success(__('The corporate registration has been done.'));
                $this->Flash->success(__('You have successfully registered.'));

                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('The corporate user could not be saved. Please, try again.'));
        }
        $this->set(compact('corporateUser'));
        $this->set('_serialize', ['corporateUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Corporate User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $corporateUser = $this->CorporateUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $corporateUser = $this->CorporateUsers->patchEntity($corporateUser, $this->request->getData());
            if ($this->CorporateUsers->save($corporateUser)) {
                $this->Flash->success(__('The corporate user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The corporate user could not be saved. Please, try again.'));
        }
        $this->set(compact('corporateUser'));
        $this->set('_serialize', ['corporateUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Corporate User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $corporateUser = $this->CorporateUsers->get($id);
        if ($this->CorporateUsers->delete($corporateUser)) {
            $this->Flash->success(__('The corporate user has been deleted.'));
        } else {
            $this->Flash->error(__('The corporate user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
