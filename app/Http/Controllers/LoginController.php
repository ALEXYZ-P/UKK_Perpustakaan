<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('login.login',['data'=>$data]);
    }

    public function create()
    {
        $akses = Akses::all();

        return view('login.register',['akses'=>$akses]);
    }
    public function register(Request $request)
{
    $ValidatedData = $request->validate([
        'nama'      => 'required',
        'nik'       => 'required',
        'username'  => 'required',
        'email'     => 'required|email',
        'password'  => 'required'
    ]);

    // Validasi khusus
    $errors = [];
    if(User::where('nik', $ValidatedData['nik'])->exists()) {
        $errors['nik'] = 'NIK sudah terdaftar!';

    } elseif(User::where('username', $ValidatedData['username'])->exists()) {
        $errors['username'] = 'Username sudah terdaftar!';

    } elseif(User::where('email', $ValidatedData['email'])->exists()) {
        $errors['email'] = 'Email sudah terdaftar!';
    }
    if(count($errors) == 1) {
        // Jika hanya satu error, tidak perlu foreach
        $key = key($errors);
        return back()->withErrors([
            $key => $errors[$key]
        ]);
    } elseif(count($errors) > 1) {
        // Jika lebih dari satu error, tampilkan semua error
        return back()->withErrors($errors);
    }

    $ValidatedData['password'] = Hash::make($ValidatedData['password']);
    $ValidatedData['level'] = 'Member';

    $data = User::create($ValidatedData);

    // Menambahkan data role
    $role = new Role();
    $role->id_user = $data->id;
    $role->id_akses = 9;
    $role->save();

    return redirect('/login')->with('success','Berhasil melakukan registrasi!');
}


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            // Pengecekan level pengguna
            if(Auth::user()->level == 'Member'){
                return redirect('/landingPage');
            } else {
                return redirect('/data/dashboard');
            }
        } else {
            // Pengecekan apakah email terdaftar
            $user = User::where('email', $credentials['email'])->first();
            if(!$user) {
                return back()->withErrors([
                    'email' => 'Email tidak terdaftar!',
                ]);
            }

            return back()->withErrors([
                'password' => 'Password salah!',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function reset(Request $request)
    {
        $email = $request->input('email');
        $user = User::where('email','=',$email);

        $password = $request->input('password');
        $repassword = $request->input('retypepassword');
        if($user->count() > 0 ){
            if($password == $repassword)
            {
                $password = Hash::make($password);
                $user->update(['password' => $password]);
                return redirect('/login')->with('success', 'Berhasil Melakukan Reset Password !');
            }else{
                return back()->withErrors([
                    'password' => 'Password not match',
                ]);
            }
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

}
