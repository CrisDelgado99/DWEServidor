<?php

namespace App\Models;

use App\Models\Etiqueta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tarea extends Model
{
    use HasFactory;

    protected $fillable = ["titulo", "descripcion"];
    protected $hidden = ["created_at", "updated_at"];

    public function etiquetas(): BelongsToMany
    {
        return $this->BelongsToMany(Etiqueta::class, 'tareas_etiquetas', 'tareas_id', 'etiquetas_id');
    }
}
