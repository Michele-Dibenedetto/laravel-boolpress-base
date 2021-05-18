<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["nome", "data_publicazione", "immagine_profilo", "testo"];
}
