const nuevoBtn = document.querySelector('.nuevo');
const reportForm = document.getElementById('reportform');
function mostrarFormulario() {
    if (!(reportForm.classList.contains("mostrar"))) {
        reportForm.style.display = "block";
        nuevoBtn.classList.add("mostrar");
        setTimeout(() => {
            reportForm.classList.add("mostrar");
        }, 100);
    } else {
        reportForm.style.display = 'none'
        reportForm.classList.remove("mostrar")
        nuevoBtn.classList.remove("mostrar");
    }
}
nuevoBtn.addEventListener('click', mostrarFormulario);