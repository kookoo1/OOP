<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


require_once 'includes/Counter.php';


echo Counter::getCount().'<br />';
$x = new Counter();
echo Counter::getCount().'<br />';
$y = new Counter();
echo Counter::getCount().'<br />';
$z = new Counter();
echo $z->getCount().'<br />';

unset($z);//komt in de destruct
echo Counter::getCount().'<br />';
?>
