<?php

namespace App\Repositories;

use App\Models\Categories;

class CategoryRepository
{
    public function showAllCategories()
    {
        return Categories::get();
    }
}
