<?php 
class Admin{
    protected $id;
    public $name;
    public $email;
    private $password;
    
    public function getID(){
        return $this->id;
    }
    public function getname(){
        return $this->name;
    }
    public function setname($name){
        return $this->name=$name;
    }
    public function getemail(){
        return $this->email;
    }
    public function setemail($email){
        return $this->email=$email;
    }
    public function getpassword(){
        return $this->password;
    }
    public function setpassword($password){
        return $this->password=$password;
    }
    function createAdmin(){
        $db=new Db;
        $query = 'insert into admin(name,password,email) value(?,?,?)';
        $req = $db->connectDB()->prepare($query);
        $result = $req->execute(array($this->name, $this->password, $this->email));
        return $result;
    }  
}