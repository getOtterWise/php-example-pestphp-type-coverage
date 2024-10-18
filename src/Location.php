<?php
namespace Src;

class Location {
	public function __construct(
		public int $id,
		public $name,
	) {}

	public function getId(): int {
		return $this->id;
	}

	public function getName() {
		return $this->name;
	}
}