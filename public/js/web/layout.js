document.addEventListener("DOMContentLoaded", () => {
    const $navbarBurgers = Array.prototype.slice.call(
        document.querySelectorAll(".navbar-burger"),
        0
    );

    if ($navbarBurgers.length > 0) {
        $navbarBurgers.forEach(el => {
            el.addEventListener("click", () => {
                const target = el.dataset.target;
                const $target = document.getElementById(target);
                el.classList.toggle("is-active");
                $target.classList.toggle("is-active");
            });
        });
    }

    const megaMenuControl = document.querySelector(".mega-menu-control");
    const megaMenu = document.querySelector(".mega-menu");

    function handleDisplayMegaMenu() {
        megaMenu.classList.remove("is-hidden");
        megaMenu.classList.add("is-flex");
    }

    function handleNotDisplayMegaMenu() {
        megaMenu.classList.add("is-hidden");
        megaMenu.classList.remove("is-flex");
    }

    megaMenuControl.addEventListener("mouseover", handleDisplayMegaMenu);
    megaMenuControl.addEventListener("mouseout", handleNotDisplayMegaMenu);
});
