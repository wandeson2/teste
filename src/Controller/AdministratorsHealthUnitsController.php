<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AdministratorsHealthUnits Controller
 *
 * @property \App\Model\Table\AdministratorsHealthUnitsTable $AdministratorsHealthUnits
 *
 * @method \App\Model\Entity\AdministratorsHealthUnit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdministratorsHealthUnitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HealthUnits', 'Administrators']
        ];
        $administratorsHealthUnits = $this->paginate($this->AdministratorsHealthUnits);

        $this->set(compact('administratorsHealthUnits'));
    }

    /**
     * View method
     *
     * @param string|null $id Administrators Health Unit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administratorsHealthUnit = $this->AdministratorsHealthUnits->get($id, [
            'contain' => ['HealthUnits', 'Administrators']
        ]);

        $this->set('administratorsHealthUnit', $administratorsHealthUnit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administratorsHealthUnit = $this->AdministratorsHealthUnits->newEntity();
        if ($this->request->is('post')) {
            $administratorsHealthUnit = $this->AdministratorsHealthUnits->patchEntity($administratorsHealthUnit, $this->request->getData());
            if ($this->AdministratorsHealthUnits->save($administratorsHealthUnit)) {
                $this->Flash->success(__('The administrators health unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrators health unit could not be saved. Please, try again.'));
        }
        $healthUnits = $this->AdministratorsHealthUnits->HealthUnits->find('list', ['limit' => 200]);
        $administrators = $this->AdministratorsHealthUnits->Administrators->find('list', ['limit' => 200]);
        $this->set(compact('administratorsHealthUnit', 'healthUnits', 'administrators'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Administrators Health Unit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administratorsHealthUnit = $this->AdministratorsHealthUnits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administratorsHealthUnit = $this->AdministratorsHealthUnits->patchEntity($administratorsHealthUnit, $this->request->getData());
            if ($this->AdministratorsHealthUnits->save($administratorsHealthUnit)) {
                $this->Flash->success(__('The administrators health unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The administrators health unit could not be saved. Please, try again.'));
        }
        $healthUnits = $this->AdministratorsHealthUnits->HealthUnits->find('list', ['limit' => 200]);
        $administrators = $this->AdministratorsHealthUnits->Administrators->find('list', ['limit' => 200]);
        $this->set(compact('administratorsHealthUnit', 'healthUnits', 'administrators'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Administrators Health Unit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administratorsHealthUnit = $this->AdministratorsHealthUnits->get($id);
        if ($this->AdministratorsHealthUnits->delete($administratorsHealthUnit)) {
            $this->Flash->success(__('The administrators health unit has been deleted.'));
        } else {
            $this->Flash->error(__('The administrators health unit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
