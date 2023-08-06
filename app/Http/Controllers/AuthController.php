<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;


class AuthController extends Controller
{

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return response()->json(['data'=>'login success'],Response::HTTP_ACCEPTED);
        }
        return response()->json(['data'=>'login failed'],Response::HTTP_UNAUTHORIZED);
    }

    function home(){
        if(  Auth::user()->role_id === 1)
        {
            return Inertia::render('Dashboard/Admin');
        }
       else if(  Auth::user()->role_id === 2)
        {
            return Inertia::render('Dashboard/User');
        }
       else if(  Auth::user()->role_id === 3)
        {
            return Inertia::render('Dashboard/GuestNew');
        }
        return Inertia::render('404-Page');

    }

    public function Profile(){
        $user=  Auth::user();
        return [
            'id' => $user->id ,
            'first_name' => $user->first_name ,
            'last_name' => $user->last_name ,
            'email' => $user->email ,
            'mobile' => $user->mobile ,
            'role_id' => $user->role_id ,
            'slug' => $user->slug ,
            'address_1' => $user->address_1 ,
            'address_2' => $user->address_2 ,
            'city' => $user->city ,
            'state' => $user->state ,
            'country' => $user->country ,
            'pin_code' => $user->pin_code ,
            'profile_photo_path' => $user->profile_photo_path ,
        ];
    }

    public function SignUp(Request $request){

        $request->validate([
            'email' => ['required','max:40','min:10','unique:users'],
            'password' => ['required'],
            'first_name' => ['required'],
            'last_name' => ['string'],
            'mobile' => ['required','max:10','min:10','unique:users'],
        ]);

        $user =  User::where('email' , request('email'))->first();
        request()->request->add(['username' => request('email') ]);

        if( !$user )
        {
            $user = new User();
            $user->role_id =3;
            $user->slug = Str::slug(request('first_name').' '.request('last_name'));
            $user->email = request('email');
            $user->password = Hash::make(request('password'));
            $user->mobile = request('mobile');
            $user->first_name = request('first_name');
            $user->last_name = request('last_name');
            $user->save();

            return $this->login($request);
        }

    }

    function ForgetPassword(){
        $user =  User::where('email',request('email'))->first();
        $otp = 123456;// rand(100000,999999);
        if( $user )
        {
            $user = User::where('email', request()->input('email'))->first();

            $token = Password::getRepository()->create($user);
            $user->sendPasswordResetNotification($token);

            PasswordReset::where('email' , request('email'))->delete();
            $data=['email' => request('email'),'otp'=>$otp , 'token' =>$token ,'created_at' =>  date('Y-m-d H:i')];
            PasswordReset::create( $data);

            return response()->json(['status' => 200 , 'message' => 'Reset link send on email.']);
        }

        return response()->json(['status' => 500 , 'message' => 'Unable to send reset link on email!']);
    }

    public function ResetPasswordShow(Request $request ,$token)
    {
        $password =  PasswordReset::where('token', $token )->first();
        return Inertia::render('Auth/ResetPassword',['data' => $password]);
    }

    function ResetPassword(){
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required_with:confirm_password','confirmed','max:10' ,'min:5'],
            'password_confirmation' => ['required','max:10' ,'min:5']
        ]);

        $passwordData =  PasswordReset::where('email',request('email'))->where(function($q){
            $q->where('otp',request('otp'));
            $q->orWhere('token',request('token'));
        })
            ->first();
        if( $passwordData )
        {
            PasswordReset::where('email',request('email'))->delete();

            $user =  User::where('email' ,request('email'))->first();
            if( $user )
            {
                $user->password =  Hash::make(request('password'));
                $user->save();

                if (Auth::attempt(['email'=> request('email') ,"password"=> request('password') ])) {
                    // return response()->json(['status' => 200 , 'message' => 'Password is changed successfully.']);
                }

                return response()->json(['status' => 200 , 'message' => 'Password is changed successfully.']);
            }
            return response()->json(['status' => 500 , 'message' => 'User not found to given email.']);
        }
        return response()->json(['status' => 500 , 'message' => 'Unable to change password!']);
    }

    function UpdateProfile(Request $request)
    {
        $user =  User::where('id' , Auth::id())->first();

        if( $user )
        {
            $user->first_name =  $request->first_name ;
            $user->last_name =  $request->last_name ;
            $user->email =  $request->email ;
            $user->mobile =  $request->mobile ;

            $user->save();

            return response()->json([ 'message' => 'User profile updated.' ,'status' =>200]);
        }

        return response()->json([ 'message' => 'unable to update user profile!' ,'status' =>500]);
    }

    function UpdateProfilePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required_with:password_confirmation' ,'confirmed','min:5',"max:10"],
            'password_confirmation' => ['required'],
        ]);

        $user =  User::where('id' , Auth::id())->first();
        if( $user && Hash::check($request->password, $user->password)){
            $user->password =   Hash::make($request->password );
            $user->save();
            return response()->json([ 'message' => 'User password updated.' ,'status' =>200]);
        }

        return response()->json([ 'message' => 'unable to update user password!' ,'status' =>500]);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();

        if( $request->expectsJson() )
        return response()->json(['status' =>200 , 'message' => 'User logout!']);
        else
          return redirect()->route('login');


    }



}
