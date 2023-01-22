<?php session_start();
  


if (isset($_POST['enregistrerAdmin']))
    createAdmin();

function createAdmin(){
    $admin = new Admin;
    $admin->setname($_POST['adminName']);
    $admin->setpassword($_POST['password']);
    $admin->setemail($_POST['email']);
    $admin->createAdmin();
    // $_SESSION['idAdmin'] = $admin->getID();
}
