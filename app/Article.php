<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model {

    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $table = 'article';

    protected $fillable = array('title', 'digest', 'content', 'category_id');

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'article_tag', 'article_id', 'tag_id');
    }
}
