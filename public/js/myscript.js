/* Vertical menu */
document.addEventListener('DOMContentLoaded', function() {
    const toggles = document.querySelectorAll('.menu-vertical__toggle');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const item = this.closest('.menu-vertical__item');
            item.classList.toggle('menu-vertical__item--active');

            // Закрываем другие открытые пункты
           /* document.querySelectorAll('.menu-vertical__item').forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('menu-vertical__item--active');
                }
            });*/
        });
    });
});