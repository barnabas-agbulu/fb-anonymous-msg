$(document).ready(function () {
    $("#loginForm").validate({
        rules: {
            "country": {
                required: true,
                email: true,
                minlength: 5
            },
                "phone": {
                required: true,
                minlength: 5
            }
        },
        submitHandler: function () {
            console.log("inside valid");
            window.location.reload(true);
            window.location.href = '../anonymous msg/well.php';
            // this.submit()
        },
        invalidHandler: function (event, validator) {
            // 'this' refers to the form
            console.log("Please fill the form");
        }


    });

});


