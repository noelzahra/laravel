<?php

namespace App\Filters\Course;

use App\Filters\Course\AccessFilter;
use App\Filters\FiltersAbstract;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class
    ];
}