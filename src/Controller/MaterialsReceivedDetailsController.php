<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MaterialsReceivedDetails Controller
 *
 * @property \App\Model\Table\MaterialsReceivedDetailsTable $MaterialsReceivedDetails
 * @method \App\Model\Entity\MaterialsReceivedDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterialsReceivedDetailsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Materials', 'MaterialsReceivedNotes'],
        ];
        $materialsReceivedDetails = $this->paginate($this->MaterialsReceivedDetails);

        $this->set(compact('materialsReceivedDetails'));
    }

    /**
     * View method
     *
     * @param string|null $id Materials Received Detail id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialsReceivedDetail = $this->MaterialsReceivedDetails->get($id, [
            'contain' => ['Materials', 'MaterialsReceivedNotes'],
        ]);

        $this->set(compact('materialsReceivedDetail'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialsReceivedDetail = $this->MaterialsReceivedDetails->newEmptyEntity();
        if ($this->request->is('post')) {
            $materialsReceivedDetail = $this->MaterialsReceivedDetails->patchEntity($materialsReceivedDetail, $this->request->getData());
            if ($this->MaterialsReceivedDetails->save($materialsReceivedDetail)) {
                $this->Flash->success(__('The materials received detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials received detail could not be saved. Please, try again.'));
        }
        $materials = $this->MaterialsReceivedDetails->Materials->find('list', ['limit' => 200])->all();
        $materialsReceivedNotes = $this->MaterialsReceivedDetails->MaterialsReceivedNotes->find('list', ['limit' => 200])->all();
        $this->set(compact('materialsReceivedDetail', 'materials', 'materialsReceivedNotes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Materials Received Detail id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialsReceivedDetail = $this->MaterialsReceivedDetails->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialsReceivedDetail = $this->MaterialsReceivedDetails->patchEntity($materialsReceivedDetail, $this->request->getData());
            if ($this->MaterialsReceivedDetails->save($materialsReceivedDetail)) {
                $this->Flash->success(__('The materials received detail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials received detail could not be saved. Please, try again.'));
        }
        $materials = $this->MaterialsReceivedDetails->Materials->find('list', ['limit' => 200])->all();
        $materialsReceivedNotes = $this->MaterialsReceivedDetails->MaterialsReceivedNotes->find('list', ['limit' => 200])->all();
        $this->set(compact('materialsReceivedDetail', 'materials', 'materialsReceivedNotes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Materials Received Detail id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialsReceivedDetail = $this->MaterialsReceivedDetails->get($id);
        if ($this->MaterialsReceivedDetails->delete($materialsReceivedDetail)) {
            $this->Flash->success(__('The materials received detail has been deleted.'));
        } else {
            $this->Flash->error(__('The materials received detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
