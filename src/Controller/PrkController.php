<?php
declare(strict_types=1);

namespace App\Controller;

use function PHPUnit\Framework\stringEndsWith;

class PrkController extends AppController{

    public function index(){
        $table = $this->paginate($this->Prk);
        $this->set(compact('table'));
    }

    public function view($id = null){

        $view = $this->Prk->get($id);
        $this->set(compact('view'));
    }

    public function add(){
        $insert = $this->Prk->newEmptyEntity();

        if($this->request->is('post')){
            $insert = $this->Prk->patchEntity($insert,$this->request->getData());

            if($this->Prk->save($insert)){
                $this->Flash->success("Data Inserted Successfully");
                return $this->redirect(['action'=> 'index']);
            }
            $this->Flash->error("Something went Wrong");

        }

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
        $this->set(compact('update'));
    }

    public function delete($id =null){
        $this->request->allowMethod(['post','delete']);
        $id = $this->Prk->get($id);

        if($this->Prk->delete($id)){
            $this->Flash->success('Record Deleted Successfully');
        }
        else{
            $this->Flash->error("Something Went Wrong");
        }
        return $this->redirect(['action'=> 'index']);
    }
}
?>

