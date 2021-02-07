$(function () {
    $("[data-toggle='tooltip']").tooltip()

    $("#panel_messages").click(function () {
        $("#notifications").html('0')
    });

});

function getMessage(message){
    $('.cliente_message').html(message)
}