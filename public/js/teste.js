document.addEventListener("DOMContentLoaded", function() {
    var cursor = document.getElementById("custom-cursor");

    document.addEventListener("mousemove", function(e) {
        cursor.style.left = e.clientX - cursor.offsetWidth / 2 + "px";
        cursor.style.top = e.clientY - cursor.offsetHeight / 2 + "px";
    });

    document.addEventListener("mouseenter", function() {
        cursor.style.display = "block";
    });

    document.addEventListener("mouseleave", function() {
        cursor.style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    var cursor = document.getElementById("custom-cursor");

    document.addEventListener("mousemove", function(e) {
        cursor.style.left = e.clientX - cursor.offsetWidth / 2 + "px";
        cursor.style.top = e.clientY - cursor.offsetHeight / 2 + "px";
    });

    document.addEventListener("mouseenter", function() {
        cursor.style.display = "block";
    });

    document.addEventListener("mouseleave", function() {
        cursor.style.display = "none";
    });

    var links = document.querySelectorAll("a");
    links.forEach(function(link) {
        link.addEventListener("mouseenter", function() {
            cursor.style.display = "none";
        });

        link.addEventListener("mouseleave", function() {
            cursor.style.display = "block";
        });
    });
});