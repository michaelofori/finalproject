<?php
include ("../controllers/display.php");
// print_r(selectAllCtr());
function displayAllCtr(){
    $result=selectAllCtr();

    // int(count($result));
    

    echo "<table border='1px'>";

    for ($i=0 ;$i<count($result);$i++) {

    echo "</tr>";
    echo "<td>".$result[$i]['pname']."</td>";
    echo "<td>".$result[$i]['pphoned']."</td>";
    echo "<th><form action='../view/edit.php' method='POST'>
    <input type='submit' value='edit'  name='edit'>
    <input type='hidden' name='id' value='".$result[$i]['pid']."'></form></th>";
   
    echo "<th><form action='../actions/delete_records.php' method='POST'>
    <input type='submit' value='delete'  name='delete'>
    <input type='hidden' name='id' value='".$result[$i]['pid']."'></form></th>";
  
    

    echo "</tr>";

    }



} echo "<table>";

        



?>