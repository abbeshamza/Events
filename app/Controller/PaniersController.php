<?php
App::uses('AppController', 'Controller');
/**
 * Paniers Controller
 *
 * @property Panier $Panier
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PaniersController extends AppController {

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
 */
	public function index() {
		$this->Panier->recursive = 0;
		$this->set('paniers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Panier->exists($id)) {
			throw new NotFoundException(__('Invalid panier'));
		}
		$options = array('conditions' => array('Panier.' . $this->Panier->primaryKey => $id));
		$this->set('panier', $this->Panier->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Panier->create();
			if ($this->Panier->save($this->request->data)) {
				$this->Flash->success(__('The panier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The panier could not be saved. Please, try again.'));
			}
		}
		$users = $this->Panier->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Panier->exists($id)) {
			throw new NotFoundException(__('Invalid panier'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Panier->save($this->request->data)) {
				$this->Flash->success(__('The panier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The panier could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Panier.' . $this->Panier->primaryKey => $id));
			$this->request->data = $this->Panier->find('first', $options);
		}
		$users = $this->Panier->User->find('list');
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
		$this->Panier->id = $id;
		if (!$this->Panier->exists()) {
			throw new NotFoundException(__('Invalid panier'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Panier->delete()) {
			$this->Flash->success(__('The panier has been deleted.'));
		} else {
			$this->Flash->error(__('The panier could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Panier->recursive = 0;
		$this->set('paniers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Panier->exists($id)) {
			throw new NotFoundException(__('Invalid panier'));
		}
		$options = array('conditions' => array('Panier.' . $this->Panier->primaryKey => $id));
		$this->set('panier', $this->Panier->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Panier->create();
			if ($this->Panier->save($this->request->data)) {
				$this->Flash->success(__('The panier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The panier could not be saved. Please, try again.'));
			}
		}
		$users = $this->Panier->User->find('list');
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
		if (!$this->Panier->exists($id)) {
			throw new NotFoundException(__('Invalid panier'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Panier->save($this->request->data)) {
				$this->Flash->success(__('The panier has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The panier could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Panier.' . $this->Panier->primaryKey => $id));
			$this->request->data = $this->Panier->find('first', $options);
		}
		$users = $this->Panier->User->find('list');
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
		$this->Panier->id = $id;
		if (!$this->Panier->exists()) {
			throw new NotFoundException(__('Invalid panier'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Panier->delete()) {
			$this->Flash->success(__('The panier has been deleted.'));
		} else {
			$this->Flash->error(__('The panier could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
