<?php
class AuthController extends BaseController
{
    public function showLogin()
    {
        return View::make('login/login');
    }

    public function register()
    {
            $fname=\Input::get('fname');
            $lname=\Input::get('lname');
            $email=\Input::get('email');
            $username=\Input::get('username');
            $password=\Input::get('password');

            $validator= Validator::make([
                
                'email'=> $email,
                'username'=> $username,
                'password'=>$password,
                ],
                [

                'email' => 'unique:users,email',
                'username'=>'unique:users',
                'password' => 'min:6|max:12'
                ]);



            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);

            }
            else
            {
                    User::create([
                    'first_name'=>$fname,
                    'last_name'=>$lname,
                    'email'=>$email,
                    'username'=>$username,
                    'password'=>Hash::make($password)

                    ]);

                
                Session::flash('message', "User Successfully Created");
                return Redirect::back();
            }

    }

    public function login()
        {
            // dd('Hello')
            $username = \Input::get('username');
            $password = \Input::get('password');

            $user_authentication = Auth::attempt([
                'username' => $username,
                'password' => $password
        ]);

        if ($user_authentication) {
            return Redirect::route('books.index');
        }
        else{
                return Redirect::back()->with(['message' => 'Unauthorized Access']);

        }
    }

     public function logout()
        {
            Session::flush();
            return View::make('login/login');

        }
}

?>