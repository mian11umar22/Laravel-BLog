<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    public function signupshow(){
        return view('Signup');
    }
    public function loginshow(){
        return view('Login');
    }
    public function signup(Request $request){
      $credentials=  $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|max:6'
        ]); 
        $User= User::create($credentials);
        if($User){
            return redirect()->route('loginshow');
        }
    }
    public function login(Request $request){
        $credentials=  $request->validate([
          
            'email'=>'required',
             'password'=>'required'
         ]);
            $remember = $request->has('remember'); 
if(Auth::attempt($credentials , $remember)){
    return redirect()->route('dashboard')->with('success','Logged In Successfully');
    

}else{
    return redirect()->route('loginshow');

}
    }
    public function forgotshow(){
        return view('ForgotView');
    }
    public function forgotform(Request $request){
        $request->validate([
            'email'=>'required|exists:users'
        ]);
        $token =Str::random(64);
        DB::table('password_reset_tokens')->where('email',$request->email)->delete();
        DB::table('password_reset_tokens')->insert([
            'email'=>$request->email,
            'token'=>$token,
            'created_at' => now()
        ]);
Mail::send('forgotemail',['token'=>$token],function ($message) use ($request){
    $message->to($request->email);
    $message->subject('Reset-Password');
});

return redirect()->route('loginshow');
    }
    public function resetshow($token){
        return view('resetshow',['token'=>$token]);
    }

    public function resetfrom(Request $request){
$request->validate([
    'email'=>'required|email|exists:users',
    'password'=>'required|max:6|confirmed',
    'password_confirmation'=>'required'

]);
       $updatepassword =DB::table('password_reset_tokens') 
    ->where([
        'email'=>$request->email,
        'token'=>$request->token
    ])->first();
    if(!$updatepassword){
        return back()->withInput()->with('invaldToken');
    }
    $user= User::where('email',$request->email)->update(['password'=>Hash::make($request->password)]);
    DB::table('password_reset_tokens')->where('email',$request->email)->delete();
return redirect()->route('loginshow');}



public function logout(){
     Auth::logout();
 
        return redirect()->route('loginshow');
    }
}
 
