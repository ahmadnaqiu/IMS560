<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Lecturer Controller
 *
 * @property \App\Model\Table\LecturerTable $Lecturer
 */
class LecturerController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Lecturer->find();
        $lecturer = $this->paginate($query);

        $this->set(compact('lecturer'));
    }

    /**
     * View method
     *
     * @param string|null $id Lecturer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lecturer = $this->Lecturer->get($id, contain: []);
        $this->set(compact('lecturer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lecturer = $this->Lecturer->newEmptyEntity();
        if ($this->request->is('post')) {
            $lecturer = $this->Lecturer->patchEntity($lecturer, $this->request->getData());
            if ($this->Lecturer->save($lecturer)) {
                $this->Flash->success(__('The lecturer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lecturer could not be saved. Please, try again.'));
        }
        $this->set(compact('lecturer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lecturer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lecturer = $this->Lecturer->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lecturer = $this->Lecturer->patchEntity($lecturer, $this->request->getData());
            if ($this->Lecturer->save($lecturer)) {
                $this->Flash->success(__('The lecturer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lecturer could not be saved. Please, try again.'));
        }
        $this->set(compact('lecturer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lecturer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lecturer = $this->Lecturer->get($id);
        if ($this->Lecturer->delete($lecturer)) {
            $this->Flash->success(__('The lecturer has been deleted.'));
        } else {
            $this->Flash->error(__('The lecturer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
