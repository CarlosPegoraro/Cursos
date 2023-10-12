<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\CommonMark\Delimiter\Processor\EmphasisDelimiterProcessor;

class Season extends Model
{
    use HasFactory;
    protected $fillable = ['number'];

    public function series() {
      return $this->belongsTo(Series::class);
    }
    public function episodes() {
      return $this->hasMany(Episode::class);
    }
}
