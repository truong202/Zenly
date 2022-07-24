var query = document.querySelector.bind(document);
var queryAll = document.querySelectorAll.bind(document);

const productImgMain = query('.product-img-main');
const productImgs = queryAll('.list-img .product-img');

productImgs.forEach(function (img) {
    img.onclick = function () {
        query('.list-img .product-img.active').classList.remove('active');
        img.classList.add('active');
        productImgMain.style.backgroundImage = img.style.backgroundImage;
    }
})

$('.list-img').owlCarousel({
    nav: true,
    dots: false,
    margin: 10,
    navText: [`"<div class='nav-button owl-prev'><i class="fa-solid fa-chevron-left nav-icon"></i></div>"`, `"<div class='nav-button owl-next'><i class="fa-solid fa-chevron-right nav-icon"></i></div>"`],
    responsive: {
        0: {
            items: 1
        },
        992: {
            items: 5
        },
        1200: {
            items: 6
        }
    }
});