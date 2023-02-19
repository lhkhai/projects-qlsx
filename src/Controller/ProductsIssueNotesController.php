<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsIssueNotes Controller
 *
 * @method \App\Model\Entity\ProductsIssueNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsIssueNotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $productsIssueNotes = $this->paginate($this->ProductsIssueNotes);

        $this->set(compact('productsIssueNotes'));
    }

    /**
     * View method
     *
     * @param string|null $id Products Issue Note id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsIssueNote = $this->ProductsIssueNotes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('productsIssueNote'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsIssueNote = $this->ProductsIssueNotes->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsIssueNote = $this->ProductsIssueNotes->patchEntity($productsIssueNote, $this->request->getData());
            if ($this->ProductsIssueNotes->save($productsIssueNote)) {
                $this->Flash->success(__('The products issue note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products issue note could not be saved. Please, try again.'));
        }
        $this->set(compact('productsIssueNote'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Issue Note id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsIssueNote = $this->ProductsIssueNotes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsIssueNote = $this->ProductsIssueNotes->patchEntity($productsIssueNote, $this->request->getData());
            if ($this->ProductsIssueNotes->save($productsIssueNote)) {
                $this->Flash->success(__('The products issue note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products issue note could not be saved. Please, try again.'));
        }
        $this->set(compact('productsIssueNote'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Issue Note id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsIssueNote = $this->ProductsIssueNotes->get($id);
        if ($this->ProductsIssueNotes->delete($productsIssueNote)) {
            $this->Flash->success(__('The products issue note has been deleted.'));
        } else {
            $this->Flash->error(__('The products issue note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
