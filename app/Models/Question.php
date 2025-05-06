<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $quiz_id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 * @property Answer[] $answers
 * @property Quiz $quiz
 * @property UserResult[] $userResults
 */
class Question extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['quiz_id', 'title', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quiz()
    {
        return $this->belongsTo('App\Models\Quiz');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userResults()
    {
        return $this->hasMany('App\Models\UserResult');
    }
}
