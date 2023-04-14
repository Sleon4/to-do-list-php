<?php

namespace Database\Class\To_do_list;

class WorkSpaces implements \JsonSerializable {

	private ?int $idwork_spaces = null;
	private ?string $work_spaces_name = null;
	private ?string $work_spaces_description = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): WorkSpaces {
		$workspaces = new WorkSpaces();

		$workspaces->setIdworkSpaces(
			isset(request->idwork_spaces) ? request->idwork_spaces : null
		);

		$workspaces->setWorkSpacesName(
			isset(request->work_spaces_name) ? request->work_spaces_name : null
		);

		$workspaces->setWorkSpacesDescription(
			isset(request->work_spaces_description) ? request->work_spaces_description : null
		);

		return $workspaces;
	}

	public function getIdworkSpaces(): ?int {
		return $this->idwork_spaces;
	}

	public function setIdworkSpaces(?int $idwork_spaces): WorkSpaces {
		$this->idwork_spaces = $idwork_spaces;
		return $this;
	}

	public function getWorkSpacesName(): ?string {
		return $this->work_spaces_name;
	}

	public function setWorkSpacesName(?string $work_spaces_name): WorkSpaces {
		$this->work_spaces_name = $work_spaces_name;
		return $this;
	}

	public function getWorkSpacesDescription(): ?string {
		return $this->work_spaces_description;
	}

	public function setWorkSpacesDescription(?string $work_spaces_description): WorkSpaces {
		$this->work_spaces_description = $work_spaces_description;
		return $this;
	}

}