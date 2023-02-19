<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * MaterialsIssueNotes Controller
 *
 * @property \App\Model\Table\MaterialsIssueNotesTable $MaterialsIssueNotes
 * @method \App\Model\Entity\MaterialsIssueNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MaterialsIssueNotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Receivers'],
        ];
        $materialsIssueNotes = $this->paginate($this->MaterialsIssueNotes);

        $this->set(compact('materialsIssueNotes'));
    }

    /**
     * View method
     *
     * @param string|null $id Materials Issue Note id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $materialsIssueNote = $this->MaterialsIssueNotes->get($id, [
            'contain' => ['Receivers'],
        ]);

        $this->set(compact('materialsIssueNote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $materialsIssueNote = $this->MaterialsIssueNotes->newEmptyEntity();
        if ($this->request->is('post')) {
            $materialsIssueNote = $this->MaterialsIssueNotes->patchEntity($materialsIssueNote, $this->request->getData());
            if ($this->MaterialsIssueNotes->save($materialsIssueNote)) {
                $this->Flash->success(__('The materials issue note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials issue note could not be saved. Please, try again.'));
        }
        $receivers = $this->MaterialsIssueNotes->Receivers->find('list', ['limit' => 200])->all();
        $this->set(compact('materialsIssueNote', 'receivers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Materials Issue Note id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $materialsIssueNote = $this->MaterialsIssueNotes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $materialsIssueNote = $this->MaterialsIssueNotes->patchEntity($materialsIssueNote, $this->request->getData());
            if ($this->MaterialsIssueNotes->save($materialsIssueNote)) {
                $this->Flash->success(__('The materials issue note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The materials issue note could not be saved. Please, try again.'));
        }
        $receivers = $this->MaterialsIssueNotes->Receivers->find('list', ['limit' => 200])->all();
        $this->set(compact('materialsIssueNote', 'receivers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Materials Issue Note id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $materialsIssueNote = $this->MaterialsIssueNotes->get($id);
        if ($this->MaterialsIssueNotes->delete($materialsIssueNote)) {
            $this->Flash->success(__('The materials issue note has been deleted.'));
        } else {
            $this->Flash->error(__('The materials issue note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
