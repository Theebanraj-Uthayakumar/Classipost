<?php

namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

class BaseModel extends Model
{
    protected $url = 'http://api.vadalli.com/api/token';
    // protected $username = "Priyanka";
    // protected $password = "abcdef";
    // protected $grant_type = "password";
}
