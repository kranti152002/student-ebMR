<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Faculty Controller
 *
 * @property \App\Model\Table\FacultyTable $Faculty
 * @method \App\Model\Entity\Faculty[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FacultyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $faculty = $this->paginate($this->Faculty,[
            'contain'=>['Subject','City','State']
        ]);

        $this->set(compact('faculty'));
    }

    /**
     * View method
     *
     * @param string|null $id Faculty id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $faculty = $this->Faculty->get($id, [
            'contain' => ['Division'],
        ]);

        $this->set(compact('faculty'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $faculty = $this->Faculty->newEmptyEntity();
        if ($this->request->is('post')) {
            $faculty = $this->Faculty->patchEntity($faculty, $this->request->getData());
            if ($this->Faculty->save($faculty)) {
                $this->Flash->success(__('The faculty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The faculty could not be saved. Please, try again.'));
        }
        $this->loadModel('Subject');
        $subject=$this->Subject->find('list',[
            'keyField'=>'id','valueField'=>'subject_name'
        ]);
        $this->loadModel('City');
        $city=$this->City->find('list',[
            'keyField'=>'id','valueField'=>'city_name'
        ]);
        $this->loadModel('State');
        $state=$this->State->find('list',[
            'keyField'=>'id','valueField'=>'state_name'
        ]);
        $this->loadModel('Semester');
        $semester=$this->Semester->find('list',[
            'keyField'=>'id','valueField'=>'sem_name'
        ]);
        $this->set(compact('faculty','city','state','semester','subject'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Faculty id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $faculty = $this->Faculty->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $faculty = $this->Faculty->patchEntity($faculty, $this->request->getData());
            if ($this->Faculty->save($faculty)) {
                $this->Flash->success(__('The faculty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The faculty could not be saved. Please, try again.'));
        }
        $this->set(compact('faculty'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Faculty id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $faculty = $this->Faculty->get($id);
        if ($this->Faculty->delete($faculty)) {
            $this->Flash->success(__('The faculty has been deleted.'));
        } else {
            $this->Flash->error(__('The faculty could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
