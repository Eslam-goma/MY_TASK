<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'title',
        'description',
		'date'
		,
        // Add other fields that can be mass-assigned here
    ];
    use HasFactory;
    public function venue()
{
    return $this->belongsTo(Venue::class);
}

public function artist()
{
    return $this->belongsTo(Artist::class);
}


	/**
	 * @return mixed
	 */
	public function getFillable() {
		return $this->fillable;
	}
	
	/**
	 * @param mixed $fillable 
	 * @return self
	 */
	public function setFillable($fillable): self {
		$this->fillable = $fillable;
		return $this;
	}
}
