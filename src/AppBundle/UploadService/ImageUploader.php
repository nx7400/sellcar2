<?php
/**
 * Created by PhpStorm.
 * User: Michał
 * Date: 03.11.2016
 * Time: 13:02
 */

namespace AppBundle\UploadService;

use Symfony\Component\HttpFoundation\File\UploadedFile;


class ImageUploader
{
    private $targetDir;

    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    public function upload(UploadedFile $file)
    {
        $fileName = md5(uniqid()).'.'.$file->guessExtension();

        $file->move($this->targetDir, $fileName);

        return $fileName;
    }

}