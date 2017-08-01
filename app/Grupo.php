<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Grupo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'sigla', 'descricao','area','instituicao','unidade','data_formacao'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      
    ];

    public function users(){

        return $this->belongsToMany(User::class);
        
    }

}
