<?php
    /*
     The testing program for the GeneralUser class.
    */
    include "LmsUser.php";

    $newObj = new GeneralUser;
    $newObj->setUsername("UdamLiyanage");
    $newObj->setName("Udam");
    $newObj->setIndex("BSC-PLY-COM-16.2-159");
    echo $newObj->getUsername()."<br />".$newObj->getName()."<br />".$newObj->getIndexNumber();
?>