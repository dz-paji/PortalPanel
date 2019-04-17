<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'password' => ['required', 'string', 'min:11', 'max:11', 'confirmed'],
            'school' => ['required', 'string'],
            'age' => ['required', 'integer'],
            'gender' => ['required'],
            'id_number' => ['required', 'max:18', 'min:18'],
            'birthday' => ['required', 'date'],
            'address' => ['required', 'string'],
            'ethnic' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'wechat' => ['required', 'string'],
            'contact_other' => ['string'],
            'room_set' => ['required','string'],
            'roomate' => ['string'],
            'is_paid' => ['boolean'],
            'payment_gateway' => ['string'],
            'invoice_id' => ['string'],            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'school' => $data['school'],
            'age' => $data['age'],
            'gender' => $data['gender'],
            'id_number' => $data['id_number'],
            'birthday' => $data['birthday'],
            'address' => $data['birthday'],
            'ethnic' => $data['ethnic'],
            'subject' => $data['subject'],
            'wechat' => $data['wechat'],
            'contact_other' => $data['contact_other'],
            'room_set' => $data['room_set'],
            'rommate' => $data['rommate'],
            'is_paid' => $data['false'],
            'payment_gateway' => '',
            'invoice_id' => '',
        ]);
    }
 
 
}
