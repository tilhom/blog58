<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

   	public function category()
   	{
   		return $this->belongsTo('App\Category');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag');
	}
	   
	public static function archives()
	{
		return static::selectRaw('year(created_at) year, month(created_at) month, count(*) published ')
		->groupBy('year','month')
		->orderByRaw('year, month desc')
		->get()
		->toArray();    
	}

	public function scopeFilter($query, $filter)
    {
        if (isset($filter['month'])) {
            if ($month = $filter['month']) {
                $query->whereMonth('created_at', $month);
            }
            if ($year = $filter['year']) {
                $query->whereYear('created_at', $year);
            }
        }
	}
	public function comments()
    {
    	return $this->hasMany('App\Comment')->latest();
	}
	
	public function getCommentsCount()
	{
		return $this->comments()->count();
	}

}