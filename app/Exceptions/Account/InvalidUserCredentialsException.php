<?php

namespace App\Exceptions\Account;

use Exception;

class InvalidUserCredentialsException extends Exception
{
    protected $message = 'Invalid user credentials';

}
