<?php

namespace App\Models;

use Database\Class\To_do_list\WorkSpaces;
use LionSQL\Drivers\MySQL as DB;

class WorkSpacesModel {

	public function __construct() {
		
	}

	public function createWorkSpacesDB(WorkSpaces $workSpaces) {
        return DB::call('create_work_spaces', [
            $workSpaces->getWorkSpacesName(),
            $workSpaces->getWorkSpacesDescription()
        ])->execute();
	}

	public function readWorkSpacesDB() {
        return DB::table('work_spaces')
            ->select()
            ->getAll();
	}

	public function updateWorkSpacesDB(WorkSpaces $workSpaces) {
        return DB::call('update_work_spaces', [
            $workSpaces->getWorkSpacesName(),
            $workSpaces->getWorkSpacesDescription(),
            $workSpaces->getIdworkSpaces()
        ])->execute();
	}

	public function deleteWorkSpacesDB(WorkSpaces $workSpaces) {
        return DB::call('delete_work_spaces', [
            $workSpaces->getIdworkSpaces()
        ])->execute();
	}

}