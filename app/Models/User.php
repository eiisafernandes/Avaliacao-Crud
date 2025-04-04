<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    const ROLE_ADMIN = 'admin';
    const ROLE_CLIENTE = 'cliente';
    const ROLE_FUNCIONARIO = 'funcionario';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    //verificar se é cliente
    public function isCliente(){
        return $this->role == self::ROLE_CLIENTE;
    }

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }

    //verificar se é admin
    public function isAdmin(){
        return $this->role == self::ROLE_ADMIN;
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    //verificar se é funcionario
    public function isFuncionario(){
        return $this->role == self::ROLE_FUNCIONARIO;
    }

    public function funcionario()
    {
        return $this->hasOne(Funcionario::class);
    }
    
    
}
