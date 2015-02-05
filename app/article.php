<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model {

	//
    //
    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $table = 'tag';

    protected $fillable = array('title', 'digest', 'content', 'category_id');

    public function category()
    {
        return $this->hasOne('App\Category', 'category_id', 'id');
    }

    public function author()
    {
        return $this->hasOne('App\User', 'user_id', 'id');
    }

    public function tags()
    {
        $this->belongsToMany('App\Tag', 'article_tag', 'article_id', 'tag_id');
    }
}
