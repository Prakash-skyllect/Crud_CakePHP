<?php
declare(strict_types=1);

namespace App\Controller;

use function PHPUnit\Framework\stringEndsWith;

class PrkController extends AppController{

    public function index(){

//        $table = $this->paginate($this->Prk);
        $table = $this->Prk->find('all')->all();
//        $this->set(compact('table'));

        $this->set([
            'table' => $table,
            'success' => true,
            'massage' => "Record Fetch Successfully",
            '_serialize' => ['table','success','massage']
        ]);
    }

    public function view($id = null){
        $view = $this->Prk->get($id);
        $this->set(compact('view'));
    }

//    public function add(){
//        $insert = $this->Prk->newEmptyEntity();
//        if($this->request->is('post')){
//            $insert = $this->Prk->patchEntity($insert,$this->request->getData());
//
//            if($this->Prk->save($insert)){
//                $this->Flash->success("Data Inserted Successfully");
//                return $this->redirect(['action'=> 'index']);
//            }
//            $this->Flash->error("Something went Wrong");
//        }
//        $this->set([
//            'insert'=> $insert,
//            'success' => true,
//            'massage' => 'Api run successfully...'
//        ]);
//    }

    public function add()
    {
//        $this->request->allowMethod(['post', 'put']);
        $recipe = $this->Prk->newEntity($this->request->getData());
        if ($this->Prk->save($recipe)) {
            $message = 'Saved';
            $this->Flash->success('Inserted Successfully');
            return $this->redirect(['action'=>'index']);
        } else {
            $message = 'Error';
        }
        $this->set([
            'massage' => $message,
            'success' => true,
            'insert' => $recipe,
            '_serialize' => ['massage' , 'insert' , 'success']
        ]);
    }

    public function edit($id = null){

        $update = $this->Prk->get($id);

        if($this->request->is(['patch','put','post'])){
            $update = $this->Prk->patchEntity($update,$this->request->getData());

            if($this->Prk->save($update)){
                $this->Flash->success("record Updated Successfully");

                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error('Something Went Wrong');
        }
//      $this->set(compact('update'));
        $this->set([
            'update' => $update,
            '_serialize' => ['update']
        ]);
    }

    public function delete($id =null){
        $this->request->allowMethod(['post','delete']);
        $delete = $this->Prk->get($id);

        if($this->Prk->delete($delete)){
            $this->Flash->success('Record Deleted Successfully');
        }
        else{
            $this->Flash->error("Something Went Wrong");
        }
        return $this->redirect(['action'=> 'index']);
    }

    public function login(){
        $login = $this->Prk->newEmptyEntity();

        if ($this->request->is('post')){
            $login = $this->Prk->patchEntity($login,$this->request->getData());

            if($this->Prk->save($login)){
                echo "<pre>";
                print_r($login);die();
            }
        }
    }
}
?>

