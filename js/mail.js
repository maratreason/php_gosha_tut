$(".send-mail").on("click", function() {
    const email = $("#email").val().trim();
    const name = $("#name").val().trim();
    const phone = $("#phone").val().trim();
    const message = $("#message").val().trim();

    if (email == '') {
        $("#errorMessage").text('Введите email');
        return false;
    }
    if (name == '') {
        $("#errorMessage").text('Введите имя');
        return false;
    }
    if (phone == '') {
        $("#errorMessage").text('Введите телефон');
        return false;
    }
    if (message == '') {
        $("#errorMessage").text('Введите текст сообщения');
        return false;
    }

    $("#errorMessage").text('');

    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: {email, name, phone, message},
        dataType: 'html',
        beforeSend: function() {
            $(".sendMail").prop("disabled", true);
        },
        success: function(data) {
            if (!data) {
                console.log('Произошла ошибка, сообщение не отправлено!');
            }
            console.log(data);
            $(".contact-form").trigger("reset");
            $(".sendMail").prop("disabled", false);
        }
    });
});