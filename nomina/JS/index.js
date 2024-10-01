window.addEventListener('DOMContentLoaded', () => {
    const boton = document.getElementById('boton-envio');
    const mostrarArl = document.getElementById('mostrar-arl');
    const mostrarSalud = document.getElementById('mostrar-salud');
    const mostrarPension = document.getElementById('mostrar-pension');
    const mostrarDeducible = document.getElementById('mostrar-deducible');
    const mostrarPagototal = document.getElementById('mostrar-pagoTotal');

    boton.addEventListener('click', function(event) {
        event.preventDefault(); 

        const diasTrabajado = document.getElementById('dias_trabajados').value;
        const valorDia = document.getElementById('valor-dias').value;

        if (diasTrabajado === "" || valorDia === "") {
            alert("Alguno de los campos están vacíos");
            return;
        }

        const dataValores = {
            diasTrabajado,
            valorDia
        };

        fetch('PHP/register.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(dataValores)
        })
        .then(response => response.json())
        .then(data => {
        
            mostrarArl.innerHTML = `<h3>ARL:  ${data.ARL}</h3>`;
            mostrarSalud.innerHTML = `<h3>Salud: ${data.Salud}</h3>`;
            mostrarPension.innerHTML = `<h3>Pensión: ${data.Pension}</h3>`;
            mostrarDeducible.innerHTML = `<h3>Deducible: ${data.Deducible}</h3>`;
            mostrarPagototal.innerHTML = `<h3>Pago Total: ${data.PagoTotal}</h3>`;
        })
        .catch(error => {
            console.error('Error:', error);
            mostrarArl.innerHTML = `<h3>Error al calcular el ARL</h3>`;
        });
    });
});
