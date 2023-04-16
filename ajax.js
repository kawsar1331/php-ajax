$(document).ready(function() {

    // Save Info
    $("#btnclick").click(function() {
       var name = jQuery("#name").val();
       var email = jQuery("#email").val();
       var phone = jQuery("#phone").val();
       var status = jQuery("#status").val();
       

       jQuery.ajax({
        url: "classes/process.php",
        type: "POST",
        data: {
                name: name,
                email: email,
                phone: phone,
                status: status,
                action: "insert"
        },
        success: function(response) {
            jQuery(".msg").html(`<div class="alert alert-success" role="alert">
             ${response} </div>`);
             //Concat Method  '<div class="alert alert-success" role="alert">'+ response +'</div>'
            
             $('.msg').fadeOut(5000);
             jQuery("#name").val("");
             jQuery("#email").val("");
             jQuery("#phone").val("");
             jQuery("#status").val("");
             show();
            
        }
       });
    });
    
    // Show Info
    function show() {
        $.ajax({
            url: "classes/process.php",
            type: "POST",
            data: {
                action: "show"
            },
            success: function(response) {
                $("tbody").html(response);
            }
        });
    }
    show();
   
    // Move Value For Delete
    $(document).on("click","#id-del", function(){
        $("#delMod").modal('show');
        var id = $(this).val();
        $("#delConfirm").val(id);
    });
    // For Delete
    $(document).on("click","#delConfirm", function(){
        var id = $(this).val();
        
        $.ajax({
            url: "classes/process.php",
            type: "POST", 
            data: {
                id: id,
                action: "delete"
            }, 
            success: function(response) {
                jQuery(".msgCha").html(`<div class="alert alert-success" role="alert">
                 ${response} </div>`);
                 //Concat Method  '<div class="alert alert-success" role="alert">'+ response +'</div>'
                
                 $('.msgCha').fadeOut(5000);
                 $("#delMod").modal('hide');
                 show();
                
            }
        });
    });
    
    // For Edit
    $(document).on("click","#id-edit", function() {
        var id = $(this).val();
        $("#editMod").modal('show');
        $("#btnupdate").val(id);
        
        $.ajax({
            url: "classes/process.php",
            type: "POST", 
            dataType: "json",
            data: {
                id: id,
                action: "find"
            }, 
            success: function(response) {
                $("#kname").val(response.name);
                $("#kemail").val(response.email);
                $("#kphone").val(response.phone);
                $("#kstatus").val(response.status);
                
            }
        });
        
    });

    $(document).on("click", "#btnupdate", function() {
        var id = $("#btnupdate").val();
        var name = jQuery("#kname").val();
        var email = jQuery("#kemail").val();
        var phone = jQuery("#kphone").val();
        var status = jQuery("#kstatus").val();
        
 
        jQuery.ajax({
         url: "classes/process.php",
         type: "POST",
         data: {
                id: id,
                 name: name,
                 email: email,
                 phone: phone,
                 status: status,
                 action: "update"
         },
         success: function(response) {
             jQuery(".msgCha").html(`<div class="alert alert-success" role="alert">
              ${response} </div>`);
              //Concat Method  '<div class="alert alert-success" role="alert">'+ response +'</div>'
             
              $('.msgCha').fadeOut(5000);
              jQuery("#kname").val("");
              show();
              $("#editMod").modal('hide');
             
         }
        });
     });
   
     $(document).on("click","#active", function(){
        var id = $(this).val();

        $.ajax({
            url: "classes/process.php",
            type: "POST",
            data: {
                id: id,
                action: "inactive"
            }, 
            success: function(response) {
                show();
            }
        })
    });
     $(document).on("click","#inactive", function(){
        var id = $(this).val();

        $.ajax({
            url: "classes/process.php",
            type: "POST",
            data: {
                id: id,
                action: "active"
            }, 
            success: function(response) {
                show();
            }
        })
    });

        
    

});