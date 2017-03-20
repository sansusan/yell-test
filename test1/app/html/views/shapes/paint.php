<?php
/* @var $data array */
?>

<h1>Отрисовка фигур</h1>


<?php
foreach ($data as $shape) {
    echo $shape->getType();
    $shape->draw();
}
?>
