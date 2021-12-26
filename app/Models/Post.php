<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);

    }

    public function  getPostImgAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('storage/' . $value);
        }
<<<<<<< HEAD

    public function comments(){
    return $this-> hasMany(comment::class);
    }



=======
>>>>>>> aa22b4919323c4ffb46fd8b2f4f45151913fd92f
}
