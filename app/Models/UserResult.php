<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $quiz_id
 * @property integer $answers_id
 * @property integer $question_id
 * @property integer $note
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Answer $answer
 * @property Quiz $quiz
 * @property Question $question
 */
class UserResult extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'quiz_id', 'answers_id', 'question_id', 'note', 'created_at', 'updated_at'];

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
    public function answer()
    {
        return $this->belongsTo('App\Models\Answer', 'answers_id');
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
    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}
