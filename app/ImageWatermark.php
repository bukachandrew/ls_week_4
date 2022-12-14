<?php

namespace App;

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic;

class ImageWatermark
{

    public function image(string $oldImage, string $newImage)
    {
        try {
            $manager = new ImageManager();
            $watermark = new ImageManager();
            $watermarkImage = $watermark->make($oldImage);
            $image = $manager->make(WATERMARK)
                ->insert($watermarkImage, 'center')
                ->resize(200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->save($newImage);
            if ($image) {
                echo "Изображение изменено";
            }
        } catch (Exception $e) {
            var_dump("Error: " . $e);
        }

    }
}