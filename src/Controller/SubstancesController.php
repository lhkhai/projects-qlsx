<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Substances Controller
 *
 * @method \App\Model\Entity\Substance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubstancesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $substances = $this->paginate($this->Substances);

        $this->set(compact('substances'));
    }

    /**
     * View method
     *
     * @param string|null $id Substance id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $substance = $this->Substances->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('substance'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $substance = $this->Substances->newEmptyEntity();
        if ($this->request->is('post')) {
            $substance = $this->Substances->patchEntity($substance, $this->request->getData());
            if ($this->Substances->save($substance)) {
                $this->Flash->success(__('The substance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substance could not be saved. Please, try again.'));
        }
        $this->set(compact('substance'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Substance id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $substance = $this->Substances->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $substance = $this->Substances->patchEntity($substance, $this->request->getData());
            if ($this->Substances->save($substance)) {
                $this->Flash->success(__('The substance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substance could not be saved. Please, try again.'));
        }
        $this->set(compact('substance'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Substance id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $substance = $this->Substances->get($id);
        if ($this->Substances->delete($substance)) {
            $this->Flash->success(__('The substance has been deleted.'));
        } else {
            $this->Flash->error(__('The substance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
