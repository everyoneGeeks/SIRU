<?php

namespace App\Models;

use Arcanedev\Support\Providers\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

/**
 * @property int id
 * @property int admin_id
 * @property string title
 * @property string description
 * @property Admin admin
 *
 * @property Collection<Category> categories
 * @property boolean is_published
 */
class Article extends Model
{
    use HasTranslations,HasFactory;

    protected $fillable = ['admin_id', 'title', 'description'];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    /**
     * @return BelongsTo
     */
    public function admin(): BelongsTo
    {
      return $this->belongsTo(Admin::class,'admin_id');
    }

    /**
     * @return BelongsToMany
     */
    public function categories(): BelongsToMany
    {
      return $this->belongsToMany(Category::class);
    }


    /**
     * @return BelongsToMany
     */
    public function landmarks(): BelongsToMany
    {
        return $this->belongsToMany(Landmark::class);
    }


}
