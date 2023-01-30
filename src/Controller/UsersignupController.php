<?php
declare(strict_types=1);

namespace App\Controller;


class UsersignupController extends AppController
{

    public function index()
    {
//         $this->redirect(['action' => 'login']);
        $usersignup = $this->paginate($this->Usersignup);

        $this->set(compact('usersignup'));
    }

    public function alluser(){
        $usersignup = $this->paginate($this->Usersignup);
        $this->set(compact('usersignup'));

        return $usersignup;
    }


    public function view($id = null)
    {
        $usersignup = $this->Usersignup->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('usersignup'));
    }


    public function add()
    {
        $usersignup = $this->Usersignup->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersignup = $this->Usersignup->patchEntity($usersignup, $this->request->getData());
            if ($this->Usersignup->save($usersignup)) {
                $this->Flash->success(__('The usersignup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersignup could not be saved. Please, try again.'));
        }
        $this->set(compact('usersignup'));
    }


    public function edit($id = null)
    {
        $usersignup = $this->Usersignup->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersignup = $this->Usersignup->patchEntity($usersignup, $this->request->getData());
            if ($this->Usersignup->save($usersignup)) {
                $this->Flash->success(__('The usersignup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usersignup could not be saved. Please, try again.'));
        }
        $this->set(compact('usersignup'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersignup = $this->Usersignup->get($id);
        if ($this->Usersignup->delete($usersignup)) {
            $this->Flash->success(__('The usersignup has been deleted.'));
        } else {
            $this->Flash->error(__('The usersignup could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }


    public function  login(){
        $login = $this->Usersignup->newEmptyEntity();
        if ($this->request->is('post')) {
            $login = $this->Usersignup->patchEntity($login, $this->request->getData());
            $email = $login->email;
            $pass =  $login->password;

         $alluser = $this->alluser();
         foreach ($alluser as $val){
//       echo $val->email."<br>" .$val->password ."<br>";
             if($email === $val->email){
                 if($pass === $val->password){
                     $this->Flash->success('User Name And Password Match');
                     return $this->redirect(['action' => 'index']);
                 }
                 $this->Flash->error('Password Does Not Match');
                 return  $this->redirect(['action' => 'login']);
             }
         }
        $this->Flash->error('User Not Found');
        }
    }

    public function forgetpass(){
        $forgetemail = $this->Usersignup->newEmptyEntity();
        if($this->request->is('post')){
            $forgetemail = $this->Usersignup->patchEntity($forgetemail,$this->request->getData());
            $email = $forgetemail->email;
            $alluser = $this->alluser();
            foreach ($alluser as $val){
                if($email === $val->email){
//                    echo "<pre>";
//                    print_r($val);die();
                    $this->Flash->success('User Found');
                    return $this->redirect(['action' => 'edit',$val->id]);
                }
            }
            $this->Flash->warning('Email Not Found');
        }

    }

    public function resetpass(){
        $resetpass = $this->Usersignup->newEmptyEntity();

        if($this->request->is('post')){
            $data =$this->request->getData('email');
//            pr($this->request->getData());die();
//            pr($data['email']);die();
            $email = $data['email'];
            $password = $data['password'];
            echo $email,$password;die();
            $alluser = $this->alluser();

            foreach ($alluser as $val){

            }
        }
    }

}
