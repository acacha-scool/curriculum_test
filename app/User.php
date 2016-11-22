<?php

namespace App;

use Scool\Foundation\User as ScoolUser;
use Laravel\Passport\HasApiTokens;

/**
 * Class User.
 *
 * @package App
 */
class User extends ScoolUser
{
    use HasApiTokens;
}
