<?php
class CarWrite {

	public function write( Carro $car )
	{
		$output  = $car->getMarca()	. "<br>";
		$output .= $car->getModelo() . "<br>";
		$output .= $car->getCor() 	. "<br>";
		$output .= $car->getAno() 	. "<br>";

		echo $output;
	}
}
