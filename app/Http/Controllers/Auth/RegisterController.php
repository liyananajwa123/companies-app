<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Pelatih;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Notifications\VerificationOtp;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    // public function showRegistrationForm()
    // {
    //     return view('auth.register');
    // }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'ic_no' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255'],
        ], [
            'ic_no.required' => 'Sila Masukkan No Kad Pengenalan Anda',
            'ic_no.min' => 'Minimum panjang No Kad Pengenalan adalah 2 karakter.',
            'email.unique' => 'Alamat emel sudah wujud dalam pangkalan data.',
            // Add more custom error messages if needed
        ]);
    }

    protected function create(array $data)
    {
        $ic_no = $data['ic_no'];
        $pelatih = Pelatih::where('no_mykad', $ic_no)->first();
        if ($pelatih) {
            $user = User::create([
                'ic_no' => $ic_no,
                'id_pelatih' => $pelatih->id_pelatih,
                'id_permohonan' => $pelatih->id_permohonan,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'role' => 'PELATIH'
            ]);

            $randomNumber = rand(100000, 999999); 

            $user->update([
                'otp' => $randomNumber
            ]);

            $user->notify(new VerificationOtp($randomNumber));

            return $user;
        } else {
            throw ValidationException::withMessages(['ic_no' => 'No Kad Pengenalan Tidak Berdaftar']);
        }
    }

    public function register(Request $request)
    {
        try {
            $this->validator($request->all())->validate();

            $user = $this->create($request->all());
            if ($user) {
                $this->guard()->login($user);
                return $this->registered($request, $user)
                            ?: redirect($this->redirectPath());
            }
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
    
}
