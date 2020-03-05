<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use Auth;

class LoginController extends AdminController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    /**
     * Show the Admin Login Page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {

		$this->validate($request, [
			'username'   => 'required',
			'password' => 'required'
		]);

		if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
			return redirect()->intended(route('admin.dashboard'));
		}

		return redirect()->back()->withInput($request->only('username', 'remember'));

    }

    public function logout()
    {

        Auth::guard('admin')->logout();

        return redirect('/');

    }

}
