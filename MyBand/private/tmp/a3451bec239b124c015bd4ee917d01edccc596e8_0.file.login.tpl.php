<?php
/* Smarty version 3.1.32, created on 2018-07-02 11:57:54
  from 'C:\Users\latri\Documents\ma\bewijzenmap\HOST\MyBand\private\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b39f7221ce3a1_34864342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3451bec239b124c015bd4ee917d01edccc596e8' => 
    array (
      0 => 'C:\\Users\\latri\\Documents\\ma\\bewijzenmap\\HOST\\MyBand\\private\\views\\login.tpl',
      1 => 1530525309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b39f7221ce3a1_34864342 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Log in</h2>
<form action="index.php?page=login" method="post">
    Username:
    <input type="text" name="username"><br>
    Password:
    <input type="password" name="password"><br>

    <input type="submit" name="login" value="Log in">
</form><?php }
}
