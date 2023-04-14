<?php

namespace Database\Class\To_do_list;

class Categories implements \JsonSerializable {

	private ?int $idcategories = null;
	private ?int $idwork_spaces = null;
	private ?string $categories_name = null;
	private ?string $categories_description = null;
	private ?string $categories_color = null;
	private ?string $categories_add_favorites = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Categories {
		$categories = new Categories();

		$categories->setIdcategories(
			isset(request->idcategories) ? request->idcategories : null
		);

		$categories->setIdworkSpaces(
			isset(request->idwork_spaces) ? request->idwork_spaces : null
		);

		$categories->setCategoriesName(
			isset(request->categories_name) ? request->categories_name : null
		);

		$categories->setCategoriesDescription(
			isset(request->categories_description) ? request->categories_description : null
		);

		$categories->setCategoriesColor(
			isset(request->categories_color) ? request->categories_color : null
		);

		$categories->setCategoriesAddFavorites(
			isset(request->categories_add_favorites) ? request->categories_add_favorites : null
		);

		return $categories;
	}

	public function getIdcategories(): ?int {
		return $this->idcategories;
	}

	public function setIdcategories(?int $idcategories): Categories {
		$this->idcategories = $idcategories;
		return $this;
	}

	public function getIdworkSpaces(): ?int {
		return $this->idwork_spaces;
	}

	public function setIdworkSpaces(?int $idwork_spaces): Categories {
		$this->idwork_spaces = $idwork_spaces;
		return $this;
	}

	public function getCategoriesName(): ?string {
		return $this->categories_name;
	}

	public function setCategoriesName(?string $categories_name): Categories {
		$this->categories_name = $categories_name;
		return $this;
	}

	public function getCategoriesDescription(): ?string {
		return $this->categories_description;
	}

	public function setCategoriesDescription(?string $categories_description): Categories {
		$this->categories_description = $categories_description;
		return $this;
	}

	public function getCategoriesColor(): ?string {
		return $this->categories_color;
	}

	public function setCategoriesColor(?string $categories_color): Categories {
		$this->categories_color = $categories_color;
		return $this;
	}

	public function getCategoriesAddFavorites(): ?string {
		return $this->categories_add_favorites;
	}

	public function setCategoriesAddFavorites(?string $categories_add_favorites): Categories {
		$this->categories_add_favorites = $categories_add_favorites;
		return $this;
	}

}