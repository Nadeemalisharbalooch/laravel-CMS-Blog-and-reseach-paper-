<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Define the upload directory as a constant
    public const UPLOAD_DIRECTORY = '/storage/auth/posts/';

    // Specify the fillable attributes
    protected $fillable = ['image', 'type'];

    // Define a getter method to format the image attribute
    public function getImageAttribute($image)
    {
        return $this->uploadDirectory . $image;
    }
}
