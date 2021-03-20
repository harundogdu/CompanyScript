$(document).ready(function () {
    $('#btnSave').click(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "./page/message-send.php",
            data: $('#contactForm').serialize(),
            success: function (response) {
                if (response == "yes") {
                    swal({
                        title: "Tebrikler !",
                        text: "Mesajınız Başarıyla Gönderildi",
                        icon: "success",
                        html: true,
                        timer: 2000,
                        buttons:false
                    })

                } else if (response == "no") {
                    swal({
                        title: "Hata !",
                        text: "Mesajınız Gönderilirken Bir Hata Oluştu",
                        icon: "warning",
                        buttons: false,
                        timer: 2000
                    });
                } else if (response == "empty") {
                    swal({
                        title: "Dikkat !",
                        text: "Form Alanını Lütfen Boş Bırakmayınız",
                        icon: "warning",
                        buttons: false,
                        timer: 2000
                    });
                }
                setTimeout(function () {
                    window.location.reload();
                }, 2500);

            }
        });

    });
});