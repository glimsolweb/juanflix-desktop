<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    private $CategoryRepository;
    public function __construct(CategoryRepository $categoryRepository) {
        $this->CategoryRepository = $categoryRepository;
    }

    public function getAllCategories()
    {
        return $this->CategoryRepository->showAllCategories();
    }
}
