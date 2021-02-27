<?php

final class Item
{
	private int $id;
	private string $name;
	private int $status;
	private bool $changed;

	public function __construct(int $id)
	{
		$this->id = $id;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param int $status
	 */
	public function setStatus(int $status): void
	{
		$this->status = $status;
	}

	/**
	 * @return int
	 */
	public function getStatus(): int
	{
		return $this->status;
	}

	/**
	 * @param array $object
	 */
	private function __init(array $object)
	{
		$this->name = $object['name'];
		$this->status = $object['status'];
	}

	/**
	 * получение свойств объекта, используя magic methods __get
	 * @param $property
	 * @return mixed
	 */
	public function __get($property)
	{
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}

	/**
	 * проверкой вводимого значения на заполненность и тип значения
	 * запрет на запись id
	 * @param $name
	 * @param $value
	 */
	public function __set($name, $value)
	{
		if ($name === 'id') {
			echo 'запись id запрещена!';
			return;
		}
		//проверка на заполненность и тип вводимого значения
		if (isset($name) && isset($value) && gettype($value)) {
			$newName = $name;
			$this->$newName = $value;
		}
	}

	/**
	 * сохранение name и status при запросе
	 * @param string $name
	 * @param int $status
	 */
	public function save(string $name, int $status)
	{
		$this->name = $name;
		$this->status = $status;
	}
}

$item = new Item(2);
$item->save('Vlad', 2);
var_dump($item);