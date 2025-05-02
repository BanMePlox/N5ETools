import { marked } from 'marked';

document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.condition-item');
    const detailsBox = document.getElementById('conditionDetails');
    const searchBox = document.getElementById('searchBox');

    const conditions = JSON.parse(document.getElementById('conditionsData').textContent);

    console.log("Items encontrados:", items.length);  // Verificar cuántos elementos hemos encontrado

    // Funcionalidad para ver detalles al hacer clic
    items.forEach(item => {
        item.addEventListener('click', () => {
            const condition = conditions.find(c => c.id == item.dataset.id);
            detailsBox.innerHTML = `
                <h3>${condition.name}</h3>
                <p><strong>Type:</strong> ${condition.type}</p>
                <p><strong>Max Rank:</strong> ${condition.max_rank}</p>
                <div>${marked.parse(condition.description)}</div>
            `;
        });
    });

    // Funcionalidad del buscador
    searchBox.addEventListener('input', () => {
        const search = searchBox.value.toLowerCase();
        console.log('Buscando:', search); // Verificar si se detecta la entrada

        items.forEach(item => {
            const text = item.innerText.toLowerCase();
            console.log('Item texto:', text); // Verificar qué texto contiene el item

            // Comprobar si el texto contiene la búsqueda
            if (text.includes(search)) {
                console.log('Mostrar item:', item.innerText); // Verificar que estamos mostrando
                item.classList.add('d-flex'); // Asegurarse de que el elemento sea visible
                item.classList.remove('d-none'); // Asegurarse de que no esté oculto
            } else {
                console.log('Ocultar item:', item.innerText); // Verificar que estamos ocultando
                item.classList.remove('d-flex'); // Remover la clase para ocultarlo
                item.classList.add('d-none'); // Agregar la clase para ocultarlo
            }
        });
    });
});
