<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Application_Model_LoginupdateMapper
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
    

   
    
      public function update(Application_Model_Loginupdate $userEntity) {
        $userRequest = array(
            'username'   => $userEntity->getUsername(),
            'password' => $userEntity->getPassword(),
        );

        if (null===($username=$login->getUsername())){
            $this->getDbTable()->insert($userRequest);
        }
       // } 
        else {
            var_dump($userRequest);
           exit;            
           $this->getDbTable()->update($userRequest, array('username = ?' => $username));
        }
        
       /* $password = $userEntity->getPassword();
        if (!empty($password)) {
            $userRequest['Password'] = $userEntity->getPassword();
        } else {
            $userRequest['Password'] = '';
        }
        
        
        $response = $this->getDatasource()->UpdateUserAccount(array('user' => $userRequest));
        
        
        $result = new StdClass;
        $result->response = $response->UpdateUserAccountResult->Result;
        $result->data = array();

        return $result;*/
    }
    
    
}
