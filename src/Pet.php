<?php
namespace Src;

class Pet {
	public function __construct(
		public int $id,
		public string $type,
	) {}

	public function getId(): int {
		return $this->id;
	}
}