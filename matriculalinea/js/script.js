$(function () {
    $('#error-contact').hide();
    $('#error-email').hide();
    $('#error-subject').hide();
    $('#error-message').hide();
    $('#contactForm').on('submit', function (e) {
        e.preventDefault();
        let isValid = true;

        if ($('#contact').val().trim() === '') {
            $('#contact').addClass('error');
            $('#error-contact').show();
            isValid = false;
        } else {
            $('#contact').removeClass('error');
            $('#error-contact').hide();
        }

        if ($('#email').val().trim() === '') {
            $('#email').addClass('error');
            $('#error-email').show();
            isValid = false;
        } else {
            $('#email').removeClass('error');
            $('#error-email').hide();
        }

        if ($('#subject').val().trim() === '') {
            $('#subject').addClass('error');
            $('#error-subject').show();
            isValid = false;
        } else {
            $('#subject').removeClass('error');
            $('#error-subject').hide();
        }

        if ($('#message').val().trim() === '') {
            $('#message').addClass('error');
            $('#error-message').show();
            isValid = false;
        } else {
            $('#message').removeClass('error');
            $('#error-message').hide();
        }

        if (isValid) {
           // alert('Formulario enviado correctamente.');
            fetch("procesar_contact.php",{
                method : 'POST',
                headers : {
                    'Content-Type' : 'application/json'
                },
                body : JSON.stringify({
                    name: $('#contact').val().trim(),
                    email: $('#email').val().trim(),
                    subject: $('#subject').val().trim(),
                    message: $('#message').val().trim()
                })
            })
            .then(response => response.json())
            .then(data => {
                if(data.status == '00'){
                    $('#contact').val("");
                    $('#email').val("");
                    $('#subject').val("");
                    $('#message').val("");
                }
                alert(data.message);
            })
            .catch(error => console.log(error));
        }
    });

    $('#error-name').hide();
    $('#error-age').hide();
    $('#error-grade').hide();
    $('#error-file').hide();

    $('#registrationForm').on('submit', function (e) {
        e.preventDefault();
        let isValid = true;

        if ($('#name').val().trim() === '') {
            $('#name').addClass('error');
            $('#error-name').show();
            isValid = false;
        } else {
            $('#name').removeClass('error');
            $('#error-name').hide();
        }

        if ($('#age').val().trim() === '') {
            $('#age').addClass('error');
            $('#error-age').show();
            isValid = false;
        } else {
            $('#age').removeClass('error');
            $('#error-age').hide();
        }

        if ($('#grade').val().trim() === '') {
            $('#grade').addClass('error');
            $('#error-grade').show();
            isValid = false;
        } else {
            $('#grade').removeClass('error');
            $('#error-grade').hide();
        }

        if ($('#file').val().trim() === '') {
            $('#file').addClass('error');
            $('#error-file').show();
            isValid = false;
        } else {
            $('#file').removeClass('error');
            $('#error-file').hide();
        }

        if (isValid) {
            $(this).unbind('submit').submit();
        }
    });
    $('.price').hide();
    $(".image-price").on("click", function(){
        $(this).find(".price").fadeIn();
    });

    $(".image-price").on("mouseleave", function(){
        $(this).find(".price").fadeOut();
    });

    $('#error-teacher').hide();
    $('#teacherForm').on('submit', function (e) {
        e.preventDefault();
        let isValid = true;

        if ($('#name').val().trim() === '') {
            $('#name').addClass('error');
            $('#error-teacher').show();
            isValid = false;
        } else {
            $('#name').removeClass('error');
            $('#error-teacher').hide();
        }

       
        if (isValid) {
            fetch("teacherBE.php",{
                method : 'POST',
                headers : {
                    'Content-Type' : 'application/json'
                },
                body : JSON.stringify({
                    action: "add",
                    name: $('#name').val().trim()
                })
            })
            .then(response => response.json())
            .then(data => {
                if(data.status == '00'){
                    $('#name').val("");
                    $('#listTeachers').append("<tr><td>"+data.name+"</td></tr>");
                }
                alert(data.message);
            })
            .catch(error => console.log(error));
            
        }
    });

    function getAllTeacher(){
        fetch("teacherBE.php",{
            method : 'POST',
            headers : {
                'Content-Type' : 'application/json'
            },
            body : JSON.stringify({
                action: "getAll"
            })
        })
        .then(response => response.json())
        .then(data => {
            if(data.status == '00'){
                data.teachers.forEach(element => {
                    $('#listTeachers').append("<tr><td>"+element.name+"</td></tr>");
                });
            }
        })
        .catch(error => console.log(error));
    }

    getAllTeacher();
})