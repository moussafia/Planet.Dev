<?php
session_start();

if (isset($_POST['enregistrerAdmin']))
    createAdmin();
if (isset($_POST['seConnecter']))
    logIN();
if (isset($_POST['shareArticle']))
    shareArticle();
if (isset($_POST['editArticle']))
    UpdateArticle();

function createAdmin()
{
    $admin = new Admin;
    $password = trim(stripslashes(htmlspecialchars($_POST['password'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
    $name = trim(stripslashes(htmlspecialchars($_POST['adminName'])));
    $admin->setname($name);
    $admin->setpassword($password);
    $admin->setemail($email);
    $admin->createAdmin();
}

function logIN()
{
    $admin = new Admin;
    $password = trim(stripslashes(htmlspecialchars($_POST['passwordLogIN'])));
    $email = trim(stripslashes(htmlspecialchars($_POST['emailLOGIN'])));
    $admin->setpassword($password);
    $admin->setemail($email);
    $admin->LogIN();
}


function shareArticle()
{
    $j = 0;
    $title = $_POST['TitleArticle'];
    $image = $_FILES['imageArticle']['name'];
    $tmp_img = $_FILES['imageArticle']['tmp_name'];
    $sizeIMG = $_FILES['imageArticle']['size'];
    $category = $_POST['categoryArticle'];
    $article = $_POST['articleINP'];
    $ctg = new Category();
    $ART = new Articles();

    for ($i = 0; $i < count($title); $i++) {

        if ($sizeIMG[$i] > 1500000000) {
            $message = "file du taille grande";
            header('location: dashboard.php?error' . $message);
        } else {
            $img_ext = pathinfo($image[$i], PATHINFO_EXTENSION);
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ext;
            $img_new_path = '../assets/imgUploaded/' . $new_img_name;
            move_uploaded_file($tmp_img[$i], $img_new_path);
            $new_img_name = $image[$i] ? $new_img_name : 'avatarPNG.jpg';
            if ($category[$i] == "other") {
                $categoryINPhide = $_POST['otherCategory'][$j];
                $j++;
                if (!empty($categoryINPhide) && !empty($title[$i]) && !empty($article[$i])) {
                    $ctg->setcategory(trim(stripslashes(htmlspecialchars($categoryINPhide))));
                    $ctg->createCategory();
                    $category[$i] = $_SESSION['idcategory'];
                    $ART->setTitle(trim(stripslashes(htmlspecialchars($title[$i]))));
                    $ART->setThumbnail(trim(stripslashes(htmlspecialchars($new_img_name))));
                    $ART->setArticle(trim(stripslashes(htmlspecialchars($article[$i]))));
                    $ART->createArticles(trim(stripslashes(htmlspecialchars($category[$i]))));
                }
            } else {
                if (!empty($category[$i]) && !empty($title[$i]) && !empty($article[$i])) {
                    $ART->setTitle(trim(stripslashes(htmlspecialchars($title[$i]))));
                    $ART->setThumbnail(trim(stripslashes(htmlspecialchars($new_img_name))));
                    $ART->setArticle(trim(stripslashes(htmlspecialchars($article[$i]))));
                    $ART->createArticles(trim(stripslashes(htmlspecialchars($category[$i]))));
                }
            }
        }
    }
}
function displayCutString($string)
{
    if (strlen($string) > 100) {
        $string_cut = substr($string, 0, 100);
        $stringEndEspace = strrpos($string_cut, ' ');
        $newString = $stringEndEspace ? substr($string, 0, $stringEndEspace) : substr($string_cut, 0);
        $newString .= '...';
        return $newString;
    } else {
        return $string;
    }
}

function UpdateArticle()
{
    $title = $_POST['TitleArticle'][0];
    $image = $_FILES['imageArticle']['name'][0];
    $tmp_img = $_FILES['imageArticle']['tmp_name'][0];
    $sizeIMG = $_FILES['imageArticle']['size'][0];
    $category = $_POST['categoryArticle'][0];
    $article = $_POST['articleINP'][0];
    $idArticle = $_POST['hideINParticle'][0];
    $ctg = new Category();
    $ART = new Articles();
    $ART->setID($idArticle);
    if (!empty($image)) { $var = 1;
        if ($sizeIMG > 2000000000) {
            $message = "file du taille grande";
            header('location: myarticles.php?error' . $message);
        } else {die(print_r($title));
            $img_ext = pathinfo($image, PATHINFO_EXTENSION);
            $new_img_name = uniqid("IMG-", true) . '.' . $img_ext;
            $img_new_path = '../assets/imgUploaded/' . $new_img_name;
            move_uploaded_file($tmp_img, $img_new_path);
            $new_img_name = $image ? $new_img_name : 'avatarPNG.jpg';
            if ($category == "other") {
                $categoryINPhide = $_POST['otherCategory'];
                if (!empty($categoryINPhide) && !empty($title) && !empty($article)) {
                    $ctg->setcategory(trim(stripslashes(htmlspecialchars($categoryINPhide))));
                    $ctg->createCategory();
                    $category = $_SESSION['idcategory'];
                    $ART->setTitle(trim(stripslashes(htmlspecialchars($title))));
                    $ART->setThumbnail(trim(stripslashes(htmlspecialchars($new_img_name))));
                    $ART->setArticle(trim(stripslashes(htmlspecialchars($article))));
                    $ART->updateArticle(trim(stripslashes(htmlspecialchars($category))),$var);
                }
            } else {
                if (!empty($category) && !empty($title) && !empty($article)) {
                    $ART->setTitle(trim(stripslashes(htmlspecialchars($title))));
                    $ART->setThumbnail(trim(stripslashes(htmlspecialchars($new_img_name))));
                    $ART->setArticle(trim(stripslashes(htmlspecialchars($article))));
                    $ART->updateArticle(trim(stripslashes(htmlspecialchars($category))),$var);
                }
            }
        }
    }else{
        if ($category == "other") {
            $categoryINPhide = $_POST['otherCategory'];
            if (!empty($categoryINPhide) && !empty($title) && !empty($article)) {
                $ctg->setcategory(trim(stripslashes(htmlspecialchars($categoryINPhide))));
                $ctg->createCategory();
                $category = $_SESSION['idcategory'];
                $ART->setTitle(trim(stripslashes(htmlspecialchars($title))));
                $ART->setArticle(trim(stripslashes(htmlspecialchars($article))));
                $ART->updateArticle(trim(stripslashes(htmlspecialchars($category))));
            }
        } else {
            if (!empty($category) && !empty($title) && !empty($article)) {
                $ART->setTitle(trim(stripslashes(htmlspecialchars($title))));
                $ART->setArticle(trim(stripslashes(htmlspecialchars($article))));
                $ART->updateArticle(trim(stripslashes(htmlspecialchars($category))));
            }
        }
    }

}