
window.addEventListener('DOMContentLoaded', ()=>{
     
    const boton = document.getElementById('boton-envio');
    const mostrar = document.getElementById('mostrar-pago');

    boton.addEventListener( 'click' , function (event) {
        event.preventDefault();// evitar recarga de la página

        //variables para calcular el salario
        const diasTrabajado = document.getElementById('dias_trabajados').value;
        const valorDia = document.getElementById('valor-dias').value;

        if(diasTrabajado=="" || valorDia==""){
            alert ("Alguno de los campos estan vacios");
            return
        }

        
     
          
    

        
    })
})