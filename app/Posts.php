<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Posts
 * @package App
 *
 * @property int $id
 * @property string $title
 * @property int $priority
 */
class Posts extends Model
{

    public static function postsByAuthor($id)
    {
        return static::where('users_id', $id)->get();
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
