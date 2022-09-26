<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @property int landmark_id
 * @property int landmark_to_id
 */
class LandmarkLandmark extends Model
{
    use HasFactory;

    protected $fillable=['landmark_id','landmark_to_id'];



}
