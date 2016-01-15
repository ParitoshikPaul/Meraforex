jQuery(document).ready(function() {
    jQuery("#edit-names-fieldset-1-amount-1").keydown(function (event) {
        if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault(); //stop character from entering input
            alert('Enter Nummeric values!! Please!!');
        }
    });


});