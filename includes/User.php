<?php

class User {

    protected $_username;

    public function __construct($name) {
        $this->_username = $name;
    }

    public function getUsername() {

        return $this->_username;
    }

}

class Customer extends User {

    private $_customerId;

    public function __construct($name, $customerId) {

        $this->_username = $name;
        $this->_customerId = $customerId;
    }

    public function getUsername() {

        if ($this->_username === 'xavier') {
            return parent::getUsername();
        } else {
            return 'De gebruiker is ' . $this->_username;
        }
    }

}

?>
