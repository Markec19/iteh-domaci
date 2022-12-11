$(document).ready(function(){
    $("#registracija").submit(function() {
        
        event.preventDefault();
    
        const $form = $(this);
        const $serz = $form.serialize();
        
        request = $.ajax({
            url: "handler/add.php",
            method: "post",
            data: $serz
        });
    
        request.done(function (res, status, jqXHR) {
            console.log(res);
            if (res === "Success") {
                alert("Korisnik je dodat!");
                $(location).attr('href','prijava.php');
            }
            else if(res === "Fail"){
                alert("Korisnik nije dodat!");
                location.reload(true);
            } 
            else {
                alert("Zahtev nije ni poslat");
            }
        });
    
    
    })
})
