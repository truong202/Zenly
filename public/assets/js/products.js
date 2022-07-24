var query = document.querySelector.bind(document);
var queryAll = document.querySelectorAll.bind(document);

var filters = queryAll('.filter');

filters.forEach(function (filter) {
    var filterLinks = filter.querySelectorAll('.section-filter>a');
    var filterIcons = filter.querySelectorAll('.filter-icon');
    filterLinks.forEach(function (link, index) {
        link.onclick = function () {
            if (filterIcons[index].style.transform == 'rotate(180deg)') {
                filterIcons[index].style.transform = '';
            } else {
                filterIcons[index].style.transform = 'rotate(180deg)'
            }
        }
    });
});


var gap = 100000;
filters.forEach(function (filter) {
    let inputPrices = filter.querySelectorAll('.filter-price .field input');
    let inputRanges = filter.querySelectorAll('.filter-price .input-range input');
    var progress = filter.querySelector('.filter-price .slider .range-progress');
    inputPrices.forEach(function (input) {
        input.addEventListener('input', function (e) {
            var minVal = parseInt(inputPrices[0].value);
            var maxVal = parseInt(inputPrices[1].value);
            if (maxVal - minVal >= gap && maxVal <= parseInt(inputRanges[0].max) && minVal >= parseInt(inputRanges[0].min)) {
                if (e.target.className === "input-min") {
                    inputRanges[0].value = minVal;
                    progress.style.left = (minVal / inputRanges[0].max) * 100 + "%";
                } else {
                    inputRanges[1].value = maxVal;
                    progress.style.right = 100 - ((maxVal / inputRanges[1].max) * 100) + "%";
                }
            }
        });
    });

    inputRanges.forEach(function (input) {
        input.addEventListener('input', function (e) {
            var minVal = parseInt(inputRanges[0].value);
            var maxVal = parseInt(inputRanges[1].value);
            if (maxVal - minVal < gap) {
                if (e.target.className === "range-min") {
                    inputRanges[0].value = maxVal - gap;
                } else {
                    inputRanges[1].value = minVal + gap;
                }
            }
            else {
                inputPrices[0].value = minVal;
                inputPrices[1].value = maxVal;
                progress.style.left = (minVal / inputRanges[0].max) * 100 + "%";
                progress.style.right = 100 - ((maxVal / inputRanges[1].max) * 100) + "%";
            }
        });
    });
});

var modal = query('.modal');
var filterOpenBtn = query('.filter-open-btn');
var filterMobile = query('.filter-mobile');
var filterCloseBtn = filterMobile.querySelector('.close-btn');

filterOpenBtn.onclick = function () {
    modal.classList.add('open');
    filterMobile.classList.add('open');
}

filterCloseBtn.onclick = function () {
    modal.classList.remove('open');
    filterMobile.classList.remove('open');
}

filterMobile.onclick = function (e) {
    e.stopPropagation();
}

modal.onclick = function () {
    modal.classList.remove('open');
    filterMobile.classList.remove('open');
}