<?php

namespace CarFaker\Provider;

use Faker\Provider\Base;
use CarFaker\CarData;

class Car extends Base
{
	const TYPE_MODEL = 1;
	const TYPE_VARIANT = 2;

	public function __construct(CarData $carData)
	{
		$this->carData = $carData;
	}

	/**
	* @example 'Toyota'
	*/
	public function carMake()
	{
		//return static::randomElement(array_values(array_keys(self::$carData)));
		return static::randomElement($this->carData->getCarMakes());
	}

	/**
	* set fullName to false to return car model name only.
	* @example fullName 'Toyota Vios'
	* @example model only 'Vios'
	*/
	public function carModel($fullName = true)
	{
		return $this->getCarName($fullName, self::TYPE_MODEL);
	}

	/**
	* set fullName to false to return car model variant name only. 
	* @example Fullname 'Toyota Vios 1.3 Base MT'
	* @example variant only '1.3 Base MT'
	*/
	public function carModelVariant($fullName = true)
	{
		return $this->getCarName($fullName, self::TYPE_VARIANT);
	}

	/**
	* @example 'Sedan'
	*/
	public function carBodyType()
	{
		// return static::randomElement(self::$carBodyType);
		return static::randomElement($this->carData->getCarBodyTypes());
	}

	/**
	* @example 'Diesel'
	*/
	public function carFuelType()
	{
		return static::randomElement($this->carData->getCarFuelTypes());
	}

	public function carTransmissionType()
	{
		return static::randomElement($this->carData->getCarTransmissionTypes());
	}

	protected function getCarName($fullName,$type)
	{
		$make = static::randomElement($this->carData->getCarMakes());
		$model = static::randomElement($this->carData->getCarModels($make));

		// var_dump("{$make} {$model}");exit;
		if($type == self::TYPE_MODEL){
			// return $fullName ? $make." ".$model : $model;
			return $fullName ? "{$make} {$model}" : $model;
		}
		else if($type == self::TYPE_VARIANT){
			//$modelArray = static::randomElement($this->carData->getCarModelVariants($make,$model));
			$variant = static::randomElement($this->carData->getCarModelVariants($make,$model));
			return $fullName ? "{$make} {$model} {$variant}" : $variant;
		}
	}
}

?>