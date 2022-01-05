paypal.Buttons({
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: "<?php echo $costo; ?>"
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            if (details.status === "COMPLETED") {
                Swal.fire({
                    icon: 'success',
                    title: 'Bien',
                    text: 'Se Completo la transacción, porfavor complete el formulario y suba su vaucher de compra para poder validarlo',
                    confirmButtonText: `Ok`
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.querySelector("#miModal").style.display = "none";
                    }
                })
            }
        });
    }
}).render('#paypal-button-container'); // Display payment options on your web page