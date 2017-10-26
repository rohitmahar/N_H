<?php


class BrandController  extends BaseController{


    public function uploadBrand(){
        return View::make('uploadBrand');
    }


    public function BrandPost()
    {
        $validation = Validator::make(Input::all(), [
            'name' => 'required',
        ]);

        if($validation->passes()) {

            $data = Input::all();

            $data = [
                'name' => Input::get('name'),
                ];

            $brand = new brand;
            $brand->create($data);

            return Redirect::back()->with('message', 'Upload Successfully');

        }

        // when vlaidaion failed
        return Redirect::back()->withInput()->withErrors($validation->errors());
    }
}