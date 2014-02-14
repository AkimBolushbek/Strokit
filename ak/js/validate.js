/**
 * Created with JetBrains PhpStorm.
 * User: Akim
 * Date: 13.02.14
 * Time: 17:05
 * To change this template use File | Settings | File Templates.
 */
jQuery.validator.setDefaults({
    debug: true,
    success: "valid"
});

$( "#myform" ).validate({
    rules: {
        field: {
            required: true,
            email: true
        }
    },
    onsubmit: false
});


$(document).ready(function(){
    var form = $( "#myform" );

    $( "button" ).click(function() {
        form.validate();
        if(form.valid())
        alert( "Катталды");
        else
        alert("Турра толтуруу керек");
    });
});