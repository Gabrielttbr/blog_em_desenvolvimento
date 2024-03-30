<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class NavbarCategory extends Model
{
    use HasFactory, HasUlids;
    
    protected $table = 'navbar_category';
}
