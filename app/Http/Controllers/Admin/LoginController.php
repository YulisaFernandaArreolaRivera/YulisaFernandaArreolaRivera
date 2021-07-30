<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class LoginController extends Controller
{
 use AuthenticatesUsers; //Se agrega este Trait de laravel el cual provee la autenticación de usuarios

 protected $redirectTo = '/admin'; //define a donde el usuario admin seráredirigido después del login exitoso
 
 public function __construct()
 {
 $this->middleware('guest:admin')->except('logout'); //Se usa el middleware guest para admin dentro del constructor
 }
 
 public function showLoginForm()
 {
 return view('admin.auth.login');//Envia la vista del login
 }

 public function login(Request $request)
 {
 $this->validate($request, [
 'email' => 'required|email',
 'password' => 'required|min:6'
 ]);
 if (Auth::guard('admin')->attempt([
 'email' => $request->email,
 'password' => $request->password
 ], $request->get('remember'))) {
 return redirect()->intended(route('admin.dashboard'));
 } 
 return back()->withInput($request->only('email', 'remember'));
 }

 public function logout(Request $request)
 {
 Auth::guard('admin')->logout();
 $request->session()->invalidate();
 return redirect()->route('admin.login');
 }


 
}

