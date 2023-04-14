<?php

namespace App\Http\Controllers;

use App\Models\CategoriesModel;
use Database\Class\To_do_list\Categories;

class CategoriesController {

    private CategoriesModel $categoriesModel;

	public function __construct() {
        $this->categoriesModel = new CategoriesModel();
	}

	public function createCategories() {
        return $this->categoriesModel->createCategoriesDB(
            Categories::formFields()
        );
	}

	public function readCategories() {
        return $this->categoriesModel->readCategoriesDB();
	}

	public function updateCategories() {
        return $this->categoriesModel->updateCategoriesDB(
            Categories::formFields()
        );
	}

	public function deleteCategories() {
        return $this->categoriesModel->deleteCategoriesDB(
            Categories::formFields()
        );
	}

}