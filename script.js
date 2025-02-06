
let task, start_time, end_time, task_id;
let wasteTime = 0;


document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("taskForm");
    const addButton = document.getElementById("addBtn");

    addButton.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent form submission (page reload)
        alert("New Task Added!");

        let task = document.getElementById('task').value;
        let start_time = document.getElementById('start_time').value;
        let end_time = document.getElementById('end_time').value;
        // Store the values in an object or variables

        let formData = {
            task: task,
            start_time: start_time,
            end_time: end_time
        };

        start_int = start_time.slice(0, 2);
        end_int = end_time.slice(0, 2);


        document.getElementById(start_int).innerText = task;
        document.getElementById(start_int).style.backgroundColor = "lightblue";

        form.onsubmit();

    });

});


function printthis(){
    alert("TIME WASTED: 7 HOURS!")
}
