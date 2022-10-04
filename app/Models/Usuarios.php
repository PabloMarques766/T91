<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuarios extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'usuarios';
    protected $primarykey = 'id_usuario';
    protected $dates = [
                        'created_at',
                        'updated_at',
                        'deleted_at'];
    protected $fillable = ['id_usuario', 'nome','email','nascimento','endereco'];                    
        
    
}
