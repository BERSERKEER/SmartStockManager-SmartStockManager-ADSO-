function mensaje(id) {
    swal({
        title: "¡Buen trabajo!s",
        text: "¡Has hecho clic en el botón!",
        icon: "success",
        button: "Aceptar",
    }).then(() => {
        window.location.href = "http://localhost/SmartStockManager-[ADSO]/views/admin_home_pages.php";
    });
}