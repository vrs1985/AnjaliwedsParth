$(document).ready(function(){

/*send to email*/
$("#submitMsg").click(function(){
        var guestName = $("input[name='guest']:checked").val();
        var guestNumber = $("#numberGuests").val();
        console.log(guestName, + "1 " + guestNumber);
    if(guestName != "" && guestNumber !="" && guestName != null && guestName != undefined){
            var form_data = $("#form").serialize(); 
            $.ajax({
            type: "POST", 
            url: "send.php", 
            data: form_data,
            success: function() {
                   console.log("Ваше сообщение отпрвлено!");
            }});
        }
    });
    // end send to email

$("input[name='name']").keyup(function() {
    var searchInp = $("input[name='name']").val();
    if(searchInp == "" || searchInp == null || searchInp == undefined || searchInp == NaN ){
        $('#ListGuests').css("display", "none");
    } else {
        $('#ListGuests').css("display", "block");
    }
    if  (searchInp == "Parth Kapadia"){
            window.location.href = "http://anjaliwedsparth.us/log.html"
        }
});

    $("#submitMsg").click(function(){
        var guestName = $("input[name='guest']:checked").val();
        var guestNumber = $("#numberGuests").val();
        console.log(guestName, + "2 " + guestNumber);
        if(guestName != "" && guestNumber !="" && guestName != null && guestName != undefined){
        $.post("post.php", {text: guestName, guestNumber});
        $(".msg").html("<span> Thank you! We look forward to seeing you at our wedding!</span>");
        return false; 
    } 
    });
});