document.querySelectorAll('.list-item').forEach(item => {
    item.addEventListener('click', function (event) {
        event.stopPropagation();
        document.querySelectorAll('.mini-menu').forEach(menu => {
            menu.style.display = 'none';
        });
        const miniMenu = this.querySelector('.mini-menu');
        if (miniMenu) {
            miniMenu.style.display = 'block';
        }
    });
});

document.addEventListener('click', function () {
    document.querySelectorAll('.mini-menu').forEach(menu => {
        menu.style.display = 'none';
    });
});