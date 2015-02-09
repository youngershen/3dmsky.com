<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model {

    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $table = 'category';

    protected $fillable = array('name', 'icon', 'description');

    public function articles()
    {
        return $this->hasMany('App\Article', 'category_id', 'id');
    }

}
