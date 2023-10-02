<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = "profesor";


    //cuando queremos hacer un registro masivo usando el 
    //        $query = Curso::create($request->all());
    // es probable que haya vulnerabilidades, por eso asigamos en el modelo el $fillable, para
    //especificarle solo en que campos queremos que se agreguen. asi los malintencionados inclusi si agregan
    //un campo en el formulario en el modelo va crear el registro solo con el array del $fillable
    protected $fillable = [
        'nombre',
        'dni',
    ];

    //NONTA2: usamos el protected $guarded en caso tenemos demasiados campos, solo protegemos el status,
    // y los demas campos se agregan automatico, ya no usamos $fillable

    //protected $guarded = ['status'];
}
