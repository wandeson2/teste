<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Administrators Controller
 *
 * @property \App\Model\Table\AdministratorsTable $Administrators
 *
 * @method \App\Model\Entity\Administrator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministratorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $administrators = $this->paginate($this->Administrators);

        $this->set(compact('administrators'));
    }

    /**
     * View method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administrator = $this->Administrators->get($id, [
            'contain' => ['HealthUnits']
        ]);

        $this->set('administrator', $administrator);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administrator = $this->Administrators->newEntity();
        if ($this->request->is('post')) {
            $administrator = $this->Administrators->patchEntity($administrator, $this->request->getData());
            if ($this->Administrators->save($administrator)) {
                $this->Flash->success(__('The administrator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrator could not be saved. Please, try again.'));
        }
        $healthUnits = $this->Administrators->HealthUnits->find('list', ['limit' => 200]);
        $this->set(compact('administrator', 'healthUnits'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administrator = $this->Administrators->get($id, [
            'contain' => ['HealthUnits']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administrator = $this->Administrators->patchEntity($administrator, $this->request->getData());
            if ($this->Administrators->save($administrator)) {
                $this->Flash->success(__('The administrator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrator could not be saved. Please, try again.'));
        }
        $healthUnits = $this->Administrators->HealthUnits->find('list', ['limit' => 200]);
        $this->set(compact('administrator', 'healthUnits'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administrator = $this->Administrators->get($id);
        if ($this->Administrators->delete($administrator)) {
            $this->Flash->success(__('The administrator has been deleted.'));
        } else {
            $this->Flash->error(__('The administrator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);
    }
    
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuário inválido, tente novamente'));
        }
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }










}
