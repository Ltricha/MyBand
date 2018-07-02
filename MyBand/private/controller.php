<?php

function display_view($smarty){
    $smarty->display('header.tpl');
    $smarty->display('menu.tpl');
    $smarty->display('footer.tpl');

}



///////////////////////////////////////////////-Links

function homepage_action($smarty){
    $smarty->display('home.tpl');
}
function registration_action($smarty){
    $smarty->display('registration.tpl');
}
function login_action($smarty){
    $smarty->display('login.tpl');
}
function admin_action($smarty){
    $smarty->display('header.tpl');
    $smarty->display('menu.tpl');
    $smarty->display('admin.tpl');
    $smarty->display('footer.tpl');}
function logout_action($smarty){
    $smarty->display('logout.tpl');
}

///////////////////////////////////////////////-Buttons

function verify_registration_action(){
    verify_registration();
}
function verify_login_action() {
    verify_login();
}

///////////////////////////////////////////////-Unknown page

function page_not_found_action($smarty){
    $smarty->display('notfound.tpl');
}

///////////////////////////////////////////////-Admin commands

function edit_text_action(){
   edit_text();
}

///////////////////////////////////////////////
