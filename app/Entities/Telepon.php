<?php 
namespace App\Entities;
use CodeIgniter\Entity;

class Telepon extends Entity
{
    public function setPassword(string $pass)
    {
        $salt = uniqid('', true);
        $this->attributes['salt'] = $salt;
        $this->attributes['password'] = md5($salt.$pass);

        return $this;
    }
}
