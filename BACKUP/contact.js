//const inputElement = document.getElementById("analitico_pdf");
document.getElementById("analitico_pdf").addEventListener("change", handleFiles, false);
document.getElementById("inscripcion_pdf").addEventListener("change", handleFiles, false);
document.getElementById("dni_pdf").addEventListener("change", handleFiles, false);

function handleFiles() {
    //alert('1')
    var fileSize = this.files[0].size;
    if (fileSize > 10000000) {
        $.notify({
            icon: 'far fa-thumbs-down',
            //title: 'Bootstrap notify',
            message: 'No se pueden subir archivos mayores de 10 Mb',
            target: '_blank'
        }, {
            type: 'danger',
            placement: {
                from: "top",
                align: 'center'
            },
            delay: 5000,
            timer: 1000,
        });
        $(this).next('.custom-file-label').html('');
    } else {
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName.substring(12, 500));
    }
}
$(function() {
    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator
    $('#contact-form').validator();
    // when the form is submitted
    $('#contact-form').on('submit', function(e) {
        $.notify({
            icon: 'far fa-thumbs-up',
            //title: 'Bootstrap notify',
            message: 'Subiendo los archivos...',
            target: '_blank'
        }, {
            type: 'info',
            placement: {
                from: "top",
                align: 'center'
            },
            /*delay: 50000,*/
            timer: 50000,
        });
        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "upload_file.php";
            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                /*async: false,*/
                success: function(data) {
                    console.log('data:' + data);
                    // data = JSON object that contact.php returns
                    // we recieve the type of the message: success x danger and apply it to the 
                    //var messageAlert = 'alert-' + data.type;
                    //var messageText = data.message;
                    //alert('1')
                    // window.location.replace("result.php");
                    //$('#contact-form')[0].reset();*/
                }
            }).done(function() {
                // alert('3')
                /* $.notify({
                     icon: 'far fa-thumbs-up',
                     //title: 'Bootstrap notify',
                     message: ' <h1>Muchas Gracias, hemos recibido tu documentación </h1> <p class="lead"><strong>Recordá</strong>. Adicionalmente al envío del presente formulario debés acercar la documentación a tu Sede de cursado o enviarla por correo a la dirección de Universidad Siglo 21(Calle de los Latinos N° 8555, B° Los Boulevares, CP.5008, Córdoba, Argentina).En caso de que ya la hayas entregado, no necesitas hacer ninguna gestión adicional. Podés consultar más info en < a href = "https://contenidos.21.edu.ar/microsites/reglamento/index.php?put=2-2-documentacion-obligatoria" target = "_blank" > contenidos .21.edu.ar < /a>.</p > ',
                     target: '_blank'
                 }, {
                     type: 'info',
                     placement: {
                         from: "top",
                         align: 'center'
                     }
                 });*/
                // window.location.replace("result.php");
                // window.location = "http://digitaladmin.com.ar/DocumentacionLegajo//result.php";
                // alert('5')
            });
            //alert('4')
            //window.location.replace("result.php");
        }
    })
});