var articleForm = {};
var articleImages = []
var articleDocs = [];
$('#yLink').on('change', function(){
    articleForm.yLink = $('#yLink').val();

});
$('#videoDescr').on('change', function(){
    articleForm.videoDescr = $('#videoDescr').val();

});
$('#aPrice').on('change', function(){
    articleForm.price = $('#aPrice').val();

});
$('#subsPer').on('change', function(){
    articleForm.subsper = $('#subsPer').val();

});
$('#aTitle').on('change', function(){
    articleForm.title = $('#aTitle').val();

});
$('#aBody').on('change', function(){
    articleForm.body = $('#aBody').val();

});
$('#insertArticleBtn').click(function(){
    insertArticle();
})
function AddinngSpinner(){
    $("#outPopUp").append("<div class=\"sk-fading-circle\">\n" +
        "    <div class=\"sk-circle1 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle2 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle3 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle4 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle5 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle6 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle7 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle8 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle9 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle10 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle11 sk-circle\"></div>\n" +
        "    <div class=\"sk-circle12 sk-circle\"></div>\n" +
        "</div>")
};
function RemoveSpinner(){
    $("#outPopUp").empty();
};
function insertArticle(){

    articleForm.articleImages = articleImages;
    articleForm.articleDocs = articleDocs;

    $.ajax({
        url: 'articles/createarticle',
        type: 'post',
        data: articleForm,
        beforeSend: AddinngSpinner(),
        complete: RemoveSpinner(),
        success: function(data) {
            alert('статья успешно добавлена');
            console.log(data);
        }
    })
};


$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'fileupload',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        success: function(data){
            articleImages.push(data.files[0]);

        },
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 9999000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
   }).on('fileploadsend', function (e, data){
       console.log('збся');//$.ajax({
       //    url:'fileupload/imgtodb',
       //    type:'post',
       //    data: data.file,
       })

    .on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                console.log(file.size);
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'fileupload',
        uploadButton = $('<button/>')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
    $('#fileuploaddocs').fileupload({
        url: url,
        dataType: 'json',
        success: function(data){
            articleDocs.push(data.files[0]);

        },
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(pdf|doc|docx)$/i,
        maxFileSize: 9999000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileploadsend', function (e, data){
        console.log('збся');//$.ajax({
        //    url:'fileupload/imgtodb',
        //    type:'post',
        //    data: data.file,
    })

        .on('fileuploadadd', function (e, data) {
            data.context = $('<div/>').appendTo('#filesdocs');
            $.each(data.files, function (index, file) {
                var node = $('<p/>')
                    .append($('<span/>').text(file.name));
                if (!index) {
                    node
                        .append('<br>')
                        .append(uploadButton.clone(true).data(data));
                }
                node.appendTo(data.context);
            });
        }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                console.log(file.size);
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});