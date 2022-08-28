$(document).ready(function() {
    const test = async () => {
        await new Promise((resolve)=>setTimeout(() => {
            if($(".message").is(":visible")){
                $('.message').fadeOut('slow', function() {
                    $(this).addClass("d-none");
                });
            }
        }, 3000)); 
    }
    
    test();
});