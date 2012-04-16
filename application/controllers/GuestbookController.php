<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class GuestbookController extends Zend_Controller_Action {

    public function indexAction() {

        // $guestbook = new Application_Model_GuestbookMapper();
        //var_dump($guestbook);
        //exit;
        // echo'hello';
        // $guestbook->fetchRow($guestbook->select()->where('id = ?', 1));
        //$this->view->entries = $guestbook->fetchAll();
        // try{
        //  $guestbook = new Application_Model_GuestbookMapper();
        // $this->view->entries = $guestbook->fetchAll();
        // }
        // catch (exception $e)
        // {
        // echo $e;
        //}
        $params = array
            (
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'Data'
        );

        try {
            $db = Zend_Db::factory('PDO_MYSQL', $params);
            $db->getConnection();
        } catch (Zend_Db_Adapter_Exception $e) {
            echo $e->getMessage();
        }
         $guestbook = new Application_Model_GuestbookMapper();
         $this->view->entries = $guestbook->fetchAll();
        //$stmt = $db->query('SELECT * FROM guestbook');
//$rows = $stmt->fetchAll();
        //$rows=$guestbook->fetchRow($guestbook->select()->where('id = ?', 2));
        //$stmt = $db->query('SELECT * FROM guestbook where id = 2 ');

     //   $rows = $stmt->fetchAll();

//var_dump($rows);
//exit;
//$rows=array();
       // $this->view->entries = $rows;
//var_dump($rows);
//exit;
        // $test=1;
        // var_dump($test);
        //exit;
        if ($test == null) {
            echo"null";
        } else {
            echo'not null';
        }
        //$this->view->entries = $test;
    }

    public function testAction() {
        
    }

    public function signAction() {
        
    }

    /* public function createAction() {

      $params = array
      (
      'host' => 'localhost',
      'username' => 'root',
      'password' => '',
      'dbname' => 'guestbook'
      );

      try {
      $db = Zend_Db::factory('PDO_MYSQL', $params);
      $db->getConnection();
      } catch (Zend_Db_Adapter_Exception $e) {
      echo $e->getMessage();
      }
      $date = new Zend_Date;
      $test = new Auth_Model_UserSettings;
      // $stmt = $db->query("insert into guestbook values('bvc@xyz.com','fred','23/01/2012')");
      //$this->view->create = $stmt;
      //$rows = $stmt->fetchAll();
      $arr = array('email' => 'bvc@xyz.com', 'comment' => 'fred', 'created' => $date->getIso(), 'updated' => $date->getIso());
      var_dump($arr);
      exit;
      $this->view->create = $db->insert($test($arr));
      } */

    public function createAction() {

        $params = array
            (
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'Data'
        );

        $db = Zend_Db::factory('PDO_MYSQL', $params);
        $db->getConnection();

        try {
            $sql = "INSERT INTO `guestbook` 
		(`email` , `comment` ,`created` )
		VALUES 
		('bvc3@xyz.com', 'fred', '2012/06/30')";
            $db->query($sql);
        } catch (Expression $e) {
            var_dump($e);
            exit;
            echo $e;
        }
//var_dump($db);
//exit;
        //$this->view->assign('title','Registration Process');
//$this->view->assign('description','Registration succes');  	
        // $date = new Zend_Date;
        //$this->view->create = $guestbook->create(new Application_Model_Guestbook(array('email' => 'bvc@xyz.com', 'comment' => 'fred', 'created' => $date->getIso())));           


        /* $date=new Zend_Date;
          $arr = array('email' => 'bvc@xyz.com', 'comment' => 'fred', 'created' => $date->getIso());
          $mapper  = new Application_Model_GuestbookMapper();
          $mapper->create($arr);
          // $comment = new Application_Model_Guestbook($form->getValues());
          // $mapper  = new Application_Model_GuestbookMapper();
          // $mapper->create($comment);
          $this->view->create=$arr; */
        //$comment = $arr->getValues();
        // var_dump($arr);
        //exit;
        //$mapper  = new Application_Model_GuestbookMapper();
        //$mapper->create($comment);
        //return $this->_helper->redirector('index');


        /*   try{
          $date=new Zend_Date;
          $arr = array('email' => 'bvc@xyz.com', 'comment' => 'fred', 'created' => $date->getIso());
          $trues = $guestbook->create(new Application_Model_Guestbook($arr));
          var_dump($trues);
          exit;
          }
          catch(Exception $e){
          echo $e;
          }
          //$this->view->create=$arr $this->view->create; */
    }

}
