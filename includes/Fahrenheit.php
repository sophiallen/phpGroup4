<?php

/**
 * Created by PhpStorm.
 * User: Ekogoca
 * Date: 01/11/2017
 * Time: 12:53 AM
 */
class Fahrenheit extends Conversion
{
    /* this returns the same value the user entered*/
    function ToFahrenheit()
    {
        return $this->_temperatureValue;
    }
    /*converts fahernheit to kelvin
    conversion formula T(k) = (T(f) + 459.67) * .555
    K = 5/9 (° F - 32) + 273
    return string $result */
    function ToKelvin()
    {
        $kelvin = ($this->_temperatureValue + 459.67) * 5/9;
        $result = number_format($kelvin, 2);
        return $result;
    }
    /* this converts fahrenheit to celcius
    conversion formuls T(C)= (T(f)-32) /1.8
    returns string $result*/
    function ToCelsius()
    {
        $celsius = ($this->_temperatureValue - 32) /1.8;
        $result = number_format($celsius, 2);
        return $result;
    }
}
