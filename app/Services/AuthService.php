<?php


namespace App\Services;


use App\Models\User;
use http\Env\Response;
use Illuminate\Support\Facades\Log;

class AuthService
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register($credentials)
    {
        $user = $this->user->where('email', $credentials['email'])->first();
        if($user) {
            return abort(400, __('auth.failed'));
        }
        $newUser = new User;
        $newUser->email = $credentials['email'];
        $newUser->password = Hash::make($credentials['password']);
        $newUser->save();
    }
}
