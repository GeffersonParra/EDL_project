document.addEventListener('DOMContentLoaded', function() {
    const table = document.getElementById('sortable-table');
    const tbody = table.querySelector('tbody');
    const headers = table.querySelectorAll('.sortable');
    let sortDirection = 1;

    headers.forEach(header => {
        header.addEventListener('click', function() {
            const column = header.getAttribute('data-column');
            const rowsArray = Array.from(tbody.querySelectorAll('tr')); // Omitimos el encabezado
            const sortedRows = rowsArray.sort((a, b) => {
                const aText = a.cells[column].innerText.trim();
                const bText = b.cells[column].innerText.trim();

                if (!isNaN(aText) && !isNaN(bText)) {
                    return (aText - bText) * sortDirection;
                } else {
                    return aText.localeCompare(bText) * sortDirection;
                }
            });

            // Invertir la dirección para la próxima vez que se haga clic
            sortDirection *= -1;

            // Limpiar el tbody antes de añadir las filas ordenadas
            tbody.innerHTML = '';

            // Añadimos las filas ordenadas al tbody
            sortedRows.forEach(row => tbody.appendChild(row));
        });
    });
});
