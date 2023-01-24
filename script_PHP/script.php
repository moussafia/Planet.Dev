<?php 
  session_start();

if (isset($_POST['enregistrerAdmin']))
    createAdmin();
if (isset($_POST['seConnecter']))
    logIN();
if (isset($_POST['shareArticle']))
    shareArticle();
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


function shareArticle()
{
    $title = $_POST['TitleArticle'];
    $image = $_FILES['imageArticle']['name'];
    $tmp_img = $_FILES['imageArticle']['tmp_name'];
    $sizeIMG = $_FILES['imageArticle']['size'];
    $category = $_POST['categoryArticle'];
    $categoryINPhide = $_POST['otherCategory'];
    $article = $_POST['articleINP'];
    $ctg = new Category();
    $ART = new Articles();

    for ($i = 0; $i < count($title); $i++) {

        if ($sizeIMG[$i] > 1500000000) {
            $message = "file du taille grande";
            header('location: dashboard.php?error'.$message);
        } else {
            $img_ext = pathinfo($image[$i], PATHINFO_EXTENSION);
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ext;
            $img_new_path = '../assets/imgUploaded' . $new_img_name;
            move_uploaded_file($tmp_img[$i], $img_new_path);

            $new_img_name = $image[$i] ? $new_img_name : 'avatarPNG.jpg';
            if ($category[$i] == "other") {
                $ctg->setcategory($categoryINPhide[$i]);
                $ctg->createCategory();
                $category[$i] = $_SESSION['idcategory'];
                $ART->setTitle($title[$i]);
                $ART->setThumbnail($new_img_name);
                $ART->setArticle($article[$i]);
                $ART->createArticles($category[$i]);
            }
        }


    }
}