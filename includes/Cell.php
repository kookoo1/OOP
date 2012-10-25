<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cell
 *
 * @author webmaster
 */
class Cell {
    //put your code here
    
    
    private $_content;
    
    
    public function __construct($content) {
        
        $this->_content = $content;
        
    }
    
    public function getContent() {
        return $this->_content;
    }
}

?>
