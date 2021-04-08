<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    protected $table="sales.customers";
    // protected $fillable = ['nama_pl', 'alamat_pl'];

    use HasFactory;

    public static function list(){
		return DB::table('sales.customers')
        ->select([
            'sales.customers.customer_id as customer_id',
            'sales.customers.first_name as first_name',
            'sales.customers.last_name as last_name',
            'sales.customers.phone as phone',
            'sales.customers.email as email',
            'sales.customers.street as street',
            'sales.customers.city as city',
            'sales.customers.state as state',
            'sales.customers.zip_code as zip_code',
        ]);
    }
}
