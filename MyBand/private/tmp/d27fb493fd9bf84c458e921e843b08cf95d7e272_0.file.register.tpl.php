<?php
/* Smarty version 3.1.32, created on 2018-06-28 12:30:05
  from 'C:\Users\latri\Documents\ma\bewijzenmap\HOST\MyBand\private\views\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b34b8ad0af096_39913139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd27fb493fd9bf84c458e921e843b08cf95d7e272' => 
    array (
      0 => 'C:\\Users\\latri\\Documents\\ma\\bewijzenmap\\HOST\\MyBand\\private\\views\\registration.tpl',
      1 => 1530181799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34b8ad0af096_39913139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="index.php?page=register" method="post">
    Username:
    <input type="text" name="username"><br>
    Password:
    <input type="password" name="password"><br>
    Confirm password:
    <input type="password" name="password_confirm"><br>
    Email:
    <input type="email" name="email"><br>


    <input type="submit" name="register" value="Registreren">
</form>

Dit is de registratie pagina<?php }
}
