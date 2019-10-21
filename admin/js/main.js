/*
 * jQuery File Upload Plugin JS Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

/* global $, window */

$(function () {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#form1').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        url: '../upload_images/',
        dataType: 'json'
        //done: function (e, data) {
            //$.each(data.result.files, function (index, file) {
               // $('<p/>').text(file.name).appendTo(document.body);
            //});
        //}

    });
   // $('#form1').fileupload({
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
        //var imgcategory='test 678';
        //var up_image='test 678';
         //$.ajax({
           // url:'controlers/gallarycontroler.php?mode=add_multi_gallery',
            //type: 'POST',
            //data: {imgcategory:'imgcategory',up_image:'up_image'},
            //dataType: 'json'
            //success: function(response){
             //   alert('hh')
            //}
         //});
     

   // });


    // Enable iframe cross-domain access via redirect option:
    $('#form1').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    if (window.location.hostname === 'blueimp.github.io') {
        // Demo settings:
        $('#form1').fileupload('option', {
            url: '//jquery-file-upload.appspot.com/',
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            maxFileSize: 999000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        });
        // Upload server status check for browsers with CORS support:
        if ($.support.cors) {
            $.ajax({
                url: '//jquery-file-upload.appspot.com/',
                type: 'HEAD'
            }).fail(function () {
                $('<div class="alert alert-danger"/>')
                    .text('Upload server currently unavailable - ' +
                            new Date())
                    .appendTo('#fileupload');
            });
        }
    } else {
        // Load existing files:
        $('#form1').addClass('fileupload-processing');
        
        $.ajax({
            // Uncomment the following to send cross-domain cookies:
            //xhrFields: {withCredentials: true},
            url: $('#form1').fileupload('option', 'url'),
            dataType: 'json',
            context: $('#form1')[0]
        }).always(function () {
            $(this).removeClass('fileupload-processing');
        }).done(function (result) {

            $(this).fileupload('option', 'done')
                .call(this, $.Event('done'), {result: result});
        });
        
    
     }

});
