<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Receivers Controller
 *
 * @method \App\Model\Entity\Receiver[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReceiversController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $receivers = $this->paginate($this->Receivers);

        $this->set(compact('receivers'));
    }

    /**
     * View method
     *
     * @param string|null $id Receiver id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $receiver = $this->Receivers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('receiver'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $receiver = $this->Receivers->newEmptyEntity();
        if ($this->request->is('post')) {
            $receiver = $this->Receivers->patchEntity($receiver, $this->request->getData());
            if ($this->Receivers->save($receiver)) {
                $this->Flash->success(__('The receiver has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The receiver could not be saved. Please, try again.'));
        }
        $this->set(compact('receiver'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Receiver id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $receiver = $this->Receivers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receiver = $this->Receivers->patchEntity($receiver, $this->request->getData());
            if ($this->Receivers->save($receiver)) {
                $this->Flash->success(__('The receiver has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The receiver could not be saved. Please, try again.'));
        }
        $this->set(compact('receiver'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Receiver id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $receiver = $this->Receivers->get($id);
        if ($this->Receivers->delete($receiver)) {
            $this->Flash->success(__('The receiver has been deleted.'));
        } else {
            $this->Flash->error(__('The receiver could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
