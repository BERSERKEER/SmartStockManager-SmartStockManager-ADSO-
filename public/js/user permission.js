// Función que agrega el event listener a los checkboxes
document.querySelectorAll("[id^='estadoCheckbox']").forEach(function(checkbox) {
    checkbox.addEventListener('click', function() {
        var id = this.getAttribute('data-id'); // Obtener el ID desde el atributo data-id
        document.getElementById('estadoForm' + id).submit(); // Enviar el formulario correspondiente
        this.disabled = true; // Desactiva el checkbox después de hacer clic
    });
});
