<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Contato;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
    
			try{
				$usuario =  User::create([
					'name' => $data['name'],
					'email' => $data['email'],
					'rg' => $data['rg'],
					'cpf' => $data['cpf'],
					'data_nascimento' => $data['data_nascimento'],
					'password' => Hash::make($data['password']),
				]);

				$usuario->save();


				$endereco = Endereco::create([
				'cep' => $data['cep'],
				'uf' => $data['uf'],
				'municipio' => $data['municipio'],
				'logradouro' => $data['logradouro'],
				'bairro' => $data['bairro'],
				'numero' => $data['numero'],
				'complemento' => $data['complemento'],
				'fkusers' =>$usuario->id,
					]);
			
				$endereco->save();
				
				$contato = Contato::create([
				'telefone' => $data['telefone'],
				'celular' => $data['celular'],
				'fkusers' =>$usuario->id,
				]);

				$contato->save();
				//dd($data);
				//return redirect('/');
//				exit('Sucesso');
			}catch(Exception $e){
				exit('Error');
			}

    }


}
