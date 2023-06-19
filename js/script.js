var menu = document.getElementById('left');
var links = document.querySelector('aside');
var xmark = document.querySelector('.x');

menu.addEventListener('click', () => {
    links.classList.add('active');
    links.style.transition = "all .5s";
});

menu.addEventListener('click', () => {
    xmark.classList.add('active');
    xmark.style.transition = "all .5s";
})


xmark.addEventListener('click', () => {
    links.classList.remove('active');
    xmark.classList.remove('active');
    links.style.transition = "all .5s";
})