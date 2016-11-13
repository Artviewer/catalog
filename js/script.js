$(document).ready(function(){
    $('#next').click(function(){
        $.ajax ({
            url: "process.php?action=ajax",
            type: "POST",
            data: ,
            processData: false,
            contentType: false,
            success: function(data){

            }
        });
        return false;
    });
});
