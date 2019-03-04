var total_photos_counter = 0;
Dropzone.options.myDropzone = {
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 16,
    acceptedFiles: "image/jpeg,image/png,image/gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    dictFileTooBig: 'Image is larger than 16MB',
    timeout: 10000,

    init: function () {
        this.on("removedfile", function (file) {
            //console.log(file.name);
            $.post({
                url: '/admin/media/banner/destroyDZ',
                data: {id: file.name, _token: $('[name="_token"]').val()},

                dataType: 'json',
                success: function (data) {
                    //console.log(data);
                    total_photos_counter--;
                    $("#counter").text("# " + total_photos_counter);
                }
            });
        });

    },
    success: function (file, done) {
        if (typeof done.message !== 'undefined') {
            total_photos_counter++;
            $("#counter").text("# " + total_photos_counter);
            this.on("queuecomplete", function (file, done) {
                location.reload();
            });
        }
        if (typeof done.error !== 'undefined') {
            alert(done.error);
        }
    }

};