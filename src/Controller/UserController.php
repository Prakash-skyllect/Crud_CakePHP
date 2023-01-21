<?php
//declare(strict_types=1);

namespace App\Controller;
/**
 * Type Controller
 *
 * @property \App\Model\Table\UserTable $User
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */


class UserController extends AppController
{
    public function index()
    {
//        $type = $this->loadModel('Type')->find('all')->all();
//        $user = $this->User->get($id, [
//            'contain' => ['Type'],
//        ]);
        $user = $this->User->find('all',['contain' => ['Type']])->all();
//        echo "<pre>";print_r($user);die();
//        $user = $this->paginate($this->User);
        $this->set(compact('user'));
    }


    public function view($id = null)
    {
        $user = $this->User->get($id, [
            'contain' => ['Type'],
        ]);
//        $user = $this->User->find('all', [
//        'contain' => ['Type'],
//    ])->where(['User.id' => $id])->all();
//        echo "<pre>";print_r($user);die();
//        $type = $this->loadModel('Type')->get($type_id); // // get details by id from Table "Type"
        $this->set(compact('user'));
    }


    public function add()
    {
        $this->loadModel('Type');
        $type = $this->Type->find('all')->all();
//        echo "<pre>";
//        print_r($type); die();
        $user = $this->User->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user','type'));
    }


    public function edit($id = null)
    {
        $user = $this->User->get($id, [
            'contain' => ['Type'],
        ]);
//        $type = $this->loadModel('Type')->get($type_id); // get details by id
        $type_all = $this->loadModel('Type')->find('all')->all(); // get all roles from "Type" Table

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user','type_all' ));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->User->get($id);
        if ($this->User->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
