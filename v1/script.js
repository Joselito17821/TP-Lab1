// script.js
document.getElementById('medalForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const country = document.getElementById('country').value;
    const gold = parseInt(document.getElementById('gold').value);
    const silver = parseInt(document.getElementById('silver').value);
    const bronze = parseInt(document.getElementById('bronze').value);
    const total = gold + silver + bronze;

    const table = document.getElementById('medalTable');

    const newRow = table.insertRow();
    const countryCell = newRow.insertCell(0);
    const goldCell = newRow.insertCell(1);
    const silverCell = newRow.insertCell(2);
    const bronzeCell = newRow.insertCell(3);
    const totalCell = newRow.insertCell(4);

    countryCell.textContent = country;
    goldCell.textContent = gold;
    silverCell.textContent = silver;
    bronzeCell.textContent = bronze;
    totalCell.textContent = total;

    // Limpiar el formulario
    document.getElementById('medalForm').reset();
});
