<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;


class AssignmentController extends Controller {

    public function home()
    {
        return view('assignment');
    }

    public function calculateScore()
    {

    }

    public function fetchScore()
    {
        $target_dir = "../ScoreCalculator/Uploads";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = true;
        $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = false;
        }

        // Allow certain file formats
        if($fileType != "xlsx"  ) {
            echo "Sorry only .xlsx files are allowed";
            $uploadOk = false;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == false) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
