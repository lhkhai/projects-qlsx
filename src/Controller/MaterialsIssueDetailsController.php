<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MaterialsIssueDetails Controller
 *
 * @method \App\Model\Entity\MaterialsIssueDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterialsIssueDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $materialsIssueDetails = $this->paginate($this->MaterialsIssueDetails);

        $this->set(compact('materialsIssueDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Materials Issue Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialsIssueDetail = $this->MaterialsIssueDetails->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('materialsIssueDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialsIssueDetail = $this->MaterialsIssueDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $materialsIssueDetail = $this->MaterialsIssueDetails->patchEntity($materialsIssueDetail, $this->request->getData());
            if ($this->MaterialsIssueDetails->save($materialsIssueDetail)) {
                $this->Flash->success(__('The materials issue detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials issue detail could not be saved. Please, try again.'));
        }
        $this->set(compact('materialsIssueDetail'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Materials Issue Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialsIssueDetail = $this->MaterialsIssueDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialsIssueDetail = $this->MaterialsIssueDetails->patchEntity($materialsIssueDetail, $this->request->getData());
            if ($this->MaterialsIssueDetails->save($materialsIssueDetail)) {
                $this->Flash->success(__('The materials issue detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials issue detail could not be saved. Please, try again.'));
        }
        $this->set(compact('materialsIssueDetail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Materials Issue Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialsIssueDetail = $this->MaterialsIssueDetails->get($id);
        if ($this->MaterialsIssueDetails->delete($materialsIssueDetail)) {
            $this->Flash->success(__('The materials issue detail has been deleted.'));
        } else {
            $this->Flash->error(__('The materials issue detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
