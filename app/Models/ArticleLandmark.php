<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int article_id
 * @property int landmark_id
 * @property Article Article
 */

class ArticleLandmark extends Model
{
    use HasFactory;

    protected $fillable=['article_id','landmark_id'];

    /**
     *
     * @return BelongsTo
     */
    public function article():BelongsTo
    {
    return $this->belongsTo(Article::class);
    }
}
