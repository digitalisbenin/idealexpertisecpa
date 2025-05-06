<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $formation_id
 * @property string $titre
 * @property string $montant
 * @property string $description
 * @property string $image_url
 * @property string $video_url
 * @property string $document_url
 * @property string $created_at
 * @property string $updated_at
 * @property Cart[] $carts
 * @property Formation $formation
 * @property Commentaire[] $commentaires
 * @property MesCour[] $mesCours
 * @property Notequiz[] $notequizzes
 * @property Quiz[] $quizzes
 * @property Suivy[] $suivies
 */
class Chapitre extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['formation_id', 'titre', 'montant', 'description', 'image_url', 'video_url', 'document_url', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carts()
    {
        return $this->hasMany('App\Models\Cart');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function formation()
    {
        return $this->belongsTo('App\Models\Formation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function commentaires()
    {
        return $this->hasMany('App\Models\Commentaire');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mesCours()
    {
        return $this->hasMany('App\Models\MesCour');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notequizzes()
    {
        return $this->hasMany('App\Models\Notequiz');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quizzes()
    {
        return $this->hasMany('App\Models\Quiz');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suivies()
    {
        return $this->hasMany('App\Models\Suivy');
    }
}
