<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
 protected $fillable = [
    	"course_name",
    	"course_provider_name",
    	"thumbnail_url",
    	"start_date",
    	"end_date"
    ];
}
