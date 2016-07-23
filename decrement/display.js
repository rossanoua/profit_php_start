$(document).ready(function(){

    $("#submit").submit(function(e){
    e.preventDefault();
        var _a = $('#a').val();
        var _b = $('#b').val();
        var _c = $('#c').val();
        $.ajax({
            type: "POST",
            url: "getDecrement.php",
            async: true,
            data: ({a : _a, b : _b, c : _c}),
                success: function(data){
                    $('#resulthere').html(data);
                    //console.log(data);
                    //return true;
                },

                error: function() {
                    alert('error...');
                }
            });
        });
    });
