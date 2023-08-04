<?php

include 'ImageTransform.php';
include 'ScaleTransform.php';
include 'RotateTransform.php';
include 'FilterTransform.php';

// Парсинг аргументов командной строки
$inputImage = $argv[1];
$outputImage = $argv[2];
$transformations = array_slice($argv, 3);

// Создание объекта Imagick для исходного изображения
$image = new Imagick($inputImage);

// Применение трансформаций
foreach ($transformations as $transformation) {
    switch ($transformation) {
        case 'scale':
            $transform = new ScaleTransform();
            $image = $transform->apply($image);
            break;
        case 'rotate':
            $transform = new RotateTransform();
            $image = $transform->apply($image);
            break;
        case 'filter':
            $transform = new FilterTransform();
            $image = $transform->apply($image);
            break;
        // Другие варианты трансформаций
    }
}

// Сохранение измененного изображения
$image->writeImage($outputImage);

echo 'Изображение успешно преобразовано и сохранено' . PHP_EOL;

