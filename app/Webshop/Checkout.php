<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Webshop;

/**
 * Description of Checkout
 *
 * @author backend
 */
class Checkout {
    
    /**
     * 
     * @return \App\Webshop\Checkout
     */
    
    public static function getCheckoutFromSession(){
        if(session()->exists('checkout')){
            $checkout = session()->get('checkout');
        } else {
            $checkout = new Checkout();
            session()->put('checkout', $checkout);
        }
        
        return $checkout;
    }




    protected $cutomerName;
    protected $cutomerEmail;
    protected $cutomerPhone;
    protected $cutomerCountry;
    protected $cutomerCity;
    protected $cutomerZip;
    protected $cutomerAddress;

    
    protected $deliveryCountry;
    protected $deliveryCity;
    protected $deliveryZip;
    protected $deliveryAddress; 
    
    

    
    public function getCustomerName() {
        return $this->cutomerName;
    }

    public function getCustomerEmail() {
        return $this->cutomerEmail;
    }

    public function getCustomerPhone() {
        return $this->cutomerPhone;
    }

    public function getCustomerCountry() {
        return $this->cutomerCountry;
    }

    public function getCustomerCity() {
        return $this->cutomerCity;
    }

    public function getCustomerZip() {
        return $this->cutomerZip;
    }

    public function getCustomerAddress() {
        return $this->cutomerAddress;
    }

    public function getDeliveryCountry() {
        return $this->deliveryCountry;
    }

    public function getDeliveryCity() {
        return $this->deliveryCity;
    }

    public function getDeliveryZip() {
        return $this->deliveryZip;
    }

    public function getDeliveryAddress() {
        return $this->deliveryAddress;
    }

    public function setCustomerName($cutomerName) {
        $this->cutomerName = $cutomerName;
        return $this;
    }

    public function setCustomerEmail($cutomerEmail) {
        $this->cutomerEmail = $cutomerEmail;
        return $this;
    }

    public function setCustomerPhone($cutomerPhone) {
        $this->cutomerPhone = $cutomerPhone;
        return $this;
    }

    public function setCustomerCountry($cutomerCountry) {
        $this->cutomerCountry = $cutomerCountry;
        return $this;
    }

    public function setCustomerCity($cutomerCity) {
        $this->cutomerCity = $cutomerCity;
        return $this;
    }

    public function setCustomerZip($cutomerZip) {
        $this->cutomerZip = $cutomerZip;
        return $this;
    }

    public function setCustomerAddress($cutomerAddress) {
        $this->cutomerAddress = $cutomerAddress;
        return $this;
    }

    public function setDeliveryCountry($deliveryCountry) {
        $this->deliveryCountry = $deliveryCountry;
        return $this;
    }

    public function setDeliveryCity($deliveryCity) {
        $this->deliveryCity = $deliveryCity;
        return $this;
    }

    public function setDeliveryZip($deliveryZip) {
        $this->deliveryZip = $deliveryZip;
        return $this;
    }

    public function setDeliveryAddress($deliveryAddress) {
        $this->deliveryAddress = $deliveryAddress;
        return $this;
    }


    
}
