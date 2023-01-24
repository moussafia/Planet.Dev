<?php 
class Articles{
    protected $id;
    public $title;
    public $thumbnail;
    public $article;

    function getID(){
        return $this->id;
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

}