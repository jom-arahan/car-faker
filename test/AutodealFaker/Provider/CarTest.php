<?php 

namespace CarFaker\Test\Provider;

use \PHPUnit_Framework_TestCase;
use CarFaker\Provider\Car;

class CarTest extends \PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		// $faker = new Generator();
		// $faker->addProvider(new Car($faker));
		// $this->faker = $faker;
	}

	public function testCarMake()
	{
		//$carMake = $this->faker->carMake();
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array('car make 1', 'car make 2', 'car make 3');
		$carDataMock->method('getCarMakes')
			->will($this->returnValue($testData));

		$sut = new Car($carDataMock);
		$carMake = $sut->carMake();
		
		$this->assertTrue(in_array($carMake, $testData));
	}
	/**
	* @group test
	*/
	public function testCarModel()
	{
		// $carModel = $this->faker->carModel();
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array(
			'make 1' => array('model 1'),
			'make 2' => array('model 2'),
			'make 3' => array('model 3')
		);
		
		$carDataMock->method('getCarMakes')
			->will($this->returnValue(array_keys($testData)));

		$carDataMock->method('getCarModels')
			->will($this->returnCallback(function($make) use ($testData){
				return $testData[$make];
			}));

		$sut = new Car($carDataMock);
		$carModel = $sut->carModel(true);
	}

	public function testCarModelVariant()
	{
		// $carModelVariant = $this->faker->carModelVariant();
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array(
			'make 1' => array(
				'model 1' => array('variant 1')
				), 
			'make 2' => array(
				'model 2' => array('variant 2')
				), 
			'make 3' => array(
				'model 3' => array('variant 3')
				)
			);

		$carDataMock->method('getCarMakes')
			->will($this->returnValue(array_keys($testData)));

		$carDataMock->method('getCarModels')
			->will($this->returnCallback(function($make) use ($testData){
				return array_keys($testData[$make]);
			}));

		$carDataMock->expects($this->once())
			->method('getCarModelVariants')
			->will($this->returnCallback(function($make, $model) use ($testData){
				return $testData[$make][$model];
			}));

		$sut = new Car($carDataMock);
		$carModelVariant = $sut->carModelVariant(false);

		$variantFound = false;
		foreach ($testData as $make => $models) {
			foreach ($models as $model => $variants) {
				$variantFound = in_array($carModelVariant, $variants);
				if ($variantFound) break;
			}
			if ($variantFound) break;
		}

		$this->assertTrue($variantFound);
	}

	public function testCarBodyType()
	{
		// $carBodyType = $this->faker->carBodyType();
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array('car body 1', 'car body 2', 'car body 3');
		$carDataMock->method('getCarBodyTypes')
			->will($this->returnValue($testData));

		$sut = new Car($carDataMock);
		$carBodyType = $sut->carBodyType();
		
		$this->assertTrue(in_array($carBodyType, $testData));
	}

	public function testCarFuelType()
	{
		// $carFuelType = $this->faker->carFuelType();
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array('car fuel 1', 'car fuel 2', 'car fuel 3');
		$carDataMock->method('getCarFuelTypes')
			->will($this->returnValue($testData));

		$sut = new Car($carDataMock);
		$carFuelType = $sut->carFuelType();
		
		$this->assertTrue(in_array($carFuelType, $testData));
	}

	public function testCarTransmissionType()
	{
		// $carTransmissionType = $this->faker->carTransmissionType();
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array('car transmission 1', 'car transmission 2', 'car transmission 3');
		$carDataMock->method('getCarTransmissionTypes')
			->will($this->returnValue($testData));

		$sut = new Car($carDataMock);
		$carTransmissionType = $sut->carTransmissionType();
		
		$this->assertTrue(in_array($carTransmissionType, $testData));
	}
}

?>