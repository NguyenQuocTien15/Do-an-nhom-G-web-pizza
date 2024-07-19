<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;

use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;




use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Admin extends Model 
{
    use  Authorizable, Authorizable, CanResetPassword, MustVerifyEmail;
}
//class User extends Model implements AuthenticatableContract,AuthorizableContract,CanResetPasswordContract
    
// {
//     use Authorizable, Authorizable, CanResetPassword, MustVerifyEmail;
// }
