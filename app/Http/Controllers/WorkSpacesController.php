<?php

namespace App\Http\Controllers;

use App\Models\WorkSpacesModel;
use Database\Class\To_do_list\WorkSpaces;

class WorkSpacesController {

    private WorkSpacesModel $workSpacesModel;

	public function __construct() {
        $this->workSpacesModel = new WorkSpacesModel();
	}

	public function createWorkSpaces() {
        return $this->workSpacesModel->createWorkSpacesDB(
            WorkSpaces::formFields()
        );
	}

	public function readWorkSpaces() {
        return $this->workSpacesModel->readWorkSpacesDB();
	}

	public function updateWorkSpaces() {
        return $this->workSpacesModel->updateWorkSpacesDB(
            WorkSpaces::formFields()
        );
	}

	public function deleteWorkSpaces() {
        return $this->workSpacesModel->deleteWorkSpacesDB(
            WorkSpaces::formFields()
        );
	}

}