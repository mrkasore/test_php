let news = document.querySelectorAll('.news');
let btnPages = document.querySelectorAll('.div-wrapper');
let arrow = document.querySelector('.div-wrapper-arrow');

let x = 4;
let currentPage = 1;
let arr = [];


for (let i=0; i < 4; i++) {
    news[i].style.display = 'flex';
}

//Навигация страниц
btnPages.forEach(item => {
    item.addEventListener('click', changePage);
});

function changePage(e) {

    btnPages = document.querySelectorAll('.div-wrapper');
    currentPage = e.target.innerText;
    hideArrow(currentPage);
    hideNews();
    restartPagesBtn();
    e.target.classList.add('active-page');
    currentPage = Number(e.target.innerText);
    show4News(currentPage);
    
        
    document.querySelector(".main").scrollIntoView();
}

// Стрелка
arrow.addEventListener('click', arrowBehavior);

function arrowBehavior(e) {
    currentPage++;
    hideArrow(currentPage);
    makeArrPages();
    restartPagesBtn();

        
        
    if(arr[2] < currentPage) {
        document.querySelectorAll('.text-wrapper-2').forEach(item => {
            item.innerText = Number(item.innerText) + 1;
        })
        makeArrPages();
    }
    btnPages = document.querySelectorAll('.div-wrapper');
    try {
        if (currentPage == arr[2]) {
             btnPages[2].classList.add('active-page');
        } else {
            btnPages[arr.indexOf(String(currentPage))].classList.add('active-page');
        }
    }
    catch {
        console.log('Error');
    }


    hideNews();
    show4News(currentPage);
}


function makeArrPages() {
    arr = [];
    document.querySelectorAll('.text-wrapper-2').forEach(item => {
        arr.push(item.innerText);
    })
    
}

//Сброс активных кнопок
function restartPagesBtn() {
    btnPages.forEach(item => {
        if(item.classList.contains('active-page')) {
            item.classList.remove('active-page');
        }
    })
}

function hideNews() {
    news.forEach(item => {
        item.style.display = 'none';
    });
}

function show4News(currentPage) {
    for(let i = x*currentPage-4; i < x*currentPage; i++) {
        try {
            news[i].style.display = 'flex';
        }
        catch {
            break;
        }
        
        
    }
}

function hideArrow(currentPage) {
    
    if (currentPage == 5) {
        arrow.style.opacity = 0;
        arrow.removeEventListener('click', arrowBehavior);
    } else if (currentPage < 5) {
        arrow.style.opacity = 1;
        arrow.addEventListener('click', arrowBehavior);
    }
    
}