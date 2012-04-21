<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class Application_Model_Login {

    protected $_username;
    protected $_password;
  

    public function __construct(array $options = null) {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    public function __set($name, $value) {
        $method = 'set' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid Login property');
        }
        $this->$method($value);
    }

    public function __get($name) {
        $method = 'get' . $name;
        if (('mapper' == $name) || !method_exists($this, $method)) {
            throw new Exception('Invalid Login property');
        }
        return $this->$method();
    }

    public function setOptions(array $options) {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

    public function setUsername($username) {
        $this->_username = (string) $username;
        return $this;
    }

    public function getUsername() {
        return $this->_username;
    }

    public function setPassword($password) {
        $this->_password = (string) $password;
        return $this;
    }

    public function getPassword() {
        return $this->_password;
    }

    

}
