<?php

namespace App\Models;

use Arcanedev\Support\Providers\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int id
 * @property json title
 * @property json descripton
 * @property string icon
 * @property int category_id
 * @property boolean is_active
 * @property Admin Admin
 * @property Article Article
 * @property Landmark Landmark
 */

class Category extends Model
{
    use HasTranslations,HasFactory;

    protected $fillable=['title','description','icon','catrgory_id'];

    protected $cast=['is_active'=>'boolean'];
    /**
     *
     * @return HasOne
     */
  public function admin():HasOne
  {

    return $this->hasOne(Admin::class);
  }

/**
 *
 * @return BelongsToMany
 */
    public function articles():BelongsToMany
    {

      return $this->belongsToMany(Article::class);
    }

/**
 *
 * @return BelongsToMany
 */
    public function landmarks():BelongsToMany
    {
      return $this->belongsToMany(Landmark::class);
    }
}
