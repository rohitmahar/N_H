<?php

class UserController extends BaseController{



    public function userProfile(){

        $id = Auth::user()->id;
        $user = User::find($id);

        return View::make('viewProfile', compact('user'));
    }

    public function register(){
        return View::make('register');
    }

    public function contact(){
        return View::make('contact');
    }


    public function registerPost(){


        $validation = Validator::make(Input::all(),[
            'first_name'    => 'required|alpha|min:2',
            'last_name'     => 'required|alpha|min:2',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6|confirmed',
            'address'       => 'required|min:2|max:100',
            'postal_code'   => 'required|integer|max:99999',
            'age'           =>  'required|integer',
            'phone_no'      =>  'required',
        ]);

        // Validation passes
        if($validation->passes()){

            $data = Input::all();
            $password = $data['password'];
            $data['password']   = Hash::make($password);

            $user = new User;
            $user->create($data);

            return Redirect::back()->with('message', 'Registered Successfully');

        }

        // when vlaidaion failed
        return Redirect::back()->withInput()->withErrors($validation->errors());

    }

    public function login(){
        $url = $_SERVER['HTTP_REFERER'];


        return View::make('login')->withUrl($url);
    }

    public function loginPost(){
//        print_r(Input::get('prev_url'));
//        exit;
//        $url = Request::url();
//        echo '<pre>';
//        print_r($url);
//        echo '</pre>';
//        exit;

        $validation = Validator::make(Input::all(),[
            'email'         => 'required|email',
            'password'      => 'required',
        ]);

        // Validation passes
        if($validation->passes()){

            if(Auth::attempt([
                'email'     => Input::get('email'),
                'password'  => Input::get('password'),
                'active'    => 1
            ])){
                if(Input::has('prev_url')){
                    return Redirect::intended(Input::get('prev_url'));
                }
                // When logged in successfully
                return Redirect::intended(route('index'));


            }

            return Redirect::back()->withInput()
                                   ->with('message', 'Email - password mismatches');


        }

        // when vlaidaion failed
        return Redirect::back()->withInput()->withErrors($validation->errors());
    }


    public function getDashboard(){
        return View::make('dashboard');
    }

    public function logout(){
        $user = Auth::user();
        $user -> products()->detach();
        Auth::logout();
        return Redirect::route('login-form');
    }

    public function setting(){
        return View::make('setting');
    }

    public function settingPost(){

      //validation rules
        $rules = [
            'first_name'=>  'required|alpha|min:2',
            'last_name' =>  'required|alpha|min:2',
            'address'   =>  'required|min:2|max:100'
        ];

        //create Validation
        $validation = Validator::make(Input::all(), $rules);

//if validation passes
        if($validation->passes()){
            //update to table
            $user = User::find(Auth::user()->id);

            $user->fill(Input::all());
            $user->save();

            return Redirect::back()->with('message', 'Basic settings updated successfully');

        }

        //validation failed
        return Redirect::back()->withInput()->withErrors($validation->errors());
    }

    public function viewUsers(){

        $user = new user;
        $users = $user->getAll();
        return View::make('viewUsers', compact('users'));
    }

}