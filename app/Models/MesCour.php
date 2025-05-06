<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $commande_id
 * @property integer $formation_id
 * @property integer $chapitre_id
 * @property integer $user_id
 * @property string $reference
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Chapitre $chapitre
 * @property Formation $formation
 * @property Commande $commande
 */
class MesCour extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['commande_id', 'formation_id', 'chapitre_id', 'user_id', 'reference', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chapitre()
    {
        return $this->belongsTo('App\Models\Chapitre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function formation()
    {
        return $this->belongsTo('App\Models\Formation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commande()
    {
        return $this->belongsTo('App\Models\Commande');
    }
}
