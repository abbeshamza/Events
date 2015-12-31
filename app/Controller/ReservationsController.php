<?php
App::uses('AppController', 'Controller');


/**
 * Reservations Controller
 *
 * @property Reservation $Reservation
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ReservationsController extends AppController {

/**
 * Components
 *
 * @var array
 *
 */

	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
    public function beforeFilter()
    {

        $this->loadModel('Carte');
        $this->loadModel('User');
        parent::beforeFilter();


    }
	public function index() {
		$this->Reservation->recursive = 0;
		$this->set('reservations', $this->Paginator->paginate());
	}

    public function mesreservation()
    {
        $session= $this->Session->read();
        $id= $session['panier'];
        $this->Paginator->settings = array(
            'conditions' => array('Reservation.panier' =>$id ),
            'limit' => 10
        );
        $reservations = $this->Paginator->paginate('Reservation');
        $this->set(compact('reservations'));
    }

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
		$this->set('reservation', $this->Reservation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
            $data=$this->request->data;
            $session= $this->Session->read();
            $data['Reservation']['statut']='nonpayee';
            $data['Reservation']['panier']=$session['panier'];

			$this->Reservation->create();
			if ($this->Reservation->save($data)) {
				$this->Flash->success(__('The reservation has been saved.'));
                $numarticle= $session['article'];
                $this->Session->write('article',$numarticle+1);
                return $this->redirect(array('action' => 'mesreservation'));
			} else {
				$this->Flash->error(__('The reservation could not be saved. Please, try again.'));
			}
		}
        return $this->redirect(array('action' => 'index','controller'=>'events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reservation->save($this->request->data)) {
				$this->Flash->success(__('The reservation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reservation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
			$this->request->data = $this->Reservation->find('first', $options);
		}
		$events = $this->Reservation->Event->find('list');
		$paniers = $this->Reservation->Panier->find('list');
		$this->set(compact('events', 'paniers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
        $session= $this->Session->read();
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reservation->delete()) {
			$this->Flash->success(__('The reservation has been deleted.'));
            $numarticle= $session['article'];
            $this->Session->write('article',$numarticle-1);
		} else {
			$this->Flash->error(__('The reservation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'mesreservation'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Reservation->recursive = 0;
		$this->set('reservations', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
		$this->set('reservation', $this->Reservation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Reservation->create();
			if ($this->Reservation->save($this->request->data)) {
				$this->Flash->success(__('The reservation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reservation could not be saved. Please, try again.'));
			}
		}
		$events = $this->Reservation->Event->find('list');
		$paniers = $this->Reservation->Panier->find('list');
		$this->set(compact('events', 'paniers'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Reservation->exists($id)) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reservation->save($this->request->data)) {
				$this->Flash->success(__('The reservation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reservation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reservation.' . $this->Reservation->primaryKey => $id));
			$this->request->data = $this->Reservation->find('first', $options);
		}
		$events = $this->Reservation->Event->find('list');
		$paniers = $this->Reservation->Panier->find('list');
		$this->set(compact('events', 'paniers'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Reservation->id = $id;
		if (!$this->Reservation->exists()) {
			throw new NotFoundException(__('Invalid reservation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reservation->delete()) {
			$this->Flash->success(__('The reservation has been deleted.'));
		} else {
			$this->Flash->error(__('The reservation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    public function payer()
    {
       // debug($this->request->data);
        $id=$this->request->data['reservation'];
        $num=$this->request->data['numero'];
        $pass=$this->request->data['pass'];
        $reservation = $this->Reservation->findById($id);
        if (!$this->Reservation->exists($id)) {
            throw new NotFoundException(__('Invalid reservation'));
        }

        $carted=$this->Carte->findByNumero($num);
        if($carted == null  || empty($carted))
        {
            $this->Flash->success(__('Carte non trouvé'));
            return $this->redirect(array('action' => 'mesreservation'));
        }

        else
        {

            if($carted['Carte']['password']!=AuthComponent::password($pass))
            {
                $this->Flash->success(__('Mot de passe non correcte'));
                return $this->redirect(array('action' => 'mesreservation'));
            }
        }

        $prixTotal=$reservation['Reservation']['nbr_place'] * $reservation['Event']['prix'];

        $user=$reservation['Panier']['user'] ;
        $useer = $this->User->find('first', array(
            'conditions' => array('User.id' => $user)
        ));
        $point=$useer['User']['nb_point'];

        $carte=$this->Carte->findByUser($user);
        $solde=$carte['Carte']['solde'];
        if($solde<$prixTotal)
            $this->Flash->error(__('solde insuffisant'));
        else
        {
            $reservation['Reservation']['statut'] = 'payee';
            $carte['Carte']['solde']=$carte['Carte']['solde']-$prixTotal;



            if($this->Reservation->save($reservation))
            {
                 $useer['User']['nb_point']=$point+1;
                 unset($useer['User']['img']);
                 $this->User->save($useer['User']);
                 $this->Carte->save($carte);
                 $this->Flash->success(__('payemment effectué avec succes'));
            }

            else
                $this->Flash->error(__('payemment non effectué'));



        }

        return $this->redirect(array('action' => 'mesreservation'));


    }
}
