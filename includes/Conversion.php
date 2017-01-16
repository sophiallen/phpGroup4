<?php

/**
 * Created by PhpStorm.
 * User: Gordana Minovska
 * Date: 01/10/2017
 * Time: 6:56 PM
 *
 * One abstract parent class Conversion and 3 different child classes: Celsius, Kelvin, and Fahrenheit
 */
abstract class Conversion
{

    //Stores the numerical value - float from the form textbox, after validation
    protected $_temperatureValue;

    //strings storing the value from the unit dropdowns



    //calculated conversion
    protected $_converted;

    //constructor

     public function __construct($temperature)
    {
        $this->_temperatureValue = $temperature;

    }

    //methods
    /**
     * @param string $toUnit
     * @return string
     */
    public function Convert($toUnit){

        if ($toUnit == 'fahrenheit') {
            $this->_converted = $this->toFahrenheit();

        }
        if ($toUnit == 'kelvin') {
            $this->_converted = $this->toKelvin();
        }
        if ($toUnit == 'celsius') {
            $this->_converted = $this->toCelsius();
        }

        return $this->_converted;
    }

    abstract public function toFahrenheit();
    abstract public function toKelvin();
    abstract public function toCelsius(); 
}
