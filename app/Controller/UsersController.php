<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'Paniers');
App::import('Controller', 'Reservations');
App::import('Controller', 'Cartes');
App::import('Model', 'Reservation');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */


    public function isAuthorized($user = null){

        parent::isAuthorized($user);

        if (empty($this->request->params['admin'])) {
            return true;
        }
        if (isset($this->request->params['admin'])) {
            return (bool)($user['role'] === 'admin');
        }
        return false;

    }
    public function beforeFilter()
    {

        $this->loadModel('Panier');
        parent::beforeFilter();
        $this->Auth->allow(['add','login','logout','admin_login','roleredirect']);

    }


/**
 * index method
 *
 * @return void
 */

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view() {
        $session= $this->Session->read();
        $id =$session['user'];
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {
			$this->User->create();
            $data = $this->request->data['User'];
            if(! $data['img']['name'])
            {
                unset($data['img']);
            }
            $data['nb_point']=0;
            $data['role']='user';
            $data['password']=AuthComponent::password($data['password']);
            //debug( $this->request->data);
			if ($this->User->save($data)) {
                $panierC= new PaniersController();
                $panierC->Panier->create();
                $panier= new Panier();
                $panier->user= $this->User->id;
                $panierC->Panier->save($panier);
                $carte= new CartesController();
                $carte->Carte->create();
                $card= new Carte();
                $card->user=$this->User->id;
                $card->solde = 20;
                $carte->Carte->save($card);
                $this->Session->write('user', $this->User->id);
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'edit','controller'=>'cartes'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}

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
        $id =$session['user'];
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $ancienuser= $this->User->find('first', $options);


		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
            $data = $this->request->data['User'];
            if(! $data['img']['name'])
            {
                unset($data['img']);
            }
            $data ['id']=$id;
            $data ['username']=$ancienuser['User']['username'];
            if($data ['password']!=$ancienuser['User']['password'] )
                $data ['password']=  AuthComponent::password($data ['password']);
			if ($this->User->save($data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'view'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
        $this->Paginator->settings = $this->paginate;
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
            $data=$this->request->data['User'];
            $data['password']=AuthComponent::password($data['password']);
			if ($this->User->save($data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete(array('User.id' =>$id), false)) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    public function login(){

        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->write('user',$this->Auth->user('id'));
                $this->Session->write('role',$this->Auth->user('role'));
                $idpanier=$this->Panier->findByUser($this->Auth->user('id'));
                $this->loadModel('Reservation');
                //debug($idpanier);
                $articles = $this->Reservation->findByPanier($idpanier['id']);
                $numarticle = sizeof($articles);
                $this->Session->write('panier',$idpanier['Panier']['id']);
                $this->Session->write('user_img',$this->Auth->user('img'));
                $this->Session->write('article',$numarticle);
                //return $this->redirect($this->Auth->redirectUrl());
                debug($this->Auth->user('role'));
                if($this->Auth->user('role')=='admin')
                    return $this->redirect('/admin/users');
                else
                    return $this->redirect(array('action' => 'index','controller'=>'events'));

            } else {
                $this->Flash->set("Nom d'user ou mot de passe invalide, réessayer");
            }
        }

    }
    public function logout(){
        $this->Auth->logout();
        return $this->redirect('/users/login');
    }

    public function admin_logout(){
        $this->Auth->logout();
        return $this->redirect('/users/login');
    }




}
