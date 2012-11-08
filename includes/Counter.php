<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Counter
 *
 * @author webmaster
 */
class Counter {
    //put your code here
    
    private static $_count = 0;
    
    public function __construct() {
        self::$_count++;// counter+1
    }
    
    
    public static function getCount() {
        return self::$_count;
    }
    
    public function __destruct() {
        self::$_count--; // counter -1
    }
    
}

?>
