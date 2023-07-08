<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Examm Controller
 *
 * @property \App\Model\Table\ExammTable $Examm
 * @method \App\Model\Entity\Examm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExammController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $examm = $this->paginate($this->Examm,[
            'contain'=>['College','Student','Subject','Semester']
        ]);

        $this->set(compact('examm'));
    }

    /**
     * View method
     *
     * @param string|null $id Examm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $examm = $this->Examm->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('examm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $examm = $this->Examm->newEmptyEntity();
        if ($this->request->is('post')) {
            $examm = $this->Examm->patchEntity($examm, $this->request->getData());
            if ($this->Examm->save($examm)) {
                $this->Flash->success(__('The examm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examm could not be saved. Please, try again.'));
        }
       
        $this->loadModel('College');
        $college=$this->College->find('list',[
            'keyField'=>'id','valueField'=>'college_name'
        ]); 
        $this->loadModel('Student');
        $student=$this->Student->find('list',[
            'keyField'=>'id','valueField'=>'student_name'
        ]); 
        $this->loadModel('Subject');
        $subject=$this->Subject->find('list',[
            'keyField'=>'id','valueField'=>'subject_name'
            
        ]);
        $this->loadModel('Semester');
        $semester=$this->Semester->find('list',[
            'keyField'=>'id','valueField'=>'sem_number'
        ]); 
        $this->set(compact('examm','college','student','subject','semester'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Examm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $examm = $this->Examm->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $examm = $this->Examm->patchEntity($examm, $this->request->getData());
            if ($this->Examm->save($examm)) {
                $this->Flash->success(__('The examm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The examm could not be saved. Please, try again.'));
        }
        $this->loadModel('College');
        $college=$this->College->find('list',[
            'keyField'=>'id','valueField'=>'college_name'
        ]); 
        $this->loadModel('Student');
        $student=$this->Student->find('list',[
            'keyField'=>'id','valueField'=>'student_name'
        ]); 
        $this->loadModel('Subject');
        $subject=$this->Subject->find('list',[
            'keyField'=>'id','valueField'=>'subject_name'
            
        ]);
        $this->loadModel('Semester');
        $semester=$this->Semester->find('list',[
            'keyField'=>'id','valueField'=>'sem_number'
        ]); 
        $this->set(compact('examm','college','student','subject','semester'));
    }
       
    

    /**
     * Delete method
     *
     * @param string|null $id Examm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $examm = $this->Examm->get($id);
        if ($this->Examm->delete($examm)) {
            $this->Flash->success(__('The examm has been deleted.'));
        } else {
            $this->Flash->error(__('The examm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
