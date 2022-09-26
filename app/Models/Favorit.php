<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int user_id
 * @property int modelable_id
 * @property string modelable_type
 * @property string type
 * @property User User
 */
class Favorit extends Model
{
    use HasFactory;

    protected $fillable=['user_id','modelable_id','modelable_type','type'];
    /**
     * @return HasMany
     */
    public function users():HasMany
    {

      return $this->hasMany(User::class);
    }
}
