<?php

namespace App\Models;

use Database\Class\To_do_list\Categories;
use LionSQL\Drivers\MySQL as DB;

class CategoriesModel {

	public function __construct() {
		
	}

	public function createCategoriesDB(Categories $categories) {
        return DB::call('create_categories', [
            $categories->getIdworkSpaces(),
            $categories->getCategoriesName(),
            $categories->getCategoriesDescription(),
            $categories->getCategoriesColor(),
            $categories->getCategoriesAddFavorites()
        ])->execute();
	}

	public function readCategoriesDB() {
        return DB::table('categories')
            ->select()
            ->getAll();
	}

	public function updateCategoriesDB(Categories $categories) {
        return DB::call('update_categories', [
            $categories->getCategoriesName(),
            $categories->getCategoriesDescription(),
            $categories->getCategoriesColor(),
            $categories->getCategoriesAddFavorites(),
            $categories->getIdcategories()
        ])->execute();
	}

	public function deleteCategoriesDB(Categories $categories) {
        return DB::call('delete_categories', [
            $categories->getIdcategories()
        ])->execute();
	}

}