document.addEventListener('DOMContentLoaded', () => {
    const headerHeight = document.getElementById('myHeader').offsetHeight;
    const filterMenu = document.querySelector('.filter-menu');
    filterMenu.style.top = `${headerHeight}px`;
});