import { marked } from 'marked';

document.addEventListener('DOMContentLoaded', () => {
    const items = document.querySelectorAll('.background-item');
    const detailsBox = document.getElementById('backgroundDetails');
    const searchBox = document.getElementById('searchBox');

    // Parseamos los datos que están en el <script> con el id backgroundsData
    const backgrounds = JSON.parse(document.getElementById('backgroundsData').textContent);

    items.forEach(item => {
        item.addEventListener('click', () => {
            const background = backgrounds.find(b => b.id == item.dataset.id);
            detailsBox.innerHTML = `
                <h3>${background.name}</h3>
                <p><strong>Skill Proficiencies:</strong> ${background.skill_proficiencies}</p>
                <p><strong>Tool Proficiencies:</strong> ${background.tool_proficiencies}</p>
                <p><strong>Equipment:</strong> ${background.equipment}</p>
                <p><strong>Equipment Pack:</strong> ${background.equipment_pack}</p>
                <p><strong>Feature:</strong> ${background.feature}</p>
                <p><strong>Selection:</strong> ${background.selection}</p>
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
