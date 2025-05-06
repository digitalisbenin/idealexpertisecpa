<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $question_id
 * @property string $title
 * @property boolean $is_correct
 * @property string $created_at
 * @property string $updated_at
 * @property Question $question
 * @property UserResult[] $userResults
 */
class Answers extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['question_id', 'title', 'is_correct', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userResults()
    {
        return $this->hasMany('App\Models\UserResult', 'answers_id');
    }
}
