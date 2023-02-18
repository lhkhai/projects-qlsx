<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SubstancesReceivedNote Controller
 *
 * @property \App\Model\Table\SubstancesReceivedNoteTable $SubstancesReceivedNote
 * @method \App\Model\Entity\SubstancesReceivedNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubstancesReceivedNoteController extends AppController
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
        $substancesReceivedNote = $this->paginate($this->SubstancesReceivedNote);

        $this->set(compact('substancesReceivedNote'));
    }

    /**
     * View method
     *
     * @param string|null $id Substances Received Note id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $substancesReceivedNote = $this->SubstancesReceivedNote->get($id, [
            'contain' => ['Products', 'Receivers'],
        ]);

        $this->set(compact('substancesReceivedNote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $substancesReceivedNote = $this->SubstancesReceivedNote->newEmptyEntity();
        if ($this->request->is('post')) {
            $substancesReceivedNote = $this->SubstancesReceivedNote->patchEntity($substancesReceivedNote, $this->request->getData());
            if ($this->SubstancesReceivedNote->save($substancesReceivedNote)) {
                $this->Flash->success(__('The substances received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substances received note could not be saved. Please, try again.'));
        }
        $products = $this->SubstancesReceivedNote->Products->find('list', ['limit' => 200])->all();
        $receivers = $this->SubstancesReceivedNote->Receivers->find('list', ['limit' => 200])->all();
        $this->set(compact('substancesReceivedNote', 'products', 'receivers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Substances Received Note id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $substancesReceivedNote = $this->SubstancesReceivedNote->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $substancesReceivedNote = $this->SubstancesReceivedNote->patchEntity($substancesReceivedNote, $this->request->getData());
            if ($this->SubstancesReceivedNote->save($substancesReceivedNote)) {
                $this->Flash->success(__('The substances received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substances received note could not be saved. Please, try again.'));
        }
        $products = $this->SubstancesReceivedNote->Products->find('list', ['limit' => 200])->all();
        $receivers = $this->SubstancesReceivedNote->Receivers->find('list', ['limit' => 200])->all();
        $this->set(compact('substancesReceivedNote', 'products', 'receivers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Substances Received Note id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $substancesReceivedNote = $this->SubstancesReceivedNote->get($id);
        if ($this->SubstancesReceivedNote->delete($substancesReceivedNote)) {
            $this->Flash->success(__('The substances received note has been deleted.'));
        } else {
            $this->Flash->error(__('The substances received note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
