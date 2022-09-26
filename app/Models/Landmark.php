<?php

namespace App\Models;

use Arcanedev\Support\Providers\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int id
 * @property json title
 * @property string slug
 * @property string type
 * @property int admin_id
 * @property double langitude
 * @property double latitude
 * @property double area
 * @property date register_year
 * @property date discovery_date
 * @property boolean is_published
 * @property int published_by_id
 * @property dateTime published_at
 * @property int viwes
 * @property LandmarkLandmark LandmarkLandmark
 * @property CategoryLandmark CategoryLandmark
 * @property ArticleLandmark ArticleLandmark
 */


class Landmark extends Model
{
    use HasTranslations,HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'type',
        'admin_id',
        'langitude',
        'latitude',
        'area',
        'register_year',
        'discovery_date',
        'published_by_id',
        'published_at',
        'viwes'

    ];

    protected $cast=['is_published'=>'boolean'];
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
     * @return HasMany
     */
    public function categories():HasMany
    {

      return $this->hasMany(Category::class);
    }

    /**
     *
     * @return HasMany
     */
    public function articles():HasMany
    {

      return $this->hasMany(Articel::class);
    }



}
