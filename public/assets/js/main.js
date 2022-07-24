var query = document.querySelector.bind(document);
var queryAll = document.querySelectorAll.bind(document);

var searchMobileBtn = query('.search-mobile-btn-js');
var headerSearch = query('.header-search-js');

searchMobileBtn.onclick = function () {
    if (getComputedStyle(headerSearch).display == 'none') {
        headerSearch.style.display = 'flex';
    }
    else {
        headerSearch.style.display = 'none'
    }
}

var modal = query('.modal');
const menuMobileOpen = query('.menu-mobile-btn-js');
const menuMobileClose = query('.menu-mobile-close-btn-js');
const menuMobile = query('.menu-mobile-js');
const menuIcons = queryAll('.menu-icon-js');

menuMobile.addEventListener('click', function (e) {
    e.stopPropagation();
})

modal.addEventListener('click', function (event) {
    if (menuMobile.classList.contains('open')) {
        modal.classList.remove('open');
        menuMobile.classList.remove('open');
    }
})

menuMobileOpen.onclick = function () {
    menuMobile.classList.add('open');
    modal.classList.add('open');
}

menuMobileClose.onclick = function () {
    menuMobile.classList.remove('open');
    modal.classList.remove('open');
}

menuIcons.forEach(element => {
    element.onclick = function () {
        const nextElement = element.nextElementSibling;
        if (nextElement.classList.contains('subnav')) {
            if (getComputedStyle(nextElement).opacity == 1) {
                setSubnav(0, 'hidden', 0)
            }
            else {
                setSubnav(1, 'visible', 100)
            }
        }
        function setSubnav(opacity, visible, scale) {
            nextElement.style.opacity = opacity;
            nextElement.style.visibility = visible;
            nextElement.style.transform = 'scaleY(' + scale + '%)';
        }
    }
});

const inputNumberWraps = queryAll('.input-number-wrap');

inputNumberWraps.forEach(function (inputNumberWrap) {
    var minusBtn = inputNumberWrap.querySelector('.minus-btn');
    var plusBtn = inputNumberWrap.querySelector('.plus-btn');
    var inputNumber = inputNumberWrap.querySelector('.input-number');
    var min = parseInt(inputNumber.min);
    var max = parseInt(inputNumber.max);
    var step = (inputNumber.step) ? inputNumber.step : 1;
    step = parseInt(step);
    var value;
    value = inputNumber.value;
    inputNumber.onchange = function () {
        value = inputNumber.value;
    }
    minusBtn.onclick = function () {
        value = parseInt(value);
        if (value > min) {
            value -= step;
            inputNumber.value = value;
        }
    }
    plusBtn.onclick = function () {
        value = parseInt(value);
        if (value < max) {
            value += step;
            inputNumber.value = value;
        }
    }
});

const tabs = queryAll('.tabs');
tabs.forEach(function (tab) {
    var tabItems = tab.querySelectorAll('.tab-item');
    var tabContent = tab.nextElementSibling;
    var tabPanes = tabContent.querySelectorAll('.tab-pane');

    tabItems.forEach(function (tabItem, index) {
        var tabPane = tabPanes[index];
        tabItem.onclick = function () {
            tab.querySelector('.tab-item.active').classList.remove('active');
            tabContent.querySelector('.tab-pane.active').classList.remove('active');
            tabItem.classList.add('active');
            tabPane.classList.add('active');
        }
    })
});

const allSizeList = queryAll('.size-list');
allSizeList.forEach(function (sizeList) {
    var sizeBtns = sizeList.querySelectorAll('.button');
    sizeBtns.forEach(function (sizeBtn) {
        sizeBtn.onclick = function () {
            if (!sizeBtn.classList.contains('button--disable')) {
                var sizeActive = sizeList.querySelector('button.active');
                if (sizeActive) {
                    sizeActive.classList.remove('active');
                }
                sizeBtn.classList.add('active');
            }
        }
    })
});

const allColorList = queryAll('.color-list');
allColorList.forEach(function (colorList) {
    var colorBtns = colorList.querySelectorAll('.button');
    colorBtns.forEach(function (colorBtn) {
        colorBtn.onclick = function () {
            if (!colorBtn.classList.contains('button--disable')) {
                var colorActive = colorList.querySelector('button.active');
                if (colorActive) {
                    colorActive.classList.remove('active');
                }
                colorBtn.classList.add('active');
            }
        }
    })
});


$('.section-slider').owlCarousel({
    loop: true,
    nav: true,
    navText: [`"<div class='nav-button owl-prev'><i class="fa-solid fa-chevron-left nav-icon"></i></div>"`, `"<div class='nav-button owl-next'><i class="fa-solid fa-chevron-right nav-icon"></i></div>"`],
    items: 1,
    autoplay: true,
    autoplayTimeout: 3000,
});

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});