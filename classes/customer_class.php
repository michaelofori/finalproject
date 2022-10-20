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
    public function selectOneContact($id){
        //write the sql
        $sql = "SELECT * FROM `phonebook` WHERE `pid` = '$id'";
        //execute the sql
        return $this-> db_fetch_all($sql);
        

    }

    public function selectAllContacts(){
        //write the sql
        $sql= "SELECT * FROM `phonebook` ";
        //execute the sql
        return $this-> db_fetch_all($sql);


    }

     //edit

     public function editContact_cls($id,$pname,$pphoned){
        $sql = "UPDATE `phonebook` SET `pname`='$pname',`pphoned` = '$pphoned' WHERE `pid` = '$id'";
        return $this-> db_query($sql);

    } //delete
    function deleteContact_cls($id){
         //write the sql
         $sql= "DELETE FROM `phonebook` WHERE `pid` = '$id' ";
         //execute the sql
         return $this-> db_query($sql);


    }
 }