<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'name', 'detail', 'category_id'

    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
