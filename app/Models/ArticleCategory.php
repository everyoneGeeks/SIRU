<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int article_id
 * @property int category_id
 * @property Article Article
 * @property Category Category
 */
class ArticleCategory extends Model
{
    use HasFactory;

    protected $fillable=['article_id','category_id'];


    /**
     *
     * @return BelongsTo
     */
    public function article():BelongsTo
    {

      return $this->belongsTo(Article::class,'article_id');
    }

    /**
     *
     * @return BelongsTo
     */
    public function category():BelongsTo
    {

      return $this->belongsTo(Category::class,'category_id');
    }

}
