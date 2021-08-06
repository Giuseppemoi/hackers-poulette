$('form').submit(function(){    
    if ($('input#website').val().length != 0) {
        return false;
    } 
});