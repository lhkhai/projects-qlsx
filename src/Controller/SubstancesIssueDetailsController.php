<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SubstancesIssueDetails Controller
 *
 * @method \App\Model\Entity\SubstancesIssueDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubstancesIssueDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $substancesIssueDetails = $this->paginate($this->SubstancesIssueDetails);

        $this->set(compact('substancesIssueDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Substances Issue Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $substancesIssueDetail = $this->SubstancesIssueDetails->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('substancesIssueDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $substancesIssueDetail = $this->SubstancesIssueDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $substancesIssueDetail = $this->SubstancesIssueDetails->patchEntity($substancesIssueDetail, $this->request->getData());
            if ($this->SubstancesIssueDetails->save($substancesIssueDetail)) {
                $this->Flash->success(__('The substances issue detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substances issue detail could not be saved. Please, try again.'));
        }
        $this->set(compact('substancesIssueDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Substances Issue Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $substancesIssueDetail = $this->SubstancesIssueDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $substancesIssueDetail = $this->SubstancesIssueDetails->patchEntity($substancesIssueDetail, $this->request->getData());
            if ($this->SubstancesIssueDetails->save($substancesIssueDetail)) {
                $this->Flash->success(__('The substances issue detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substances issue detail could not be saved. Please, try again.'));
        }
        $this->set(compact('substancesIssueDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Substances Issue Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $substancesIssueDetail = $this->SubstancesIssueDetails->get($id);
        if ($this->SubstancesIssueDetails->delete($substancesIssueDetail)) {
            $this->Flash->success(__('The substances issue detail has been deleted.'));
        } else {
            $this->Flash->error(__('The substances issue detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
