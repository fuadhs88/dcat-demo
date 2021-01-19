<?php

namespace App\Admin\Repositories;

use Dcat\Admin\Grid;
use Dcat\Admin\Repositories\EloquentRepository;
use Faker\Factory;
use Illuminate\Pagination\LengthAwarePaginator;

class Top250 extends ComingSoon
{
    protected $api = 'https://frodo.douban.com/api/v2/subject_collection/movie_showing/items?start=0&count=0';
}
