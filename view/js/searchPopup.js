const search = document.querySelector('#search');
search.addEventListener('click', () => {
    console.log(2);
    const searchPopup = document.querySelector('.search_popup');
    searchPopup.classList.toggle('active');
});