

$(document).ready(function() {
    
    $("#btnSignUp").on('click', function() {

        var sFname  = $("#txtFname").val();
        var sMname  = $("#txtMname").val();
        var sLname  = $("#txtLname").val();
        var sEmail  = $("#txtEmail").val();
        var sPass   = $("#txtPass").val();

        var objData = {
                'fname' : sFname,
                'mname' : sMname,
                'lname' : sLname,
                'email' : sEmail,
                'pass' : sPass,
            };

        $.ajax({
            url : 'http://127.0.0.1:8000/signupstudent',
            type: 'POST',
            headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data: { 'data' : objData },
            success: function(result) {
                console.log(result);
                if (result == "ok") {
                    location = "studentlogin";
                } else {
                    alert("Failed to save");
                }
            }
        })
        
    });

});