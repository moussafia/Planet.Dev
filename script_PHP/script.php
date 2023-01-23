<?php 
  session_start();

if (isset($_POST['enregistrerAdmin']))
    createAdmin();
if (isset($_POST['seConnecter']))
    logIN();

function createAdmin(){
    $admin = new Admin;
    $password=trim(stripslashes(htmlspecialchars($_POST['password'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
    $name = trim(stripslashes(htmlspecialchars($_POST['adminName'])));
    $admin->setname($name);
    $admin->setpassword($password);
    $admin->setemail($email);
    $admin->createAdmin();
}

function logIN(){
    $admin = new Admin;
    $password=trim(stripslashes(htmlspecialchars($_POST['passwordLogIN'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['emailLOGIN'])));
    $admin->setpassword($password);
    $admin->setemail($email);
    $admin->LogIN();
}


