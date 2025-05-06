<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $numero
 * @property string $montantTotal
 * @property string $reference
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property MesCour[] $mesCours
 */
class Commande extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'numero', 'montantTotal', 'reference', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mesCours()
    {
        return $this->hasMany('App\Models\MesCour');
    }
}
