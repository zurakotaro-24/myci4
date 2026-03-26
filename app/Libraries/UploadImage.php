<?php 

namespace App\Libraries;

class UploadImage
{
    protected string $baseFolder;

    public function __construct($baseFolder = 'uploads')
    {
        $this->baseFolder = $baseFolder;
    }

    public function upload($file): string|false
    {

        if(!$file->isValid() || $file->hasMoved())
        {
            
            return false;
        }

        $uploadPath = FCPATH . 'uploads/' . $this->baseFolder;

        if(!is_dir($uploadPath))
        {
            if(!mkdir($uploadPath, 0777, true) && !is_dir($uploadPath))
            {
                throw new \RuntimeException('Failed to create upload directory: ' . $uploadPath);
            }
        }
    
        $newName = $file->getRandomName();
        $file->move($uploadPath, $newName);

        return $this->baseFolder . '/' . $newName;
    }
}