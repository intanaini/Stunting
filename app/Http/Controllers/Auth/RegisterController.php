<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\whatsappGateway;
use App\Models\aktivasi;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'no_hp' => ['required', 'numeric'],
            'nik' => ['required', 'numeric', 'unique:users'],
            'posyandu'=> ['required']

        ],[
            'name.required' => 'Kolom nama harus diisi.',
            'name.string' => 'Kolom nama harus berupa teks.',
            'name.max' => 'Kolom nama tidak boleh lebih dari :max karakter.',
            'password.required' => 'Kolom kata sandi harus diisi.',
            'password.string' => 'Kolom kata sandi harus berupa teks.',
            'password.min' => 'Kolom kata sandi minimal harus :min karakter.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            'no_hp.required' => 'Kolom nomor HP harus diisi.',
            'no_hp.numeric' => 'Kolom nomor HP harus berupa angka.',
            'nik.required' => 'Kolom NIK harus diisi.',
            'nik.numeric' => 'Kolom NIK harus berupa angka.',
            'nik.unique' => 'NIK sudah digunakan.',
            'posyandu.required' => 'Kolom posyandu harus diisi.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            // 'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'no_hp' => $data['no_hp'],
            'nik' => $data['nik'],
            'status_users' => 'tidak aktif',
            'id_user' => 'pengguna-' . Str::random(8),
            'idposyandu' => $data['posyandu'],
            // 'nik'=> $data['nik'],
        ]);
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $otp = mt_rand(10000, 99999);


        event(new Registered($user = $this->create($request->all())));
        aktivasi::create(
            [

                'id_user' => $user->id_user,
                'aktivasi' => $otp,
                'status' => 'Belum di Aktivasi oleh admin',
            ]
        );

        $pesan = 'Kode Aktivasi Anda Adalah *' . $otp . '*';
        $pessan = new whatsappGateway;
        $pessan->index($user->no_hp, $pesan);

        // $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect()->route('aktivasi', $user->id_user);
    }

    public function aktivasi($id)
    {
        $user = User::where('id_user', $id)->first();
        return view('auth.aktivasi', compact(['user']));
    }

    public function kirimaktivasi(Request $request)
    {
        $otps = aktivasi::where('id_user', $request->id)->first();
        $user = User::where('id_user', $request->id)->first();


        $this->validate($request, [
            'aktivasi' => 'required'
        ]);

        if ($request->aktivasi == $otps->aktivasi) {
            $user->update([
                'status_users' => 'aktif'
            ]);
            $pesan = "Selamat Akun Anda telah Aktif Silahkan login ke " . "sistem-pakar-stunting.com";
            $pessan = new whatsappGateway;
            $pessan->index($user->no_hp, $pesan);
            $otps->update([
                'status' => 'Sudah Aktif'
            ]);
            // $this->guard()->login($user);
            return redirect()->route('home');
        } else {
            return back()->with('message', 'Otp yang anda masukkan salah.');
        }
    }
}
