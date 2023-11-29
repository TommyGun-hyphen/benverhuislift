<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name', 'phone', 'email', 'street_name', 'house_number', 'city', 'postal_code', 'number_hours', 'datetime', 'is_paid', 'status'];
}
