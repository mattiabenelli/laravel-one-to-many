<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Project;


class Type extends Model
{
    protected $fillable = ['name','slug'];
    
    use HasFactory;

    public function project(){
        return $this->hasMany(Project::class);
    }

}
