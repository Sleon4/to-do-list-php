<?php

namespace App\Http\Controllers;

use App\Models\TasksModel;
use Database\Class\To_do_list\Tasks;

class TasksController {

    private TasksModel $tasksModel;

	public function __construct() {
        $this->tasksModel = new TasksModel();
	}

	public function createTasks() {
        return $this->tasksModel->createTasksDB(
            Tasks::formFields()
        );
	}

	public function readTasks() {
        return $this->tasksModel->readTasksDB();
	}

	public function updateTasks() {
        return $this->tasksModel->updateTasksDB(
            Tasks::formFields()
        );
	}

	public function deleteTasks() {
        return $this->tasksModel->deleteTasksDB(
            Tasks::formFields()
        );
	}

}