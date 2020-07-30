<?php

namespace App\Http\Controllers;



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
        $targetDirectory = "../ScoreCalculator/Uploads/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $mayUpload = true;
        $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

        var_dump($fileType);
        var_dump($targetFile);


        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $mayUpload = false;
        }

        // Only allow .xlsx file types
        if ($fileType != "xlsx"  ) {
            echo "Sorry only .xlsx files are allowed";
            $mayUpload = false;
        }

        // Check if $mayUpload is set to false by an error
        if ($mayUpload == false) {
            echo "Sorry, your file was not uploaded.";
            // else - upload the file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}
