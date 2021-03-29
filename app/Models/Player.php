<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'number', 'team_id'];

    protected $searchableFields = ['*'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
