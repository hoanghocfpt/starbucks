deltail_tab = document.querySelector('#deltail_tab');
feedback_tab = document.querySelector('#feedback_tab');
deltail_container = document.querySelector('.deltail_container');
feedback_container = document.querySelector('.feedback_container');
deltail_tab.addEventListener('click', function () {
    deltail_tab.classList.add('active');
    feedback_tab.classList.remove('active');
    deltail_container.style.display = 'block';
    feedback_container.style.display = 'none';
});
feedback_tab.addEventListener('click', function () {
    deltail_tab.classList.remove('active');
    feedback_tab.classList.add('active');
    feedback_container.style.display = 'block';
    deltail_container.style.display = 'none';
});