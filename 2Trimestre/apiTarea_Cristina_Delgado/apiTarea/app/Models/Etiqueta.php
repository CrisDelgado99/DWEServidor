<?php

namespace App\Models;
use App\Models\Tarea;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etiqueta extends Model
{
    use HasFactory;

    protected $fillable = ["nombre"];
    protected $hidden = ["created_at", "updated_at"];

    public function tareas(): BelongsToMany
    {
        return $this->BelongsToMany(Tarea::class, 'tareas_etiquetas', 'etiquetas_id', 'tareas_id');
    }
}
