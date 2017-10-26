<?php

class ProductController  extends BaseController{

    public function Product(){
        return View::make('Product');
    }

    public function uploadProduct(){
        return View::make('uploadProduct');
    }

    public function viewUploadedProducts(){
        $product = new Product();
        $products = $product;

        return View::make('viewUploadedProducts', compact('products'));
    }



    public function viewProduct(){

        $product = new Product();
        $products = $product->paginate(12);

        return View::make('page', compact('products'));
    }

    public function viewProductByBrand($brand){
        $products = new Product();

        $products = $products->where('brand', '=', $brand);

        $products = $products->paginate(12);

        return View::make('brand', compact('products'));

    }


    public function viewProductBySize($size){
        $products = new Product();

        $products = $products->where('size', '=', $size);

        $products = $products->paginate(12);

        return View::make('size', compact('products'));

    }

    public function viewLatestProducts(){

        $products = new Product();

       //$products = DB::table('products')->orderBy('created_at')->take(15)->get();

        $products = $products->paginate(5);
        




        return View::make('index', compact('products'));

    }

    

    public function removeProduct($productId){

        $user = Auth::user();
        $user->products()->detach($productId);

        return Redirect::route('carts');

    }

    public function deleteProduct($productId)
    {

        DB::table('products')->where('Id' , '=' ,  $productId)->delete();
        return Redirect::back();
    }

    public function getProduct($productId){

        $product = Product::find($productId);
        return View::make('productDetail', compact('product'));
    }

    public function ProductPost(){


        $validation = Validator::make(Input::all(),[
            'name'    => 'required',
            'code'    => 'required',
            'brand'   => 'required',
            'detail'  => 'required',
            'price'   =>'required',
            'image'     => 'required'

        ]);




        // Validation passes
        if($validation->passes()){


            //where to upload
            $target_dir = public_path().'/'.'assets/buyShop/images/';

            //what to name the uploaded file
            $target_file = $target_dir . basename($_FILES['image']['name']);

            //move file from temp location to destination
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

            $image = $_FILES['image']['name'];
            $location = 'assets/buyShop/images/'.$image;

            $data = Input::all();

            $data = [
                'name'     => Input::get('name'),
                'code'     => Input::get('code'),
                'brand'  => Input::get('brand'),
                'price'  => Input::get('price'),
                'detail'  => Input::get('detail'),
                'location'  => $location,
            ];



            $product = new Product;
            $product->create($data);

            return Redirect::back()->with('message', 'Upload Successfully');

        }

        // when vlaidaion failed
        return Redirect::back()->withInput()->withErrors($validation->errors());

    }

}


