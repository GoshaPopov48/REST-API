<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\CreateAccountRequest;
use App\Http\Requests\Account\SignInRequest;
use App\Http\Resources\Account\UserResources;

class AccountController extends Controller
{
    public function create(CreateAccountRequest $request)
    {
        $request->createAccount();
        return responceOk();
    }

    public function signIn(SignInRequest $request)
    {
        return [
            'token' => $request->signIn()
        ];
    }

    public function show()
    {
        return new UserResources(
            auth()->user()
        );
    }
}
