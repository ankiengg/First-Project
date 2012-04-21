<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Application_Form_Login extends Zend_Form {

    public function init() {
        $this->setAction($this->getView()->url(array(
                            'controller' => 'login',
                            'action' => 'login')))
                ->setMethod('post');

        // Create and configure username element:
        $username = $this->createElement('text', 'username');
        $username->addValidator('alnum')
                ->addValidator('regex', false, array('/^[a-z]+/'))
                ->addValidator('stringLength', false, array(6, 10))
                ->setRequired(true)
                ->addFilter('StringToLower');

        // Create and configure password element:
        $password = $this->createElement('password', 'password');
        $password->addValidator('StringLength', false, array(6,10))
                ->setRequired(true);

        // Add elements to form:
        $this->addElement($username)
                ->addElement($password)
                // use addElement() as a factory to create 'Login' button:
                ->addElement('submit', 'login', array('label' => 'Login'));
    }

}