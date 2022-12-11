$(document).ready(function(){
    $("#izmena").submit(function() {
        
        event.preventDefault();
    
        const $form = $(this);
        const $serz = $form.serialize();
        
        request = $.ajax({
            url: "handler/update.php",
            method: "post",
            data: $serz
        });
    
        request.done(function (res, status, jqXHR) {
            console.log(res);
            if (res === "Success") {
                alert("Korisnik je izmenjen!");
                $(location).attr('href','prijava.php');
            }
            else if(res === "Fail"){
                alert("Korisnik nije izmenjen!");
                location.reload(true);
            } 
            else {
                alert("Zahtev nije ni poslat");
            }
        });
    
    
    })
})
