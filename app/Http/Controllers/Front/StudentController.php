<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\View\Components\Choice;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function create_guest(Request $request)
    {
//        dd($request->headers->get("referer"));
        session()->put("referer",$request->headers->get("referer"));
        $title = 'Create User';
        return view('front.auth.index', compact('title'));

    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|min:10',
            'password' => 'required|confirmed',
        ]);

        $url = \Session::get("referer");
        $validated['password'] = bcrypt($request->password);
        $validated['role'] = 'student';
        $user = new User();
        $user->fill($validated);
        $user->save();

        //Todo: change the route to the download link.
        return redirect()->to($url)->with('status', 'New User has been created successfully');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $url = \Session::get("referer");
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            //Todo: change the route to the download link.
            return redirect()->to($url);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        $url = $request->headers->get("referer");
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to($url);
    }
}
