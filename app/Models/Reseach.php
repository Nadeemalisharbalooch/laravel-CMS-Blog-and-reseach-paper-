<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseach extends Model
{
    use HasFactory;
    protected $fillable=['user_id','title','abstract','is_Publish','author_name','Pdf_file'];
    
}
