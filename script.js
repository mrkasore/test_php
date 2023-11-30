let news = document.querySelectorAll('.news');
let btnPages = document.querySelectorAll('.div-wrapper');
let arrow = document.querySelector('.div-wrapper-arrow');

let x = 4;
let currentPage = 1;


for (let i=0; i < 4; i++) {
    news[i].style.display = 'flex';
}

//Навигация страниц
btnPages.forEach(item => {
    item.addEventListener('click', changePage);
});

function changePage(e) {
    console.log(e.target.innerText);
    btnPages = document.querySelectorAll('.div-wrapper');
    currentPage = e.target.innerText;
    news.forEach(item => {
        item.style.display = 'none';
    });

    //Сброс активных кнопок
    btnPages.forEach(item => {
        if(item.classList.contains('active-page')) {
            item.classList.remove('active-page');
        }
    })

    e.target.classList.add('active-page');
    for(let i = x*currentPage-4; i < x*currentPage; i++) {
        news[i].style.display = 'flex';
        console.log(x*e.target.innerText);
    }

    console.log(e.target);
        
    document.querySelector(".main").scrollIntoView();
}

// Стрелка
arrow.addEventListener('click', function(e) {
    let textBtn = document.querySelectorAll('.text-wrapper-2');
    currentPage++;
    textBtn.forEach(item => {
        item.innerHTML = Number(item.innerHTML) + 1;
    });
    if(Number(textBtn[2].innerText) * 4 >= news.length) {
        arrow.style.display = 'none';
    }

    news.forEach(item => {
        item.style.display = 'none';
    });
    for(let i = x*currentPage-4; i < x*currentPage; i++) {
        news[i].style.display = 'flex';
    }
    document.querySelector(".main").scrollIntoView();
    
});




console.log(news.length);