<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MaterialsReceivedNote Controller
 *
 * @property \App\Model\Table\MaterialsReceivedNoteTable $MaterialsReceivedNote
 * @method \App\Model\Entity\MaterialsReceivedNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterialsReceivedNoteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Receivers'],
        ];
        $materialsReceivedNote = $this->paginate($this->MaterialsReceivedNote);

        $this->set(compact('materialsReceivedNote'));
    }

    /**
     * View method
     *
     * @param string|null $id Materials Received Note id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialsReceivedNote = $this->MaterialsReceivedNote->get($id, [
            'contain' => ['Products', 'Receivers'],
        ]);

        $this->set(compact('materialsReceivedNote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialsReceivedNote = $this->MaterialsReceivedNote->newEmptyEntity();
        if ($this->request->is('post')) {
            $materialsReceivedNote = $this->MaterialsReceivedNote->patchEntity($materialsReceivedNote, $this->request->getData());
            if ($this->MaterialsReceivedNote->save($materialsReceivedNote)) {
                $this->Flash->success(__('The materials received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials received note could not be saved. Please, try again.'));
        }
        $products = $this->MaterialsReceivedNote->Products->find('list', ['limit' => 200])->all();
        $receivers = $this->MaterialsReceivedNote->Receivers->find('list', ['limit' => 200])->all();
        $this->set(compact('materialsReceivedNote', 'products', 'receivers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Materials Received Note id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialsReceivedNote = $this->MaterialsReceivedNote->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialsReceivedNote = $this->MaterialsReceivedNote->patchEntity($materialsReceivedNote, $this->request->getData());
            if ($this->MaterialsReceivedNote->save($materialsReceivedNote)) {
                $this->Flash->success(__('The materials received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials received note could not be saved. Please, try again.'));
        }
        $products = $this->MaterialsReceivedNote->Products->find('list', ['limit' => 200])->all();
        $receivers = $this->MaterialsReceivedNote->Receivers->find('list', ['limit' => 200])->all();
        $this->set(compact('materialsReceivedNote', 'products', 'receivers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Materials Received Note id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialsReceivedNote = $this->MaterialsReceivedNote->get($id);
        if ($this->MaterialsReceivedNote->delete($materialsReceivedNote)) {
            $this->Flash->success(__('The materials received note has been deleted.'));
        } else {
            $this->Flash->error(__('The materials received note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
