<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkMedicine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicine_id',
        'user_id',
    ];

    protected $table = 'mark_medicine';

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function getMedicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id');
    }

    public function scopeGetMarkByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}
