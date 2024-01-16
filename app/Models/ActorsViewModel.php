<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorsViewModel extends Model
{
    //use HasFactory;
    public $popular_actors;
    public function __construct($popular_actors)
    {
        $this->popular_actors = $popular_actors;
    }

    public function popularActors()
    {
        return collect( $this->popular_actors)->dump();
    }

}
