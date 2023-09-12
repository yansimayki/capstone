$(document).ready(function() {

    $("#btnUpdate").on('click', function() {
        var sGrade =   $("#txtGrade").val();
        var sSection = $("#txtSection").val();
        var nUserId = $("#txtUserId").val();
        var sFname  = $("#txtFname").val();
        var sMname  = $("#txtMname").val();
        var sLname  = $("#txtLname").val();
        var sBdate  = $("#txtBirthdate").val();
        var sGender = $("#txtGender").val();
        var nAge    = $("#txtAge").val();
        var sEmail  = $("#txtEmail").val();
        var nContact= $("#txtContact").val();
        var sAddress= $("#txtAddress").val();
        var sCity   = $("#txtCity").val();
        var sDistrict=  $("#txtDistrict").val();
        var nZip   =    $("#txtZip").val();
        var sDname   =  $("#txtFathername").val();
        var sMoname   = $("#txtMothername").val();

    var objData = {
        'grade' : sGrade,
        'section' : sSection,
        'fname' : sFname,
        'mname' : sMname,
        'lname' : sLname,
        'bdate' : sBdate,
        'gender' : sGender,
        'age' : nAge,
        'email' : sEmail,
        'contact' : nContact,
        'address' : sAddress,
        'city' : sCity,
        'district' : sDistrict,
        'zip' : nZip,
        'dname' : sDname,
        'moname' : sMoname,   
        'id' : nUserId
        };

    $.ajax({

        url : 'http://127.0.0.1:8000/updatelist',
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
})


function _remove(nId) {

    $.ajax({
        url : 'http://127.0.0.1:8000/removelist',
        type: 'POST',
        headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        data: { 'data' : nId },
        success: function(result) {
            
            if (result == "ok") {
                alert("Do you want to delete this data?")
                $("#tr_" + nId).fadeOut();
            } else {
                alert("Failed to remove data!");
            }
        }
    });
}

function _edit(nId) {
    
   
    $.ajax({
        url : 'http://127.0.0.1:8000/editlist',
        type: 'POST',
        headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        data: { 'data' : nId },
        success: function(result) {

            var sObj = JSON.parse(result);

            $("#txtUserId").val(sObj.id);
            $("#txtGrade").val(sObj.grade);
            $("#txtSection").val(sObj.section);
            $("#txtFname").val(sObj.first_name);
            $("#txtMname").val(sObj.middle_name);
            $("#txtLname").val(sObj.last_name);
            $("#txtBirthdate").val(sObj.birthdate);
            $("#txtGender").val(sObj.gender);
            $("#txtAge").val(sObj.age);
            $("#txtEmail").val(sObj.email);
            $("#txtContact").val(sObj.contact);
            $("#txtAddress").val(sObj.address);
            $("#txtCity").val(sObj.city);
            $("#txtDistrict").val(sObj.district);
            $("#txtZip").val(sObj.zip);
            $("#txtFathername").val(sObj.father_name);
            $("#txtMothername").val(sObj.mother_name);

            $("#modaledit").modal('show');
        }
    })
}


function _view(nId){
    $.ajax({
        url : 'http://127.0.0.1:8000/editlist',
        type: 'POST',
        headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
        data: { 'data' : nId },
        success: function(result) {

            var sObj = JSON.parse(result);

            $("#txtUserId").text(sObj.id);
            $("#Grade").text(sObj.grade);
            $("#Section").text(sObj.section);
            $("#Fname").text(sObj.first_name);
            $("#Mname").text(sObj.middle_name);
            $("#Lname").text(sObj.last_name);
            $("#Birthdate").text(sObj.birthdate);
            $("#Gender").text(sObj.gender);
            $("#Age").text(sObj.age);
            $("#Email").text(sObj.email);
            $("#Contact").text(sObj.contact);
            $("#Address").text(sObj.address);
            $("#City").text(sObj.city);
            $("#District").text(sObj.district);
            $("#Zip").text(sObj.zip);
            $("#Fathername").text(sObj.father_name);
            $("#Mothername").text(sObj.mother_name);

            $("#modalview").modal('show');
        }
    })
}
