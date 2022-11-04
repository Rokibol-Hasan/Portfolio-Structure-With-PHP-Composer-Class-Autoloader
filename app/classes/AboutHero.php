<?php

namespace App\classes;

use App\classes\Database;

class AboutHero
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
            echo "<div class='alert alert-danger'>You can upload only:-"
                . implode(', ', $permittedFile) . "</div>";
        } elseif ($fileSize > 2097152) {
            echo "<div class='alert alert-danger'>upload file below 2mb</div>";
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

    public function updateAboutHero($id, $data, $file)
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
        } elseif ($fileSize > 5097152) {
            echo "<div class='alert alert-danger'>upload file below 2mb</div>";
        } else {
            move_uploaded_file($tempName, $uploadLocation);
            $query = "UPDATE tbl_about_hero
            SET
            title = '$title',
            description = '$description',
            image = '$uploadLocation'
            WHERE id = $id
            ";
            $updateHero = $this->db->update($query);
            if ($updateHero) {
                return $updateHero;
            } else {
                return false;
            }
        }
    }

    public function selectAboutHero()
    {
        $query = "SELECT * FROM tbl_about_hero";
        $getData = $this->db->select($query);
        return $getData;
    }

    public function selectAboutHeroById($id)
    {
        $query = "SELECT * FROM tbl_about_hero WHERE id = $id";
        $getData = $this->db->select($query);
        return $getData;
    }
}
