<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model){
            $model->slug = sha1(('YmdHis') . str_random(30));
            $model->ip = request()->ip();
        });
    }

    protected $casts = [
        'status' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
