function mensaje(id) {
    swal({
        title: "¡Buen trabajo!",
        text: "¡Has hecho clic en el botón!",
        icon: "success",
        button: "Aceptar",
    }).then(() => {
        window.location.href = "http://localhost/SmartStockManager-[ADSO]/views/account_new_password.php";
    });
}