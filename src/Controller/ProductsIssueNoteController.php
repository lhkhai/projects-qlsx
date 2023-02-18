<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ProductsIssueNote Controller
 *
 * @property \App\Model\Table\ProductsIssueNoteTable $ProductsIssueNote
 * @method \App\Model\Entity\ProductsIssueNote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProductsIssueNoteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Customers', 'Receivers'],
        ];
        $productsIssueNote = $this->paginate($this->ProductsIssueNote);

        $this->set(compact('productsIssueNote'));
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
        $productsIssueNote = $this->ProductsIssueNote->get($id, [
            'contain' => ['Customers', 'Receivers'],
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
        $productsIssueNote = $this->ProductsIssueNote->newEmptyEntity();
        if ($this->request->is('post')) {
            $productsIssueNote = $this->ProductsIssueNote->patchEntity($productsIssueNote, $this->request->getData());
            if ($this->ProductsIssueNote->save($productsIssueNote)) {
                $this->Flash->success(__('The products issue note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products issue note could not be saved. Please, try again.'));
        }
        $customers = $this->ProductsIssueNote->Customers->find('list', ['limit' => 200])->all();
        $receivers = $this->ProductsIssueNote->Receivers->find('list', ['limit' => 200])->all();
        $this->set(compact('productsIssueNote', 'customers', 'receivers'));
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
        $productsIssueNote = $this->ProductsIssueNote->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsIssueNote = $this->ProductsIssueNote->patchEntity($productsIssueNote, $this->request->getData());
            if ($this->ProductsIssueNote->save($productsIssueNote)) {
                $this->Flash->success(__('The products issue note has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products issue note could not be saved. Please, try again.'));
        }
        $customers = $this->ProductsIssueNote->Customers->find('list', ['limit' => 200])->all();
        $receivers = $this->ProductsIssueNote->Receivers->find('list', ['limit' => 200])->all();
        $this->set(compact('productsIssueNote', 'customers', 'receivers'));
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
        $productsIssueNote = $this->ProductsIssueNote->get($id);
        if ($this->ProductsIssueNote->delete($productsIssueNote)) {
            $this->Flash->success(__('The products issue note has been deleted.'));
        } else {
            $this->Flash->error(__('The products issue note could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
