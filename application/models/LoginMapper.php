<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Application_Model_LoginMapper
{
    protected $_dbTable;
 
    public function setDbTable($dbTable)
    {
        if (is_string($dbTable)) {
            $dbTable = new $dbTable();
        }
        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception('Invalid table data gateway provided');
        }
        $this->_dbTable = $dbTable;
        return $this;
    }
 
    public function getDbTable()
    {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_Login');
        }
        return $this->_dbTable;
    }
public function save(Application_Model_Login $login)
    {
        $data = array(
            'username'   => $login->getUsername(),
            'password' => $login->getPassword(),
            
        );
 
        if (null === ($username = $login->getUsername())) {
            //unset($data['username']);
            $this->getDbTable()->insert($data);
        } 
        //else {
           // $this->getDbTable()->update($data, array('id = ?' => $id));
       // }
    }
}
