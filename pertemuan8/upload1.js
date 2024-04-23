$(document).ready(function(){
    $('#file').change(function(){
        if (this.file.length > 0){
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').rpop('disabled', true).css('opacity', 0.5);
        }
    })

    $('#upload-form').submit(function(e){
        e.preventDefault();

        var formData = new formData(this);

        $.ajax({
            type: "POST",
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
            },
            error: function(){
                $('#status').html("Terjadi kesalahan saat mengunggah file.");
            }
        });
    });
});