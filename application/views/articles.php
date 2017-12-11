<h2>Добавить статью</h2>



<?php $attributes = array('id' => 'article_form', 'class' => 'form_horizontal'); ?>

<?php echo form_open('articles/createarticle', $attributes); ?>

<div class="form-group">




<?php

$data = array(

        'class' => 'form_control',
        'name' => 'youtubeLink',
        'placeholder' => 'Ссылка Youtube'

    )
?>




<?php echo form_input($data);?>

</div>

<div class="form-group">

<?php

$data = array(

        'class' => 'form_control',
        'name' => 'videoDescription',
        'placeholder' => 'Описание видео'

);
?>

<?php echo form_textarea($data);?>



</div>


<div class="form-group">


<?php

echo form_label('Изображение статьи');
$data = array(

        'class' => 'form-control',
        'name' => 'articleImage',
        'placeholder' => 'Изображение статьи',
        'type' => 'file'

    );
echo form_input($data);?>

</div>

<div class="form-group">


    <?php

    $data = array(

        '0' => 'бесплатная',
        '1' => 'платная'
    );
    echo form_dropdown('articlePrice', $data, '0');?>




</div>

<div class="form-group">

    <?php

    $data = array(

            '0' => 'срок подписки'
        );

    echo form_dropdown('subscribePeriod', $data, '0');?>



</div>

<div class="form-group">



    <?php

    $data = array(

        'class' => 'form-control',
        'name' => 'articleTitle',
        'placeholder' => 'Заголовок статьи'

    );
    echo form_input($data);
    ?>
</div>

<div class="form-group">


<?php $data = array(

        'class' => 'form-control',
        'name' => 'articleBody',
        'placeholder' => 'Текст статьи'

    );
echo form_textarea($data);?>


</div>

<div class="form-group">

<?php $data = array(

        'class' => 'form_control',
        'name' => 'docArticle',
        'type' => 'file'
    );
echo form_input($data);?>

</div>

<div class="form-group">

    <?php $data = array(
            'class' => 'btn btn-primary',
            'name' => 'submit',
            'value' => 'Добавить статью'
        );
    echo form_submit($data);?>

</div>




<?php echo form_close(); ?>
