<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $formation_id
 * @property integer $user_id
* @property integer $chapitre_id
 * @property string $created_at
 * @property string $updated_at
 * @property Formation $formation
* @property Chapitre $chapitre
 */

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'chapitre_id',
        'formation_id',
        'user_id',
        'quantite',
        
        'created_at',
        'updated_at',
    ];

    public function formation()
    {
        return $this->belongsTo('App\Models\Formation');
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
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
