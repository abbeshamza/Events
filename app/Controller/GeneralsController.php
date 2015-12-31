<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 28/11/2015
 * Time: 20:06
 */

class GeneralsController extends AppController {

    public $components = array('Paginator', 'Flash', 'Session','Auth');

    public function about()
{

}
    public function contact()
    {
        if ($this->request->is('post')) {
            $contenu= $this->request->data['message'];
            $sujet=$this->request->data['sujet'];
            App::uses('CakeEmail','Network/Email');
            $email = new CakeEmail('default');
            $email->to('abbes.hamza.2013@gmail.com');
            $email->subject('formation');
            $email->viewVars(array('user'=>$this->Session->read('Auth.User.email'),
                                    'contenu'=>$contenu,
                                    'sujet' =>$sujet,
            ));
            $email->emailFormat('both');
            $email->template('email');
            if($email->send())
                $this->Flash->success(__('email envoyé avec succes'));
            else
                $this->Flash->error(__('Email non envoyé essayer de nouveau'));
            return $this->redirect(array('action' => 'index','controller'=>'events'));


        }


    }

}