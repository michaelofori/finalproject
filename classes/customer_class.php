<?php


require('../settings/db_class.php');

 class customerClass extends db_connection {

    //add
    public function registerCustomer_cls($customer_name, $customer_email, $customer_pass, $customer_country, $customer_city,
     $customer_contact){
        //write the sql
         $sql = "INSERT INTO `customer` (`customer_name`,`customer_email`,`customer_pass`,`customer_country`,`customer_city`,`customer_contact`) 
         VALUES ('$customer_name','$customer_email','$customer_pass','$customer_country','$customer_city','$customer_contact')";
        //execute the sql
        return $this-> db_query($sql);


    }

     //select
    public function selectOneCustomer($customer_id){
        //write the sql
        $sql = "SELECT * FROM `customer` WHERE `customer_id` = '$customer_id'";
        //execute the sql
        return $this-> db_fetch_all($sql);
        

    }

    //select
    public function selectOneEmail($customer_email){
        //write the sql
        $sql = "SELECT * FROM `customer` WHERE `customer_email` = '$customer_email'";
        //execute the sql
        return $this-> db_fetch_one($sql);
        

    }

    public function selectAllCustomer(){
        //write the sql
        $sql= "SELECT * FROM `customer` ";
        //execute the sql
        return $this-> db_fetch_all($sql);


    }

     //edit

     public function editCustomer_cls($customer_id,$customer_name,$customer_country, $customer_city,
     $customer_contact){
        $sql = "UPDATE `customer` SET `customer_name`='$customer_name',`customer_country` = '$customer_country',
        `customer_city` = '$customer_city',`customer_contact` = '$customer_contact' WHERE `customer_id` = '$customer_id'";
        return $this-> db_query($sql);

    } //delete
    function deleteCustomer_cls($customer_id){
         //write the sql
         $sql= "DELETE FROM `customer` WHERE `customer_id` = '$customer_id' ";
         //execute the sql
         return $this-> db_query($sql);


    }
 }