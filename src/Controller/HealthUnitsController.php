<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HealthUnits Controller
 *
 * @property \App\Model\Table\HealthUnitsTable $HealthUnits
 *
 * @method \App\Model\Entity\HealthUnit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HealthUnitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $healthUnits = $this->paginate($this->HealthUnits);

        $this->set(compact('healthUnits'));
    }

    /**
     * View method
     *
     * @param string|null $id Health Unit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $healthUnit = $this->HealthUnits->get($id, [
            'contain' => []
        ]);

        $this->set('healthUnit', $healthUnit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $healthUnit = $this->HealthUnits->newEntity();
        if ($this->request->is('post')) {
            $healthUnit = $this->HealthUnits->patchEntity($healthUnit, $this->request->getData());
            if ($this->HealthUnits->save($healthUnit)) {
                $this->Flash->success(__('The health unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The health unit could not be saved. Please, try again.'));
        }
        $this->set(compact('healthUnit'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Health Unit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $healthUnit = $this->HealthUnits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $healthUnit = $this->HealthUnits->patchEntity($healthUnit, $this->request->getData());
            if ($this->HealthUnits->save($healthUnit)) {
                $this->Flash->success(__('The health unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The health unit could not be saved. Please, try again.'));
        }
        $this->set(compact('healthUnit'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Health Unit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $healthUnit = $this->HealthUnits->get($id);
        if ($this->HealthUnits->delete($healthUnit)) {
            $this->Flash->success(__('The health unit has been deleted.'));
        } else {
            $this->Flash->error(__('The health unit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($administrator)
    {
        if ($this->request->action === 'add') {
            return true;
    }
    if (in_array($this->request->action, ['edit', 'delete'])) {
        
        $healsthUnitId = (int)$this->request->params['pass'][0];
        if ($this->HealthUnits->isOwnedBy($healsthUnitId, $administrator['id'])) {
            return true;
        }
    }
    return parent::isAuthorized($aministrator);       
}
    // public function isOwnedBy($healthUnitId, $userId)
    // {
    //     return $this->exists(['id' => $healthUnitId, 'user_id' => $userId]);
    // }
}
