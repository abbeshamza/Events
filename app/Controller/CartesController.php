<?php
App::uses('AppController', 'Controller');
/**
 * Cartes Controller
 *
 * @property Carte $Carte
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CartesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 *
 */
    public function beforeFilter()
    {

        $this->Auth->allow(['edit']);

    }
	public function index() {
		$this->Carte->recursive = 0;
		$this->set('cartes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view() {

        $session= $this->Session->read();
        $idc= $session['user'];
        $carteid = $this->Carte->findByUser($idc);
        $id=$carteid['Carte']['id'];

		if (!$this->Carte->exists($id)) {
			throw new NotFoundException(__('Invalid carte'));
		}
		$options = array('conditions' => array('Carte.' . $this->Carte->primaryKey => $id));
		$this->set('carte', $this->Carte->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carte->create();
			if ($this->Carte->save($this->request->data)) {
				$this->Flash->success(__('The carte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carte could not be saved. Please, try again.'));
			}
		}
		$users = $this->Carte->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function edit() {
        $session= $this->Session->read();
        $idc= $session['user'];
        $carteid = $this->Carte->findByUser($idc);
        $id=$carteid['Carte']['id'];
        if (!$this->Carte->exists($id)) {
            throw new NotFoundException(__('Invalid carte'));
        }

        if ($this->request->is(array('post', 'put'))) {

            $data=$this->request->data['Carte'];
            if($carteid['Carte']['password']!= $data['password'])
                $carteid['Carte']['password']=AuthComponent::password($data['password']);
            if($carteid['Carte']['numero']!= $data['numero'])
                $carteid['Carte']['numero']=$data['numero'];
            if($this->Carte->validates($carteid)) {
                if ($this->Carte->save( $carteid)) {
                    $this->Flash->success(__('The carte has been saved.'));
                    $this->Session->delete('carte');
                    debug($session);
                    return $this->redirect(array('action' => 'login','controller'=>'users'));
                } else {
                    $this->Flash->error(__('The carte could not be saved. Please, try again.'));
                }

            }

        } else {
            $options = array('conditions' => array('Carte.' . $this->Carte->primaryKey => $id));
            $this->request->data = $this->Carte->find('first', $options);
        }
        $users = $this->Carte->User->find('list');
        $this->set(compact('users'));
    }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Carte->id = $id;
		if (!$this->Carte->exists()) {
			throw new NotFoundException(__('Invalid carte'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carte->delete()) {
			$this->Flash->success(__('The carte has been deleted.'));
		} else {
			$this->Flash->error(__('The carte could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Carte->recursive = 0;
		$this->set('cartes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Carte->exists($id)) {
			throw new NotFoundException(__('Invalid carte'));
		}
		$options = array('conditions' => array('Carte.' . $this->Carte->primaryKey => $id));
		$this->set('carte', $this->Carte->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Carte->create();
			if ($this->Carte->save($this->request->data)) {
				$this->Flash->success(__('The carte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carte could not be saved. Please, try again.'));
			}
		}
		$users = $this->Carte->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Carte->exists($id)) {
			throw new NotFoundException(__('Invalid carte'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carte->save($this->request->data)) {
				$this->Flash->success(__('The carte has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The carte could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Carte.' . $this->Carte->primaryKey => $id));
			$this->request->data = $this->Carte->find('first', $options);
		}
		$users = $this->Carte->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Carte->id = $id;
		if (!$this->Carte->exists()) {
			throw new NotFoundException(__('Invalid carte'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Carte->delete()) {
			$this->Flash->success(__('The carte has been deleted.'));
		} else {
			$this->Flash->error(__('The carte could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
