$(document).ready(function(){

    $('#btnUpload').on('click', ()=>{
       var file_data = $('#customFile').prop('files')[0];
       var form_data = new FormData();
       form_data.append('file', file_data);
   
       $.ajax({
           type : 'POST',
           url : 'http://127.0.0.1:8000/uploadfile',
           headers : { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
           data : form_data,
           cache : false,
           contentType : false,
           processData : false,
           success : function(result){
               console.log(result);
           
           }
       });
    });


});