//const inputElement = document.getElementById("analitico_pdf");
document.getElementById("analitico_pdf").addEventListener("change", handleFiles, false);
document.getElementById("inscripcion_pdf").addEventListener("change", handleFiles, false);
document.getElementById("dni_pdf").addEventListener("change", handleFiles, false);
document.getElementById("certificado_medico").addEventListener("change", handleFiles, false);
document.getElementById("foto_perfil").addEventListener("change", handleFiles, false);



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

            timer: 50000,
        });
        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "upload_file.php";

            $.ajax({
                type: "POST",
                url: url,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,

                success: function(data) {
                    console.log('data:' + data);
                }
            }).done(function() {
            });
        }
    })
});

