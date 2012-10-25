<?php

/*
 * vehicle class
 */

/**
 * Description of Vehicle
 *
 * @author Kris Brassaert
 */
class Vehicle {
    /*     * * define public color ** */

    public $color;
    /*     * * define public num_doors ** */
    public $num_doors;
    /*     * * define public price ** */
    public $price;
    /*     * * define public shape ** */
    public $shape;
    /*     * * define public brand ** */
    public $brand;

    /*     * * define public methods  ** */

    /**
     * echo the price
     */
    public function showPrice() {
        return 'This ' .$this->getColor() .'  vehicle cost ' . $this->getPrice() ;
    }

    /**
     * echo the num of doors
     */
    public function numDoors() {

        return 'This vehicle has ' . $this->getNumDoors() . ' doors.';
    }

    public function drive() {

        return 'VROOOOM';
    }

    /*     * * setters ** */

    /**
     * 
     * @param type $color
     * @throws Exception
     */
    public function setColor($color) {

        if (null === $color) {
            throw new Exception('No Color!!');
        }
        
        $this->color = $color;
    }

    public function setNumDoors($numDoors) {

        $this->num_doors = $numDoors;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setShape($shape) {
        $this->shape = $shape;
    }

    
    /*** getters ***/
    
    public function getBrand() {

        return $this->brand;
    }

    public function getColor() {

        if ($this->color === 'white'){
            $this->color = 'Red';
        }
        return $this->color;
    }

    public function getNumDoors() {

        return $this->num_doors;
    }

    public function getPrice() {

        return $this->price;
    }

    public function getShape() {

        return $this->shape;
    }

}

?>
