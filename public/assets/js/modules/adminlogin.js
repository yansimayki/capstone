

$(document).ready(function() {
    
    $("#btnLogin").on('click', function() {

        var sUser  = $("#txtUsername").val();
        var sPass   = $("#txtPass").val();

       var objData = {
                'username' : sUser,
                'pass' : sPass,
       };


        $.ajax({
            url : 'http://127.0.0.1:8000/adminlogin',
            type: 'POST',
            headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data: { 'data' : objData },
            success: function(result) {
                console.log(result);
                if (result == "found") {
                    location = "dashboard";
                } else if (result == "missing") {
                    alert("Invalid Username or Password ");
                } 
            }
        })
        
    });

});