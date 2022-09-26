<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int user_id
 * @property int category_id
 * @property User User
 * @property Category Category
 */
class Follow extends Model
{
    use HasFactory;

    protected $fillable=['user_id','category_id'];
/**
 *
 * @return HasMany
 */
    public function User():HasMany
    {

      return $this->hasMany(User::class);
    }


/**
 *
 * @return HasMany
 */
    public function Categories():HasMany
    {

      return $this->hasMany(Category::class);
    }
}
