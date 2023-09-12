var sGradelist = [
    {Grade:'Grade7', Section:'Isaac'},
    {Grade:'Grade7', Section:'Molave'},
    {Grade:'Grade7', Section:'Newton'},
    {Grade:'Grade8', Section:'Boyle'},
    {Grade:'Grade8', Section:'Plato'},
    {Grade:'Grade8', Section:'Aristotle'}
];

$(document).ready(function() {

  
    $("#txtGrade").change( function () {
        $("#txtSection").html("<option selected>Select Section</option>");
        const section = sGradelist.filter(m=>m.Grade == $("#txtGrade").val());
        section.forEach(element => {
            const option = "<option val='"+element.Section+"'>"+element.Section+"</option>";
            $("#txtSection").append(option);
        });
    });

    $("#btnEnroll").on('click', function() {
        var sGrade = $("#txtGrade").val();
        var sSection = $("#txtSection").val();
        var sFname  = $("#txtFname").val();
        var sMname  = $("#txtMname").val();
        var sLname  = $("#txtLname").val();
        var sBdate  = $("#txtBirthdate").val();
        var sGender  = $("#txtGender").val();
        var nAge  = $("#txtAge").val();
        var sEmail   = $("#txtEmail").val();
        var nContact   = $("#txtContact").val();
        var sAddress   = $("#txtAddress").val();
        var sCity   = $("#txtCity").val();
        var sDistrict   = $("#txtDistrict").val();
        var nZip   = $("#txtZip").val();
   
    

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

            };

        $.ajax({
            url : 'http://127.0.0.1:8000/addteacher',
            type: 'POST',
            headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
            data: { 'data' : objData },
            success: function(result) {
                console.log(result);
                if (result == "ok") {
                    alert("Data is save");
                    location.reload();
                } else {
                    alert("Failed to save");
                }
            }
        })
        
    });









});

