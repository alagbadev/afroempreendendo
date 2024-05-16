document.addEventListener('DOMContentLoaded', function () {
    // Classe para gerenciar o menu móvel
    class MobileNavbar {
        constructor(mobileMenu, navList, navLinks) {
            this.mobileMenu = document.querySelector(mobileMenu);
            this.navList = document.querySelector(navList);
            this.navLinks = document.querySelectorAll(navLinks);
            this.activeClass = "active";

            this.handleClick = this.handleClick.bind(this);  // Garante que o escopo é mantido
        }

        animateLinks() {
            this.navLinks.forEach((link, index) => {
                link.style.animation = link.style.animation
                    ? ""
                    : `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
            });
        }

        handleClick() {
            this.navList.classList.toggle(this.activeClass);
            this.mobileMenu.classList.toggle(this.activeClass);
            this.animateLinks();  // Animação para o menu
        }

        addClickEvent() {
            this.mobileMenu.addEventListener("click", this.handleClick);  // Adiciona evento de clique para o menu móvel
        }

        init() {
            if (this.mobileMenu) {
                this.addClickEvent();  // Inicia o evento de clique
            }
            return this;
        }
    }

    // Inicializa o menu móvel
    const mobileNavbar = new MobileNavbar(
        ".mobile-menu",
        ".nav-list",
        ".nav-list li"
    );

    mobileNavbar.init();  // Inicia a funcionalidade do menu móvel
});
