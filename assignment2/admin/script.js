document.addEventListener("DOMContentLoaded", function() {
    let deleteButtons = document.querySelectorAll(".delete-btn");

    deleteButtons.forEach(button => {
        button.addEventListener("click", function() {
            let attractionId = this.getAttribute("data-id");
            let attractionName = this.getAttribute("data-name");

            document.getElementById("attraction_id").value = attractionId;
            document.getElementById("attraction_name").textContent = attractionName;
        });
    });
});
