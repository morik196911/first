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
/* Fancybox*/
$(function() {
  $("[data-fancybox='gallery']").fancybox({
    buttons: [
      "zoom",
      "share",
      "slideShow",
      "fullScreen",
      "download",
      "thumbs",
      "close"
    ],
    loop: true,
    caption: function(instance, item) {
      return $(this).next('figcaption').html();
    },
    thumbs: {
      autoStart: true,
      axis: 'x'
    },
    hash: false,
    fullScreen: {
      autoStart: false
    },
    touch: {
      vertical: false,
      horizontal: false
    }
  });
});

/* Обработчик миниатюр */
document.addEventListener('DOMContentLoaded', function() {
    const mainImage = document.getElementById('main-image');
    const thumbnails = document.querySelectorAll('.thumbnail');
    const link_fancybox = document.getElementById('link_fancybox');

    // Обработчик клика по миниатюрам
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // Убираем активный класс у всех миниатюр
            thumbnails.forEach(t => t.classList.remove('active'));

            // Добавляем активный класс текущей
            this.classList.add('active');

            // Меняем главное изображение
            const largeSrc = this.getAttribute('data-large');
            mainImage.src = largeSrc;
            link_fancybox.href = largeSrc;
        });
    });

    // По умолчанию выделяем первую миниатюру
    if (thumbnails.length > 0) {
        thumbnails[0].classList.add('active');
    }
});