<?php


///////////////////////////////////////////////-Links

function homepage_action($smarty){
    global $page;
    display_page($smarty, $page);
}

function display_page($smarty, $page){
    $articles = get_content();
    $smarty->assign('articles', $articles);
    $smarty->display('header.tpl');
    if(isset($_SESSION['username'])){
        $smarty->display('menu_loggedin.tpl');
        echo "Logged in";
    } else{
        $smarty->display('menu.tpl');
        echo "Not logged in";
    }
    $smarty->display($page . '.tpl');
    $smarty->display('footer.tpl');
}

function registration_action($smarty){
    global $page;
    display_page($smarty, $page);
}
function login_action($smarty){
    global $page;
    display_page($smarty, $page);
}
function admin_action($smarty){
    global $page;
    display_page($smarty, $page);
}
function logout_action($smarty){
    global $page;
    display_page($smarty, $page);
}

function agenda_action($smarty){
    global $page;
    display_page($smarty, $page);
}
function about_action($smarty){
    global $page;
    display_page($smarty, $page);
}
function search_action($smarty){
    global $page;
    display_page($smarty, $page);
}
function contact_action($smarty){
    global $page;
    display_page($smarty, $page);
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

function edit_content_action(){
    edit_content();
}
function delete_content_action(){
    delete_content();
}

///////////////////////////////////////////////
