<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string email
 * @property string code
 */
class AdminPasswordReset extends Model
{
    use HasFactory;

    /**
     * primary key.
     *
     * @var string
     */
    protected $primaryKey = 'email';

    /**
     * timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * casts
     *
     * @var array
     */
    protected $casts = [
        'email' => 'string'
    ];

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'code',
        'created_at',
    ];
}
