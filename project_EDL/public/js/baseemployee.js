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

document.getElementById('imagen').addEventListener('click', function() {
    document.getElementById('photo').click();
});

document.getElementById('Editar').addEventListener('click', function() {
    alert("Cambios Guardados Exitosamente.")
})

document.getElementById('photo').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            const preview = document.getElementById('editfoto');
            preview.src = e.target.result;
        }
        
        reader.readAsDataURL(file);
    }
});