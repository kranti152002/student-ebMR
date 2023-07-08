<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Student Controller
 *
 * @property \App\Model\Table\StudentTable $Student
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $student = $this->paginate($this->Student,[
            'contain'=>['Division','Branch','City','State','Semester']
        ]);

        $this->set(compact('student'));
    }

    /**
     * View method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $student = $this->Student->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('student'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $student = $this->Student->newEmptyEntity();
        if ($this->request->is('post')) {
            $student = $this->Student->patchEntity($student, $this->request->getData());
            if ($this->Student->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
      
        $this->loadModel('Division');
        $division=$this->Division->find('list',[
            'keyField'=>'id','valueField'=>'division_number'
        ]);
        $this->loadModel('Branch');
        $branch=$this->Branch->find('list',[
            'keyField'=>'id','valueField'=>'branch_name'
        ]);
        $this->loadModel('Semester');
        $semester=$this->Semester->find('list',[
            'keyField'=>'id','valueField'=>'sem_number'
        ]);
        $this->loadModel('State');
        $state=$this->State->find('list',[
            'keyField'=>'id','valueField'=>'state_name'
        ]);
        $this->loadModel('City');
        $city=$this->City->find('list',[
            'keyField'=>'id','valueField'=>'city_name'
        ]);
         $this->set(compact('student','division','semester','branch','city','state'));
        $this->set(compact('student'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $student = $this->Student->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Student->patchEntity($student, $this->request->getData());
            if ($this->Student->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        
        $this->loadModel('Division');
        $division=$this->Division->find('list',[
            'keyField'=>'id','valueField'=>'division_number'
        ]);
        $this->loadModel('Branch');
        $branch=$this->Branch->find('list',[
            'keyField'=>'id','valueField'=>'branch_name'
        ]);
        $this->loadModel('Semester');
        $semester=$this->Semester->find('list',[
            'keyField'=>'id','valueField'=>'sem_number'
        ]);
        $this->loadModel('State');
        $state=$this->State->find('list',[
            'keyField'=>'id','valueField'=>'state_name'
        ]);
        $this->loadModel('City');
        $city=$this->City->find('list',[
            'keyField'=>'id','valueField'=>'city_name'
        ]);
         $this->set(compact('student','division','semester','branch','city','state'));
         $this->set(compact('student'));
       
    }

    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Student->get($id);
        if ($this->Student->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
