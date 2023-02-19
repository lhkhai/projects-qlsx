<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MaterialsReceivedNotes Controller
 *
 * @method \App\Model\Entity\MaterialsReceivedNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterialsReceivedNotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $materialsReceivedNotes = $this->paginate($this->MaterialsReceivedNotes);

        $this->set(compact('materialsReceivedNotes'));
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
        $materialsReceivedNote = $this->MaterialsReceivedNotes->get($id, [
            'contain' => [],
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
        $materialsReceivedNote = $this->MaterialsReceivedNotes->newEmptyEntity();
        if ($this->request->is('post')) {
            $materialsReceivedNote = $this->MaterialsReceivedNotes->patchEntity($materialsReceivedNote, $this->request->getData());
            if ($this->MaterialsReceivedNotes->save($materialsReceivedNote)) {
                $this->Flash->success(__('The materials received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials received note could not be saved. Please, try again.'));
        }
        $this->set(compact('materialsReceivedNote'));
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
        $materialsReceivedNote = $this->MaterialsReceivedNotes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialsReceivedNote = $this->MaterialsReceivedNotes->patchEntity($materialsReceivedNote, $this->request->getData());
            if ($this->MaterialsReceivedNotes->save($materialsReceivedNote)) {
                $this->Flash->success(__('The materials received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials received note could not be saved. Please, try again.'));
        }
        $this->set(compact('materialsReceivedNote'));
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
        $materialsReceivedNote = $this->MaterialsReceivedNotes->get($id);
        if ($this->MaterialsReceivedNotes->delete($materialsReceivedNote)) {
            $this->Flash->success(__('The materials received note has been deleted.'));
        } else {
            $this->Flash->error(__('The materials received note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
