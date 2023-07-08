<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * College Controller
 *
 * @property \App\Model\Table\CollegeTable $College
 * @method \App\Model\Entity\College[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CollegeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function index()
    {
        $college = $this->paginate($this->College,[
            'contain'=>['City','State']
        ]);

        $this->set(compact('college'));
    }

    /**
     * View method
     *
     * @param string|null $id College id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $college = $this->College->get($id, [
            'contain' => ['Domain'],
        ]);
        

        $this->set(compact('college'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $college = $this->College->newEmptyEntity();
        if ($this->request->is('post')) {
            $college = $this->College->patchEntity($college, $this->request->getData());
            
            if ($this->College->save($college)) {
                $this->Flash->success(__('The college has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The college could not be saved. Please, try again.'));
        } 
        $this->loadmodel('City');
        $city=$this->City->find('list',[
            'keyField' => 'id','valueField' => 'city_name'
    ]);
    $this->set(compact('college','city'));
      
    
         $this->loadModel('State');
        $state=$this->State->find('list',[
            'keyField' => 'id','valueField' => 'state_name'
        ]);
        
        $this->set(compact('college','state'));
    }

    /**
     * Edit method
     *
     * @param string|null $id College id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $college = $this->College->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) { //debug( $this->request->getData());exit;
            $data= $this->request->getData(); 
            //debug( $data);exit;
            $college = $this->College->patchEntity($college, $data);
            $college->principal_name= $data['principal_name'];
            if ($this->College->save($college)) {
                $this->Flash->success(__('The college has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The college could not be saved. Please, try again.'));
        }
        $this->loadmodel('City');
        $city=$this->City->find('list',[
            'keyField' => 'id','valueField' => 'city_name'
    ]);
    $this->set(compact('college','city'));
      
    
        $this->loadModel('State');
        $state=$this->State->find('list',[
            'keyField' => 'id','valueField' => 'state_name'
        ]);
        
        $this->set(compact('college','state'));
    
        
    }

    /**
     * Delete method
     *
     * @param string|null $id College id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $college = $this->College->get($id);
        if ($this->College->delete($college)) {
            $this->Flash->success(__('The college has been deleted.'));
        } else {
            $this->Flash->error(__('The college could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
}
