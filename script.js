// script.js

document.addEventListener("DOMContentLoaded", function() {
    var imageContainer = document.getElementById("imageContainer");

    var img = document.createElement("img");
    img.src = "foto1.png"; // Ganti dengan path gambar yang benar
    img.alt = "Hospital Image";
    img.classList.add("responsive-image");

    imageContainer.appendChild(img);
});
