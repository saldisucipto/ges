<?php

namespace App\Classes;

use Intervention\Image\ImageManagerStatic as Image;

class Files
{
    public function upload(Object $image, String $directory, String $image_name)
    {
        /**
         * Uploaded Files
         */
        $uploadedFiles = $image;
        // mengg
        $rename_image = preg_replace('/\s+/', '', $uploadedFiles->getClientOriginalName());
        // path
        $folder = $directory . '/';
        // nama image baru
        $nama_image = $image_name . "-" . time() . "-" . $rename_image;
        // move to folder
        $image->move($folder, $nama_image);
        return $nama_image;
    }

    public function update(String $old_image, String $path)
    {
        $image_path = \public_path($path . "\\") . $old_image;
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
    }
}
