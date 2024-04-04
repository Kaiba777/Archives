<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HTML extends Model
{
    use HasFactory;

    /**
     * Genére un slug a partir de l'attribut motCle
     *
     * @return string
     */
    public function getSlug(): string
    {
        return Str::slug($this->motsCle);
    }
}
