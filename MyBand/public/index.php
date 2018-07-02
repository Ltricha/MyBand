<?php
session_start();


if(isset($_SESSION['username'])){
    echo 'Welcome, ' . $_SESSION['username'] . '.';
}


require'../private/smarty/Smarty.class.php';
require '../private/model.php';
require '../private/controller.php';

//Create smarty object
$smarty = new Smarty();
$smarty->setCompileDir('../private/tmp');
$smarty->setTemplateDir('../private/views');

//Set page
if(isset($_GET['page'])){
    $page = $_GET['page'];
    display_view($smarty);
//    header_action($smarty);
//    menu_action($smarty);
//    footer_action($smarty);
} else {
    $page = 'home';
}




//Form submit user
if(isset($_POST['login'])){
    verify_login_action();
}
if(isset($_POST['register'])){
    verify_registration_action();
}

//Form submit admin
if(isset($_POST['submit_new_text'])){
    edit_text_action();
}





//Direct to page, only connects to controller.php
switch($page){
    case 'home': homepage_action($smarty); break;
    case 'registration': registration_action($smarty); break;
    case 'login': login_action($smarty); break;
    case 'admin': if(isset($_SESSION['admin'])){admin_action($smarty);} else{echo 'You do not have permission';} break;
    case 'logout': session_destroy(); unset($_SESSION['username']); logout_action($smarty); break;
    default : page_not_found_action($smarty); break;
}




