<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SubstancesReceivedNotes Controller
 *
 * @method \App\Model\Entity\SubstancesReceivedNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubstancesReceivedNotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $substancesReceivedNotes = $this->paginate($this->SubstancesReceivedNotes);

        $this->set(compact('substancesReceivedNotes'));
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
        $substancesReceivedNote = $this->SubstancesReceivedNotes->get($id, [
            'contain' => [],
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
        $substancesReceivedNote = $this->SubstancesReceivedNotes->newEmptyEntity();
        if ($this->request->is('post')) {
            $substancesReceivedNote = $this->SubstancesReceivedNotes->patchEntity($substancesReceivedNote, $this->request->getData());
            if ($this->SubstancesReceivedNotes->save($substancesReceivedNote)) {
                $this->Flash->success(__('The substances received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substances received note could not be saved. Please, try again.'));
        }
        $this->set(compact('substancesReceivedNote'));
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
        $substancesReceivedNote = $this->SubstancesReceivedNotes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $substancesReceivedNote = $this->SubstancesReceivedNotes->patchEntity($substancesReceivedNote, $this->request->getData());
            if ($this->SubstancesReceivedNotes->save($substancesReceivedNote)) {
                $this->Flash->success(__('The substances received note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The substances received note could not be saved. Please, try again.'));
        }
        $this->set(compact('substancesReceivedNote'));
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
        $substancesReceivedNote = $this->SubstancesReceivedNotes->get($id);
        if ($this->SubstancesReceivedNotes->delete($substancesReceivedNote)) {
            $this->Flash->success(__('The substances received note has been deleted.'));
        } else {
            $this->Flash->error(__('The substances received note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
