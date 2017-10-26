<?php

class CategoryController extends BaseController{


    public function uploadCategory(){
        return View::make('uploadCategory');
    }

    public function CategoryPost(){


        $validation = Validator::make(Input::all(), [
            'name' => 'required',
        ]);

        if($validation->passes()) {

            $data = Input::all();

            $data = [
                'name' => Input::get('name'),
            ];

            $category = new category;
            $category->create($data);

            return Redirect::back()->with('message', 'Upload Successfully');

        }

        // when vlaidaion failed
        return Redirect::back()->withInput()->withErrors($validation->errors());

    }
}