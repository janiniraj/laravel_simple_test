<?php namespace App;
/**
 * Class NameCount
 * 
 */
use Illuminate\Database\Eloquent\Model;

class NameCount extends Model
{
    /**
     * The database table used by the model.
     * 
     * @var String 
     */
    protected $table = 'name_counts';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'count'
    ];
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];
}
