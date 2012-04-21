<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'Zend/Controller/Action.php';

class LoginController extends Zend_Controller_Action {
    /* public function getForm()
      {
      // create form as above
      // $form=new Form_Login;


      return $form;
      var_dump($form);
      exit;
      }

      public function indexAction()
      {
      // render user/form.phtml
      $this->view->form = $this->getForm();
      $this->render('login');
      }

      public function loginAction()
      {
      if (!$this->getRequest()->isPost()) {
      return $this->_forward('index');
      }
      $form = $this->getForm();
      if (!$form->isValid($_POST)) {
      // Failed validation; redisplay form
      $this->view->form = $form;
      return $this->render('login');
      }

      $values = $form->getValues();
      // now try and authenticate....
      }

     */

   /* public function loginAction() {
        $form = new Application_Form_Login;

        if ($this->_request->isPost()) {
            $data = $this->_request->getPost();
            if ($form->isValid($data)) {
                
            }
            $form->populate($data);
        }
        $this->view->form = $form;
    }
    */
    
   public function loginAction()
    {
        $request = $this->getRequest();
        $form    = new Application_Form_Login();
 
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {
                $comment = new Application_Model_Login($form->getValues());
                $mapper  = new Application_Model_LoginMapper();
                $mapper->save($comment);
                return $this->_helper->redirector('login');
            }
        }
 
        $this->view->form = $form;
    }

    
    
    
    
}