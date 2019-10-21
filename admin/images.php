<?php 
require_once('config/config.php');
require_once(ADMIN_PATH.'header_includes.php');
require_once(CLASS_PATH.'db.class.php');
require_once(ADMIN_CLASS_PATH.'gallery.class.php');
require_once(ADMIN_CLASS_PATH.'category.class.php');
?>
<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin Demo
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */
-->
<html lang="en">
<head>
<!-- Force latest IE rendering engine or ChromeFrame if installed -->
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<meta charset="utf-8">
<title>Gallery</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Generic page styles -->
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><?php include (ADMIN_TPL_PATH.'overall_top.tpl');?></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="64%"><?php include (ADMIN_TPL_PATH.'cpannel.tpl');?></td>
    <td width="36%"><div id="content"><table border="0" align="center" cellpadding="2" cellspacing="2">
            <tr>
              <td><div align="center"><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"><img src="images/frontpage.png" alt="Home" name="Image4" width="48" height="48" border="0" id="Image4" /></a><a href="signindefault.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/frontpage2.png',1)"></a><a href="select.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/frontpage2.png',1)"><br />
              </a><span class="txt_ash">Home</span></div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><img src="images/mediamanager.png" name="image" width="48" height="48" border="0" id="image" /><a href="user_manager.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/categories.png',1)"></a><br />
                Image Gallery</div></td>
              <td><div align="center"><img src="images/icon_right_arrow.png" width="20" height="20" /><img src="images/icon_right_arrow.png" width="20" height="20" /></div></td>
              <td><div align="center"><img src="images/module.png" width="48" height="48" /><br />
                  Add images </div></td>
            </tr>
          </table>
    </div></td>
  </tr>
</table></td>
  </tr><tr>
    <td><div id="content"><table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
        <tr>
          <td bgcolor="#d8d8d8" class="adminlist"><h3>Image Gallery</h3></td>
        </tr></table></table>
        <div id="error" class="col-lg-10">
                  <h4 style="color:#A52A2A"><span class="error"><?php include(ADMIN_MESSAGES.'gallery.message.first.php'); ?></span></h4>
                </div>
        <form name="form2" id="form2" method="post" action="controlers/gallarycontroler.php?mode=add_gallery" enctype="multipart/form-data">
            
                <div class="col-lg-12" >
            <div class="col-lg-2"><span class="pull-right">If New catagory:</span></div>
            <div class="col-lg-4"><input name="imgcategory2" size="40" type="text" id="imgcategory2" class="form-control"></div>
            <div id="oneImg" class="col-lg-1"><span class="pull-right"> Cover Image:</span></div>
            <div class="col-lg-3" ><input name="up_image" type="file" id="up_image" class="form-control"></div>
            
            <div class="col-lg-1" ><span class="pull-right"><input name="Submit" class="btn btn-primary" type="submit" value="Submit"></span></div>
             <div class="col-lg-1" ><span class="pull-left"> <input type="button" class="btn btn-warning" name="btn_cancel" value="Cancel" onclick="window.location.href='signindefault.php'"></span></div>
            </div>
        </form>
        </br></hr>    
  <div class="container">
  </br></br><hr></br>
    <!-- The file upload form used as target for the file upload widget -->
    <form id="form1" action="" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-3"><span class="pull-right">Select catagory:</span></div>
            <div class="col-lg-7"><select name="imgcategory" id="imgcategory" class="form-control">
              <option value="0">Select gallery </option>
              <?php 
                    $cat = Gallary:: Getcatagery();
                    for($a=0;$a<count($cat);$a++){
                        $row = each($cat);
                        
                        ?>
              <option value="<?php echo $row["value"]["catagary"]; ?>"> <?php echo $row["value"]["catagary"]; ?></option>
              <?php } ?>
            </select></div>
            </br></br>
            <div class="col-lg-3"><span class="pull-right">Select Files:</span></div>
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger deleteAll">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete Album</span>
                </button>
                <!--<input type="checkbox" class="toggle">-->
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
    <br>
 
</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">

{% 
    for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->

<script id="template-download" type="text/x-tmpl">

{% 
    for (var i=0, file; file=o.files[i]; i++) {
        var imgcategory=$('#imgcategory').val();
        var up_image=file.name;
        $.ajax({
            url:'controlers/gallarycontroler.php?mode=add_multi_gallery',
            type: 'POST',
            data: {imgcategory:imgcategory,up_image:up_image},
            dataType: 'json',
            success: function(response){

            },
            error: function(e){
                console.log(e)
            }
            
         });

        %}
   <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<script>

</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<script type="text/javascript">
$(document).ready(function() {
    $('.files').hide();
 $('#imgcategory').change(function (){ 
    var imgcategory=$('#imgcategory').val();
    $('.files').html('');
    $('.files').show();
    getImages(imgcategory);
});


    function getImages(imgcategory){
            
            $.ajax({
            url:'controlers/gallarycontroler.php?mode=view_multi_gallery',
            type: 'POST',
            data: {imgcategory:imgcategory},
            dataType: 'json',
            success: function(response){
            $(response).each(function(index,file) {
                  $('.files').append('<tr class=""><td>'+
            '<span class="preview"><img src="../upload_images/Gallary/thumb/'+file.image_name+'"></span></td><td><span>'+file.catagary+'</span></td><td><span>'+file.image_name+'</span></td><td>'+
            '<button class="btn btn-danger delete" id="delete" data-imageid="'+file.image_id+'" >'+
                    '<i class="glyphicon glyphicon-trash"></i>'+
                    '<span>Delete</span></button><input type="checkbox" name="delete" value="1" class="toggle"></td></tr>'); 
                  
             });  

            },
            error: function(e){
                console.log(e)
            }
            
         });
        }
$(document).on("click", ".delete", function(){ 
    var imageid=$(this).closest('.delete').data("imageid");
    deleteImages(imageid);
});
function deleteImages(imageid){
    var imgcategory=$('#imgcategory').val();
            $.ajax({
            url:'controlers/gallarycontroler.php?mode=delete',
            type: 'POST',
            data: {imageid:imageid},
            dataType: 'json',
            success: function(response){
              $('.error').html('Image is deleted');
            },
            error: function(e){
                $('.error').html('Error in deleting');
                console.log(e)
            }
            
         });
        }
$(document).on("click", ".deleteAll", function(){ 
    var albumid=$('#imgcategory').val();
    if(albumid){
         deleteAllImages(albumid);
     }else{
        $('.error').html('Please Select Image Catagory');
     }
   
});
function deleteAllImages(albumid){
alert(albumid)
            $.ajax({
            url:'controlers/gallarycontroler.php?mode=deleteAll',
            type: 'POST',
            data: {albumid:albumid},
            dataType: 'json',
            success: function(response){
                $('.error').html('Album is deleted');
            },
            error: function(e){
                $('.error').html('Error in deleting');
                console.log(e)
            }
            
         });
        }

 });
</script>
</body>
</html>
