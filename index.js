// Función de inicialización (vacía en este caso)
function init() {
    // Puedes agregar código de inicialización aquí si es necesario en el futuro
}

$(document).ready(function() {
    // Inicializar Summernote
    $('#tick_descrip').summernote({
        height: 150,
        lang: "es-ES",
        callbacks: {
            onImageUpload: function(image) {
                console.log("Image detect...");
                myimagetreat(image[0]);
            },
            onPaste: function (e) {
                console.log("Text detect...");
            }
        }
    });

    // Evento para el botón "#btnsoporte"
    $(document).on("click","#btnsoporte",function(){
        if($('#rol_id').val()=='1'){
            $('#lbltitulo').html("Acceso soporte");
            $('btnsoporte').html("Acceso Usuario");
            $('#rol_id').val(2);
            $('#imgtipo').attr("src","public/2.png");
        }else{
            $('#lbltitulo').html("Acceso Usuario");
            $('btnsoporte').html("Acceso Soporte");
            $('#rol_id').val(1);
            $('#imgtipo').attr("src","public/1.png");
        }


  
    });

    // Llamada a la función de inicialización
    init(); // Esta es la llamada a la función init(), que está bien posicionada

}); // Aquí se cierra la función $(document).ready()
