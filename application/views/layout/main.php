<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.fileupload.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>assets/js/popper.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <style>.img_preview {
            height: 300px;
            width: 400px;

        }
        .sk-fading-circle {
            margin: 100px auto;
            width: 40px;
            height: 40px;
            position: relative;
        }

        .sk-fading-circle .sk-circle {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
        }

        .sk-fading-circle .sk-circle:before {
            content: '';
            display: block;
            margin: 0 auto;
            width: 15%;
            height: 15%;
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
            animation: sk-circleFadeDelay 1.2s infinite ease-in-out both;
        }
        .sk-fading-circle .sk-circle2 {
            -webkit-transform: rotate(30deg);
            -ms-transform: rotate(30deg);
            transform: rotate(30deg);
        }
        .sk-fading-circle .sk-circle3 {
            -webkit-transform: rotate(60deg);
            -ms-transform: rotate(60deg);
            transform: rotate(60deg);
        }
        .sk-fading-circle .sk-circle4 {
            -webkit-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
        }
        .sk-fading-circle .sk-circle5 {
            -webkit-transform: rotate(120deg);
            -ms-transform: rotate(120deg);
            transform: rotate(120deg);
        }
        .sk-fading-circle .sk-circle6 {
            -webkit-transform: rotate(150deg);
            -ms-transform: rotate(150deg);
            transform: rotate(150deg);
        }
        .sk-fading-circle .sk-circle7 {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }
        .sk-fading-circle .sk-circle8 {
            -webkit-transform: rotate(210deg);
            -ms-transform: rotate(210deg);
            transform: rotate(210deg);
        }
        .sk-fading-circle .sk-circle9 {
            -webkit-transform: rotate(240deg);
            -ms-transform: rotate(240deg);
            transform: rotate(240deg);
        }
        .sk-fading-circle .sk-circle10 {
            -webkit-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            transform: rotate(270deg);
        }
        .sk-fading-circle .sk-circle11 {
            -webkit-transform: rotate(300deg);
            -ms-transform: rotate(300deg);
            transform: rotate(300deg);
        }
        .sk-fading-circle .sk-circle12 {
            -webkit-transform: rotate(330deg);
            -ms-transform: rotate(330deg);
            transform: rotate(330deg);
        }
        .sk-fading-circle .sk-circle2:before {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }
        .sk-fading-circle .sk-circle3:before {
            -webkit-animation-delay: -1s;
            animation-delay: -1s;
        }
        .sk-fading-circle .sk-circle4:before {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }
        .sk-fading-circle .sk-circle5:before {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }
        .sk-fading-circle .sk-circle6:before {
            -webkit-animation-delay: -0.7s;
            animation-delay: -0.7s;
        }
        .sk-fading-circle .sk-circle7:before {
            -webkit-animation-delay: -0.6s;
            animation-delay: -0.6s;
        }
        .sk-fading-circle .sk-circle8:before {
            -webkit-animation-delay: -0.5s;
            animation-delay: -0.5s;
        }
        .sk-fading-circle .sk-circle9:before {
            -webkit-animation-delay: -0.4s;
            animation-delay: -0.4s;
        }
        .sk-fading-circle .sk-circle10:before {
            -webkit-animation-delay: -0.3s;
            animation-delay: -0.3s;
        }
        .sk-fading-circle .sk-circle11:before {
            -webkit-animation-delay: -0.2s;
            animation-delay: -0.2s;
        }
        .sk-fading-circle .sk-circle12:before {
            -webkit-animation-delay: -0.1s;
            animation-delay: -0.1s;
        }

        @-webkit-keyframes sk-circleFadeDelay {
            0%, 39%, 100% { opacity: 0; }
            40% { opacity: 1; }
        }

        @keyframes sk-circleFadeDelay {
            0%, 39%, 100% { opacity: 0; }
            40% { opacity: 1; }
        }
        #outPopUp {
            position: absolute;

            z-index: 15;
            top: 50%;
            left: 50%;
            margin: -100px 0 0 -150px;

        }</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Блог</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/welcome">Главная <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="/index.php/articles/getarticles">Статьи</a>
            <a class="nav-item nav-link" href="/index.php/articles">Добавить Статью</a>
            <a class="nav-item nav-link" href="/index.php/auth/">Войти/Зарегистрироваться</a>

        </div>
    </div>
</nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
        </div>
    </div>
</div>

</br>
<div id="outPopUp"></div>



<?php if ($main_view === 'getarticles')
{
    $this->load->view($main_view, $result);
}
else {$this->load->view($main_view);

}

/*if ($main_view === 'getarticles') {
    foreach ($result as $object){
        echo $object->title.'<br>';
        echo $object->body.'<br>';
        echo '</br></br>';

    }
}*/ ?>






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


</body>
</html>