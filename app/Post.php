<?php

namespace App;

class Post extends Model
{
    
	public function comments() {

		return $this->hasMany(Comment::class);
		
	}

	public function user() {

    	return $this->belongsTo(User::class);
    	
    }

	public function addComment($body) {

		
		$this->comments()->create(compact('body'));

		/* druga możliwość
		Comment::create([
            'body' => $body,
            'post_id' => $this->id
            ]);
         */
		
	}

     /*
	tutaj wpiszemy tylko to co chcemy dodac do bazy
	protected $fillable = ['title','body'];

    tutaj wpiszemy czego nie chcemy dodawac do bazy
   	    protected $guarded = ['title']; 
   
    albo ze nic nie pomijamy i dodajemy wszystko
    	protected $guarded = []; 
    */


}
