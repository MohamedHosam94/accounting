<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];





    public function receivedBond()
    {
        return $this->hasMany(ReceivedBond::class);

    }

    
    public function givenBond()
    {
        return $this->hasMany(GivenBond::class);

    }

    
    public function purchasesInvoice()
    {
        return $this->hasMany(PurchasesInvoice::class);

    }

    
    public function salesInvoice()
    {
        return $this->hasMany(SalesInvoice::class);

    }

    public function bond()
    {
        return $this->hasMany(Bond::class);

    }
    

    public function customersBalance()
    {
        return $this->hasMany(CustomersBalance::class);

    }


    public function suppliersBalance()
    {
        return $this->hasMany(SuppliersBalance::class);

    }
}
