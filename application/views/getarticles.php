
<?php
foreach ($result as $object){

    echo $object->title.'<br>';
    echo "<img class='img_preview' src='$object->image' img><br>";
    echo $object->body.'<br>';
    echo '</br></br>';

}