<h2>Добавить статью</h2>

<div class="form-group">
<input class="form-control" type="text" name="youtubeLink" placeholder="Ссылка Youtube" id="yLink" />
<textarea class="form-control" name="videoDescription" cols="40" rows="10"  placeholder="Описание видео" id="videoDiscr" ></textarea>

<span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Добавить изображение</span>
    <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="files[]" multiple>
    </span>
<br>
<br>
<!-- The global progress bar -->

<!-- The container for the uploaded files -->
<div id="files" class="files"></div>
<select class="form-control" name="articlePrice" id="aPrice">
    <option value="0" selected="selected">бесплатная</option>
    <option value="1">платная</option>
</select>
<select class="form-control" name="subscribePeriod" id="subsPer">
            <option value="0" selected="selected">срок подписки</option>
 </select>
 <input type="text" name="articleTitle" value="" id="aTitle" class="form-control"  placeholder="Заголовок статьи"  />
<textarea name="articleBody" cols="40" rows="10" id="aBody" class="form-control"  placeholder="Текст статьи" ></textarea>
</div>
<div class="btn btn-primary" id="insertArticleBtn">Жмяк</div>










<script src="<?php echo base_url();?>assets/js/jquery.ui.widget.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="<?php echo base_url();?>assets/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo base_url();?>assets/js/jquery.fileupload-validate.js"></script>
<script src="<?php echo base_url();?>assets/js/customupload.js"></script>