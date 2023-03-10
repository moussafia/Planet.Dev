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
        $conn = $db->connectDB();
        $statement = $conn->query("SELECT COUNT(`email`) FROM `admin` WHERE `email` like '$this->email'");
        $count = $statement->fetch(PDO::FETCH_ASSOC);
        if ($count['COUNT(`email`)'] > 0) {
            header("location : signUP.php?this email already exist");
        }else {
            $req = $conn->prepare('insert into admin(name,password,email) value(?,?,?)');
            $result = $req->execute(array($this->name, $this->password, $this->email));
            header('location: signIN.php');
            return $result;
        }
    }  
    function LogIN(){
        $db = new Db;
        $conn=$db->connectDB();
        $req =$conn ->query( "SELECT * FROM `admin` WHERE `email` like '$this->email' and `password` like '$this->password'");
        $statment = $req->fetch(PDO::FETCH_ASSOC);
        if(isset($statment['email'])){
                $_SESSION['nameAdmin'] = $statment['name'];
                $_SESSION['idAdmin'] = $statment['id'];
                header('location: dashboard.php');
            
        }else{
            header('location: signIN.php?error connection');
        }
    }
 public function logOUT(){
        session_unset();
        session_destroy();
    }
static public function nbrUtilisateur(){
    $db=new Db;
    $conn = $db->connectDB();
    $statement = $conn->query("SELECT COUNT(*) FROM `admin`");
    $count = $statement->fetch(PDO::FETCH_ASSOC);
        return $count['COUNT(*)'];
}
}