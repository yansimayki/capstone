$(document).ready(()=>{

    $("#btnUpdate").on('click', function() {
        var sFullname  = $("#txtFname").val();
        var sPosition  = $("#txtPosition").val();
        var sUser  = $("#txtUser").val();
        var sEmail  = $("#txtEmail").val();
        var nUserId   = $("#txtUserId").val();
    
        
        var objData = {
                'fullname' : sFullname,
                'position' : sPosition,
                'username' : sUser,
                'email' : sEmail,
                'id' : nUserId,
            };
    
        $.ajax({
            url : 'http://127.0.0.1:8000/updateuser',
            type: 'POST',
            headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data: { 'data' : objData },
            success: function(result) {
                console.log(result);
                if (result == "ok") {
    
                    location.reload();
                } else {
                    alert("Failed to save");
                }
            }
        });
    });



    $("#btnAdd").on('click',()=>{
        $("#modaladd").modal('show');

        $("#btnSave").on('click', ()=>{
            var sFullname  = $("#Fname").val();
            var sPosition  = $("#Position").val();
            var sUser    =   $("#User").val();
            var sEmail  =    $("#Email").val();
            var sPass   =    $("#Pass").val();
    
            var objData = {
                    'fullname' : sFullname,
                    'position' : sPosition,
                    'username' : sUser,
                    'email' : sEmail,
                    'pass' : sPass,
                };
    
            $.ajax({
                url : 'http://127.0.0.1:8000/adduser',
                type: 'POST',
                headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
                data: { 'data' : objData },
                success: function(result) {
                    console.log(result);
                    if (result == "ok") {
                        alert("Data saved!")
                        location.reload();
                    } else {
                        alert("Failed to save");
                    }
                }
            })
        });
        
    });

});



function _remove(nId) {
    $.ajax({
        url : 'http://127.0.0.1:8000/removeuser',
        type: 'POST',
        headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        data: { 'data' : nId },
        success: function(result) {
            if (result == "ok") {
                location.reload($("#tr_" + nId).fadeOut());
                
            } else {
                alert("Failed to remove data!");
            }
        }
    })
}



function _edit(nId) {

    $.ajax({
        url : 'http://127.0.0.1:8000/edituser',
        type: 'POST',
        headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        data: { 'data' : nId },
        success: function(result) {

            var sObj = JSON.parse(result);

            $("#txtUserId").val(sObj.id);
            $("#txtFname").val(sObj.fullname);
            $("#txtPosition").val(sObj.position);
            $("#txtUser").val(sObj.username);
            $("#txtEmail").val(sObj.email);
    
            $("#modaledit").modal('show');
        }
    })
}



function _view(nId){
    $.ajax({
        url : 'http://127.0.0.1:8000/edituser',
        type: 'POST',
        headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        data: { 'data' : nId },
        success: function(result) {

            var sObj = JSON.parse(result);

            $("#txtUserId").text(sObj.id);
            $("#fullname").text(sObj.fullname);
            $("#email").text(sObj.email);
            $("#post").text(sObj.position);
            $("#user").text(sObj.username);
            

            $("#modalview").modal('show');
        }
    })
}
