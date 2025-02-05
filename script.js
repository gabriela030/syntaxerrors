document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("taskForm");
    const addButton = document.getElementById("addBtn");

    addButton.addEventListener("click", function(){
        //change this to add form to calendar
        alert("task added!");
        form.onsubmit();

    });

});