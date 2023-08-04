<?php

class ScaleTransform extends ImageTransform
{
    public function apply($image)
    {
        //  код для масштабирования изображения с использованием Imagick
        // Пример:
        $image->scaleImage(200, 0);
        return $image;
    }
}