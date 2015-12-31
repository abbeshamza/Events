<?php
App::uses('AppController', 'Controller');
/**
 * Cadeaus Controller
 *
 * @property Cadeau $Cadeau
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CadeausController extends AppController {

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
		$this->Cadeau->recursive = 0;
		$this->set('cadeaus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cadeau->exists($id)) {
			throw new NotFoundException(__('Invalid cadeau'));
		}
		$options = array('conditions' => array('Cadeau.' . $this->Cadeau->primaryKey => $id));
		$this->set('cadeau', $this->Cadeau->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cadeau->create();
			if ($this->Cadeau->save($this->request->data)) {
				$this->Flash->success(__('The cadeau has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cadeau could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Cadeau->Categorie->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cadeau->exists($id)) {
			throw new NotFoundException(__('Invalid cadeau'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cadeau->save($this->request->data)) {
				$this->Flash->success(__('The cadeau has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cadeau could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cadeau.' . $this->Cadeau->primaryKey => $id));
			$this->request->data = $this->Cadeau->find('first', $options);
		}
		$categories = $this->Cadeau->Categorie->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cadeau->id = $id;
		if (!$this->Cadeau->exists()) {
			throw new NotFoundException(__('Invalid cadeau'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cadeau->delete()) {
			$this->Flash->success(__('The cadeau has been deleted.'));
		} else {
			$this->Flash->error(__('The cadeau could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cadeau->recursive = 0;
		$this->set('cadeaus', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Cadeau->exists($id)) {
			throw new NotFoundException(__('Invalid cadeau'));
		}
		$options = array('conditions' => array('Cadeau.' . $this->Cadeau->primaryKey => $id));
		$this->set('cadeau', $this->Cadeau->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cadeau->create();
			if ($this->Cadeau->save($this->request->data)) {
				$this->Flash->success(__('The cadeau has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cadeau could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Cadeau->Categorie->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Cadeau->exists($id)) {
			throw new NotFoundException(__('Invalid cadeau'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cadeau->save($this->request->data)) {
				$this->Flash->success(__('The cadeau has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The cadeau could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cadeau.' . $this->Cadeau->primaryKey => $id));
			$this->request->data = $this->Cadeau->find('first', $options);
		}
		$categories = $this->Cadeau->Categorie->find('list');
		$this->set(compact('categories'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Cadeau->id = $id;
		if (!$this->Cadeau->exists()) {
			throw new NotFoundException(__('Invalid cadeau'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cadeau->delete()) {
			$this->Flash->success(__('The cadeau has been deleted.'));
		} else {
			$this->Flash->error(__('The cadeau could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
