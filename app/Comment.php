<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $table = 'comment';

    protected $fillable = array('content', 'user_id', 'article_id');

    public function article()
    {
        return $this->hasOne('App\Article', 'article_id', 'id');
    }


    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'id');
    }


}
