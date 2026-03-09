<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{

protected $fillable = [

'cliente_id',
'barbeiro',
'servico',
'data',
'hora'

];

public function cliente()
{
return $this->belongsTo(Cliente::class);
}

}