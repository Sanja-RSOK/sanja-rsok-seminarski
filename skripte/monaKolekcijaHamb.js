document.addEventListener("click", function(event) {
    const menuToggle = document.getElementById("menu-toggle");
    const menuContainer = document.querySelector(".menu-container");

    // otvoreno ili zatvoreno
    if (!menuContainer.contains(event.target) && menuToggle.checked) {
        menuToggle.checked = false; // Zatvori meni
    }
});

