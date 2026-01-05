<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AuthorizedUser Controller
 *
 * @property \App\Model\Table\AuthorizedUserTable $AuthorizedUser
 */
class AuthorizedUserController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->AuthorizedUser->find();
        $authorizedUser = $this->paginate($query);

        $this->set(compact('authorizedUser'));
    }

    /**
     * View method
     *
     * @param string|null $id Authorized User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $authorizedUser = $this->AuthorizedUser->get($id, contain: []);
        $this->set(compact('authorizedUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $authorizedUser = $this->AuthorizedUser->newEmptyEntity();
        if ($this->request->is('post')) {
            $authorizedUser = $this->AuthorizedUser->patchEntity($authorizedUser, $this->request->getData());
            if ($this->AuthorizedUser->save($authorizedUser)) {
                $this->Flash->success(__('The authorized user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authorized user could not be saved. Please, try again.'));
        }
        $this->set(compact('authorizedUser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Authorized User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $authorizedUser = $this->AuthorizedUser->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $authorizedUser = $this->AuthorizedUser->patchEntity($authorizedUser, $this->request->getData());
            if ($this->AuthorizedUser->save($authorizedUser)) {
                $this->Flash->success(__('The authorized user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The authorized user could not be saved. Please, try again.'));
        }
        $this->set(compact('authorizedUser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Authorized User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $authorizedUser = $this->AuthorizedUser->get($id);
        if ($this->AuthorizedUser->delete($authorizedUser)) {
            $this->Flash->success(__('The authorized user has been deleted.'));
        } else {
            $this->Flash->error(__('The authorized user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
