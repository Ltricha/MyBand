<?php
session_start();


require'../private/smarty/Smarty.class.php';
require '../private/model.php';
require '../private/controller.php';

//Create smarty object
$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');





if(isset($_SESSION['username'])){
    echo 'Welcome, ' . $_SESSION['username'] . '.';
}

//Set page
if(isset($_GET['page'])){
    $page = $_GET['page'];

} else {
    $page = 'home';
//    display_view($smarty);
}


//Form buttons user
if(isset($_POST['login'])){
    verify_login_action();
}
if(isset($_POST['register'])){
    verify_registration_action();
}

//Form buttons admin
if(isset($_POST['edit_content'])){
    edit_content_action();
}
if(isset($_POST['delete_content'])){
    delete_content_action();
}

//Direct to page, only connects to controller.php
switch($page){
    case 'home': homepage_action($smarty); break;
    case 'registration': registration_action($smarty); break;
    case 'login': if(!isset($_SESSION['username'])){
        login_action($smarty);
    }else{
        echo 'You are already logged in.';
    } break;
    case 'admin': if(isset($_SESSION['admin'])){
        admin_action($smarty);
    }else{
        echo 'You do not have permission.';
    } break;
    case 'logout': if(isset($_SESSION['username'])){
        session_destroy();
        unset($_SESSION['username']);
        logout_action($smarty);
        header("location: index.php?page=home");
    } break;
    case 'agenda': agenda_action($smarty); break;
    case 'about': about_action($smarty); break;
    case 'search': search_action($smarty); break;
    case 'contact': contact_action($smarty); break;
    case $page: display_page($smarty, $page); break;
    default : page_not_found_action($smarty); break;
}




