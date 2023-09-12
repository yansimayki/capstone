

$(document).ready(function() {
    
    $("#btnLogIn").on('click', function() {

        var sEmail  = $("#txtEmail").val();
        var sPass   = $("#txtPass").val();

        var objData = {
                'email' : sEmail,
                'pass' : sPass,
            };

        $.ajax({
            url : 'http://127.0.0.1:8000/loginstudent',
            type: 'POST',
            headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data: { 'data' : objData },
            success: function(result) {
                console.log(result);
                if (result == "found") {
                    location = "dashboard";
                } else if (result == "found") {
                    alert("Invalid Username or Password ");
                }else {
                    alert("Failed to fetched data!");
                }
            }
        })
        
    });

});