<?php
/* Smarty version 3.1.32, created on 2018-07-11 11:43:31
  from 'C:\Users\latri\Documents\ma\bewijzenmap\HOST\MyBand\private\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45d1433fa044_74290768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4e733741661b287bb9a2c1cbbe48c22d3c92d0d' => 
    array (
      0 => 'C:\\Users\\latri\\Documents\\ma\\bewijzenmap\\HOST\\MyBand\\private\\views\\home.tpl',
      1 => 1531300079,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45d1433fa044_74290768 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Home</h2>
<h3>Welcome, visitor.</h3>

<div id="modal">
        <div id="modal_content">
                <form method="post" action="index.php">
                        <!--Javascript adds name to textarea-->

                        <label>Title<input type="text" id="title" name="title"></label><br>

                        <textarea id="content" name="" maxlength="2500" autofocus></textarea><br>

                        <input type="text" name="image" id="image">

                        <input id="id" type="hidden" name="id" value="">
                        <input type="submit" value="Submit" name="edit_content">
                        <input type="submit" value="Delete" name="delete_content">
                </form>
        </div>
</div>

<div id="wrapper">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <p class="admin_edit" id="<?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
</p>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<button class="admin_edit" id="add_text">Add Text</button><br><?php }
}
