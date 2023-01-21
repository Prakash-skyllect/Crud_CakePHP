<?php

namespace  App\Controller;


class  DepartmentController extends AppController{

    public  function index()
    {
        $showDep = $this->paginate($this->Department);
        $this->set(compact('showDep'));
    }
    public function  view($cid = null){

        $viewDep = $this->Department->get($cid,[
            'contain' => 'Student'
        ]);

        $this->set(compact('viewDep'));
    }

    public function add(){
        $insert = $this->Department->newEmptyEntity();

        if($this->request->is("post")){
            $insert = $this->Department->patchEntity($insert,$this->request->getData());

            if($this->Department->save($insert)){

                $this->Flash->success('Record Inserted Successfully..');

                return $this->redirect(["action" => 'index']);
            }
            $this->Flash->error("Something Went Wrong");
        }

    }

    public  function edit($id = null){

        $edit = $this->Department->get($id);

        if($this->request->is('post')){
            $edit = $this->Department->patchEntity($edit,$this->request->getData());

            if($this->Department->save($edit)){
                $this->Flash->success("Record Updated Successfull");

                return $this->redirect(["action" => "index"]);
            }
            $this->Flash->error('Something Went Wrong ');
        }

        $this->set(compact('edit'));
    }
}
