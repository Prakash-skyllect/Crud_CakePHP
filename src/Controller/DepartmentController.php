<?php

namespace  App\Controller;


class  DepartmentController extends AppController{

    public  function index()
    {

//      $showDep = $this->paginate($this->Department);
        $showDep = $this->Department->find('all')->all();
//        $this->set(compact('showDep'));
        $this->set([
            'success' => true,
            'showDep' => $showDep,
            'message' => "Api Requested Successfully",
            '_serialize' => ['showDep','message','success']
        ]);
//        $this->set(compact('showDep'));
//        $this->viewBuilder()->setOption('serialize',['showDep']);

    }
    public function  view($cid = null){

        $viewed = $this->Department->get($cid,[
            'contain' => 'Student'
        ]);
//        $this->set(compact('viewed'));
        $this->set([
            'success' => true,
            'viewed' => $viewed,
            '_serialize' => ['viewed','success']
        ]);
    }
    public function add(){
        $insert = $this->Department->newEmptyEntity();
//        $insert = $this->Department->newEntity($this->request->getData());

        if($this->request->is("post")){
            $insert = $this->Department->patchEntity($insert,$this->request->getData());

            if($this->Department->save($insert)){

                $this->Flash->success('Record Inserted Successfully..');

                return $this->redirect(["action" => 'index']);
            }
            $this->Flash->error("Something Went Wrong");
        }
        $this->viewBuilder()->setOption('serialize',['insert']);
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

//        $this->set(compact('edit'));
        $this->set([
            'success' => true,
            'edit' => $edit,
            'message' => 'Record Fetch Successfully',
            '_serialize' => ['edit','message','success']
        ]);
    }
}
