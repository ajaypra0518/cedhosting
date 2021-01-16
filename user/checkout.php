

<?php 

include_once "header.php";
?>

<div id="myid">
</div>




<script src="https://www.paypal.com/sdk/js?client-id=AY2QJq2UwTQqKyaKxBIneLhAMAxWEqDjkp6DFEdJdSKDtpBzgC1C7rZCTHI1NENGjYlLOsNpTr2MJNoU"></script>
<script>paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '0.1'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            // window.location.replace("http://localhost/cedhosting/user/pricing.php")
        })
    },
    onCancel: function (data) {
        // window.location.replace("http://localhost:63342/tutorial/paypal/Oncancel.php")
        console.log(data);
    }
}).render('#myid');
</script>
</body>
</html>


