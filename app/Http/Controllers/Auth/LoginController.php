<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Dotenv\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;


    /**
     * Create a new controller instance.
     *
     * @return string
     */
    public function __construct(Request $request)
    {
        if (Auth::check() && Auth::user()->role_id == 1) {
            $this->redirectTo = route('admin.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 2) {
            $this->redirectTo = route('student.index');
        } elseif (Auth::check() && Auth::user()->role_id == 3) {
            $this->redirectTo = route('instructor.index');
        }

        $this->middleware('guest')->except('logout');
    }
}
