<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>assets/js/popper.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <style>.carousel {
            /*width: 100%;
            height: 70;*/
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

<?php $this->load->view($main_view);

if ($main_view === 'getarticles') {
    foreach ($result as $object){
        echo $object->title.'<br>';
        echo $object->body.'<br>';
        echo '</br></br>';

    }
} ?>

</body>
</html>