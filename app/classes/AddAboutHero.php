<?php

namespace App\classes;

use App\classes\Database;

class AddAboutHero
{
    public $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertAboutHero($data, $file)
    {
        $title = $data['title'];
        $description = $data['description'];

        $permittedFile = array('jpg', 'jpeg', 'png', 'mp4', 'webp');
        $fileName = $file['image']['name'];
        $fileSize = $file['image']['size'];
        $tempName = $file['image']['tmp_name'];

        $div = explode('.', $fileName);
        $fileExtension = strtolower(end($div));
        $uniqueName = substr(md5(time()), 0, 10) . '.' . $fileExtension;
        $uploadLocation = "assets/images/" . $uniqueName;

        if (empty($fileName)) {
            echo "<span class='alert alert-danger'>Please Select any Image !</span>";
        } elseif (in_array($fileExtension, $permittedFile) === false) {
            echo "<span class='alert alert-danger'>You can upload only:-"
                . implode(', ', $permittedFile) . "</span>";
        } else {
            move_uploaded_file($tempName, $uploadLocation);
            $query = "INSERT INTO tbl_about_hero(title,description,image)
            VALUES('$title','$description','$uploadLocation')
            ";
            $insertHero = $this->db->insert($query);
            if ($insertHero) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function selectAboutHero(){
        $query = "SELECT * FROM tbl_about_hero";
        $getData = $this->db->select($query);
        if ($getData) {
            return $getData;
        }else {
            return false;
        }
    }



















    
}
