<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model {

	//
    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $table = 'tag';

    protected $fillable = array('name', 'icon', 'description');

    public function articles()
    {
        return $this->belongsToMany('App\Article', 'article_tag', 'tag_id', 'article_id');
    }

}
