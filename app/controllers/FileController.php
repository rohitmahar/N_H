<?php

class FileController extends BaseController{
    Public function getUploadForm(){
        return View::make('imageUpload');
    }

    public function postUploadImage(){

        //where to upload
        $target_dir = public_path().'/'.'assets/buyShop/images/';

        //what to name the uploaded file
        $target_file = $target_dir . basename($_FILES['image']['name']);

        //move file from temp location to destination
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        return Redirect::back();
    }
}