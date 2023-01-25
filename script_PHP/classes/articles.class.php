<?php 
class Articles{
    protected $id;
    public $title;
    public $thumbnail;
    public $article;

    function getID(){
        return $this->id;
    }
    function setID($id){
        return $this->id=$id;
    }
    function getTitle(){
        return $this->title;
    }
    function setTitle($title){
        return $this->title = $title;
    }
    function getThumbnail(){
        return $this->thumbnail;
    }
    function setThumbnail($thumbnail){
        return $this->thumbnail = $thumbnail;
    }
    function getArticle(){
        return $this->article;
    }
    function setArticle($article){
        return $this->article = $article;
    }

    function createArticles($category){
        
        $db = new DB;
        $conn = $db->connectDB();
        $idAdm=$_SESSION['idAdmin'];
        $req = $conn->prepare("INSERT INTO `articles`(`title`, `article`, `thumbnail`, `idCategory`, `idAdmin`) VALUES (?,?,?,?,?)");
        $result = $req->execute(array($this->title, $this->article, $this->thumbnail, $category, $idAdm));
        return $result;

    }
    static public function fetshArticles($var=null){
        $db = new DB;
        $conn = $db->connectDB();
        if(isset($var)){
            $req = $conn->query('SELECT articles.id, articles.title, articles.idCategory, articles.article, articles.thumbnail, category.category, admin.name FROM `articles` Inner join category ON articles.idCategory = category.id INNER JOIN admin ON articles.idAdmin = admin.id WHERE articles.idAdmin=' . $var);
            return $req;
        }else{
            $req = $conn->query('SELECT articles.id, articles.title, articles.idCategory, articles.article, articles.thumbnail, category.category, admin.name FROM `articles` Inner join category ON articles.idCategory = category.id INNER JOIN admin ON articles.idAdmin = admin.id');
            return $req;
        }
    }
    static public function readarticles($var){
        $db = new DB;
        $conn = $db->connectDB();
        $req = $conn->query('SELECT articles.id, articles.title, articles.article, articles.thumbnail, category.category, admin.name FROM `articles` Inner join category ON articles.idCategory = category.id INNER JOIN admin ON articles.idAdmin = admin.id WHERE articles.id=' . $var);
        return $req;
    }
    public function updateArticle($category, $image=null){
        $db = new DB;
        $conn = $db->connectDB();
        if(isset($image)){
            $req = $conn->prepare("UPDATE `articles` SET `title`=?,`article`=?,`thumbnail`=?,`idCategory`=? WHERE articles.id=?");
            $resultat = $req->execute(array($this->title,$this->article,$this->thumbnail,$category,$this->id));
            return $resultat;

        }else{
            $req = $conn->prepare("UPDATE `articles` SET `title`=?,`article`=?,`idCategory`=? WHERE articles.id=?");
            $resultat = $req->execute(array($this->title,$this->article,$category,$this->id));
            return $resultat;
        }
    }
    public function deleteArticles(){
            $db = new Db();
            $conn = $db->connectDB();
            $req = $conn->prepare("DELETE FROM `articles` WHERE articles.id=?");
            $resultat = $req->execute(array($this->id));
            return $resultat;
    }
    static public function deleteAllARTs(){
        $db = new Db();
        $conn = $db->connectDB();
        $req = $conn->prepare("DELETE FROM `articles`");
        $resultat = $req->execute();
        return $resultat;
    }
    static public function nbrEcrivain(){
        $db = new Db();
        $conn = $db->connectDB();
        $req = $conn->query("SELECT COUNT(DISTINCT idAdmin) FROM articles");
        $count = $req->fetchColumn();
        return $count;
    }
    static public function nbrArticles(){
        $db = new Db();
        $conn = $db->connectDB();
        $req = $conn->query("SELECT COUNT(*) FROM articles");
        $count = $req->fetchColumn();
        return $count;
    }

}