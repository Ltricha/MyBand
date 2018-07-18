<h2>Home</h2>
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
        {foreach $articles as $article}
            <p class="admin_edit" id="{$article[0]}">{$article[2]}</p>
        {/foreach}
</div>


<button class="admin_edit" id="add_text">Add Text</button><br>