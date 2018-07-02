<?php
/* Smarty version 3.1.32, created on 2018-07-02 12:47:44
  from 'C:\Users\latri\Documents\ma\bewijzenmap\HOST\MyBand\private\views\registration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3a02d04ebf78_64526524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c76428eaf3fbaf6ef16c30fcaf63a6007581d082' => 
    array (
      0 => 'C:\\Users\\latri\\Documents\\ma\\bewijzenmap\\HOST\\MyBand\\private\\views\\registration.tpl',
      1 => 1530526733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3a02d04ebf78_64526524 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Registration</h2>
<form action="index.php?page=registration" method="post">
    Username:
    <input type="text" name="username"><br>
    Password:
    <input type="password" name="password"><br>
    Confirm password:
    <input type="password" name="password_confirm"><br>
    Email:
    <input type="email" name="email"><br>

    <input type="submit" name="register" value="Register">
</form>
<?php }
}
