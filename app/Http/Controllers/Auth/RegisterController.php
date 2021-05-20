<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Tools\Img\ToServer;
use Illuminate\Auth\Events\Registered;

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
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
            'active' => ['boolean'],
            'tipo' => ['string','in:Integrante,Apoyo'],
            'nombre' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'foto' => ['required','image'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        $user =User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'active' => false,
            'tipo' => $data['tipo'],
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'foto' => $data['foto'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return $user;
    }

    public function register(Request $request) {
        $this->validator($request->all())->validate();
        $data = ToServer::saveImage($request, 'foto', 'avatars/1');

        event(new Registered(
            $user = $this->create($data))
        );

        return $this->registered($request, $user)??redirect($this->redirectPath());
    }


    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user) {
        return redirect('login')->with('success',$user->nombre.' '.$user->apellidos.' su cuenta se ha registrado correctamente. Ahora solo espere a que la coordinación acepte su solicitud.');
    }
}