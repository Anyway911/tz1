<?php

class FilterTransform extends ImageTransform
{
    public function apply($image)
    {
        // код для применения фильтров к изображению с использованием Imagick
        // Пример:
        $image->filter(Imagick::FILTER_GAUSSIAN, 1);
        return $image;
    }
}