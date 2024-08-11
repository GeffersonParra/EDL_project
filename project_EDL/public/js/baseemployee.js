document.querySelectorAll('.list-item').forEach(item => {
    item.addEventListener('click', function (event) {
        event.stopPropagation();
        handleMenuDisplay.call(this);
    });

    item.addEventListener('touchstart', function (event) {
        event.stopPropagation();
        handleMenuDisplay.call(this);
    });
});

function handleMenuDisplay() {
    document.querySelectorAll('.mini-menu').forEach(menu => {
        menu.style.display = 'none';
    });
    const miniMenu = this.querySelector('.mini-menu');
    if (miniMenu) {
        miniMenu.style.display = 'block';
        setTimeout(() => {
            miniMenu.classList.add('visible');
        }, 10);
    }
}

document.addEventListener('click', function () {
    document.querySelectorAll('.mini-menu').forEach(menu => {
        menu.classList.remove('visible');
        setTimeout(() => {
            menu.style.display = 'none';
        }, 500); 
    });
});

document.getElementById('imagen').addEventListener('click', function () {
    document.getElementById('photo').click();
});

document.getElementById('photo').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const preview = document.getElementById('editfoto');
            preview.src = e.target.result;
        }

        reader.readAsDataURL(file);
    }
});