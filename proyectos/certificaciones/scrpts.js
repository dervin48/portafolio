// Function to open the modal with the clicked image
function openModal(imageUrl) {
    var modal = document.getElementById('myModal');
    var modalImg = document.getElementById("modalImg");
    var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = imageUrl;
    captionText.innerHTML = ""; // Puedes añadir un texto descriptivo si lo deseas
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    var modal = document.getElementById('myModal');
    modal.style.display = "none";
}

// Close the modal when clicking outside of the modal content
window.onclick = function(event) {
    var modal = document.getElementById('myModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
