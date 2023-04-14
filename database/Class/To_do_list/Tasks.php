<?php

namespace Database\Class\To_do_list;

class Tasks implements \JsonSerializable {

	private ?int $idtasks = null;
	private ?string $tasks_name = null;
	private ?string $tasks_description = null;
	private ?string $tasks_creation_date = null;
	private ?string $tasks_finish_date = null;

	public function __construct() {

	}

	public function jsonSerialize(): mixed {
		return get_object_vars($this);
	}

	public static function formFields(): Tasks {
		$tasks = new Tasks();

		$tasks->setIdtasks(
			isset(request->idtasks) ? request->idtasks : null
		);

		$tasks->setTasksName(
			isset(request->tasks_name) ? request->tasks_name : null
		);

		$tasks->setTasksDescription(
			isset(request->tasks_description) ? request->tasks_description : null
		);

		$tasks->setTasksCreationDate(
			isset(request->tasks_creation_date) ? request->tasks_creation_date : null
		);

		$tasks->setTasksFinishDate(
			isset(request->tasks_finish_date) ? request->tasks_finish_date : null
		);

		return $tasks;
	}

	public function getIdtasks(): ?int {
		return $this->idtasks;
	}

	public function setIdtasks(?int $idtasks): Tasks {
		$this->idtasks = $idtasks;
		return $this;
	}

	public function getTasksName(): ?string {
		return $this->tasks_name;
	}

	public function setTasksName(?string $tasks_name): Tasks {
		$this->tasks_name = $tasks_name;
		return $this;
	}

	public function getTasksDescription(): ?string {
		return $this->tasks_description;
	}

	public function setTasksDescription(?string $tasks_description): Tasks {
		$this->tasks_description = $tasks_description;
		return $this;
	}

	public function getTasksCreationDate(): ?string {
		return $this->tasks_creation_date;
	}

	public function setTasksCreationDate(?string $tasks_creation_date): Tasks {
		$this->tasks_creation_date = $tasks_creation_date;
		return $this;
	}

	public function getTasksFinishDate(): ?string {
		return $this->tasks_finish_date;
	}

	public function setTasksFinishDate(?string $tasks_finish_date): Tasks {
		$this->tasks_finish_date = $tasks_finish_date;
		return $this;
	}

}