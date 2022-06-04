<?php

class Categories
{
	private $categories;

	/**
	 * @return array
	 */
	public function getCategories(): array
	{
		return $this->categories;
	}

	/**
	 * @param array $categories
	 */
	public function setCategories(array $categories): void
	{
		$this->categories = $categories;
	}

	public function __construct($categories)
	{
		$this->categories = $this->categories;
	}


}