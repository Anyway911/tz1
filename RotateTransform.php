<?php

class RotateTransform extends ImageTransform
{
    public function apply($image)
    {
        // код для поворота изображения с использованием Imagick
        // Пример:
        $image->rotateImage('black', 45);
        return $image;
    }
}