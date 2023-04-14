<?php

namespace App\Models;

use Database\Class\To_do_list\Tasks;
use LionSQL\Drivers\MySQL as DB;

class TasksModel {

	public function __construct() {
		
	}

	public function createTasksDB(Tasks $tasks) {
        return DB::call('create_tasks', [
            $tasks->getIdcategories(),
            $tasks->getTasksName(),
            $tasks->getTasksDescription(),
            $tasks->getTasksCreationDate(),
            $tasks->getTasksFinishDate()
        ])->execute();
	}

	public function readTasksDB() {
        return DB::table('tasks')
            ->select()
            ->getAll();
	}

	public function updateTasksDB(Tasks $tasks) {
        return DB::call('update_tasks', [
            $tasks->getTasksName(),
            $tasks->getTasksDescription(),
            $tasks->getTasksCreationDate(),
            $tasks->getTasksFinishDate(),
            $tasks->getIdtasks()
        ])->execute();
	}

	public function deleteTasksDB(Tasks $tasks) {
        return DB::call('delete_tasks', [
            $tasks->getIdtasks()
        ])->execute();
	}

}