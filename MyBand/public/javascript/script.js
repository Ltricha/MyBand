let admin_edit = document.getElementsByClassName("admin_edit");
let modal = document.getElementById("modal");
let modal_content = document.getElementById("modal_content");

let id = document.getElementById("id");
let content = document.getElementById("content");
let title =  document.getElementById("title");

console.log(admin_edit.length);



for(let i = 0; i < admin_edit.length; i++){
    admin_edit[i].addEventListener("click", function(){
        modal.style.display = "block";
        if(this.id == "add_text"){
            content.name = "add_text";
        } else{
            id.value = this.id;
            content.name = "edit_text";
            content.value = this.innerHTML;
        }

    })
}

window.addEventListener("click", function(){
    if(event.target == modal){
        modal.style.display = "none";
        content.value = "";
    }
});

function add_text(){


}
