<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $quiz_id
 * @property integer $formation_id
 * @property integer $chapitre_id
 * @property integer $user_id
 * @property string $note
 * @property string $titre
 * @property string $description
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Chapitre $chapitre
 * @property Quiz $quiz
 * @property Formation $formation
 */
class Notequiz extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['quiz_id', 'formation_id', 'chapitre_id', 'user_id', 'note', 'titre', 'description', 'status', 'created_at', 'updated_at'];

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
    public function quiz()
    {
        return $this->belongsTo('App\Models\Quiz');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function formation()
    {
        return $this->belongsTo('App\Models\Formation');
    }
}
