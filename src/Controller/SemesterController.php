<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Semester Controller
 *
 * @property \App\Model\Table\SemesterTable $Semester
 * @method \App\Model\Entity\Semester[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SemesterController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $semester = $this->paginate($this->Semester,[
            'contain'=>['Branch']
        ]);

        $this->set(compact('semester'));
    }

    /**
     * View method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $semester = $this->Semester->get($id, [
            'contain' => ['Faculty', 'Student', 'Subject'],
        ]);

        $this->set(compact('semester'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $semester = $this->Semester->newEmptyEntity();
        if ($this->request->is('post')) {
            $semester = $this->Semester->patchEntity($semester, $this->request->getData());
            if ($this->Semester->save($semester)) {
                $this->Flash->success(__('The semester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semester could not be saved. Please, try again.'));
        }
        $this->loadModel('Branch');
        $branch=$this->Branch->find('list',[
            'keyField'=>'id','valueField'=>'branch_name'
        ]);
        $this->set(compact('semester','branch'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $semester = $this->Semester->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $semester = $this->Semester->patchEntity($semester, $this->request->getData());
            if ($this->Semester->save($semester)) {
                $this->Flash->success(__('The semester has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The semester could not be saved. Please, try again.'));
        }
        $this->loadModel('Branch');
        $branch=$this->Branch->find('list',[
            'keyField'=>'id','valueField'=>'branch_name'
        ]);
        $this->set(compact('semester','branch'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Semester id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $semester = $this->Semester->get($id);
        if ($this->Semester->delete($semester)) {
            $this->Flash->success(__('The semester has been deleted.'));
        } else {
            $this->Flash->error(__('The semester could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
