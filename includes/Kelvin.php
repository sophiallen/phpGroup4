<?php

/**
 * Created by PhpStorm.
 * User: Ekogoca
 * Date: 01/11/2017
 * Time: 12:38 AM
 */
/* converts Kelvin to Fahrenheit
conversion formula T(f) = T(K) *1.8 - 459.67
@return string $result*/
class Kelvin extends Conversion
{

    public function toFahrenheit()
    {
        $fahrenheit = $this->_temperatureValue * 1.8 - 459.67;
        $result = number_format($fahrenheit, 2);
        return $result;
    }
    /* this returns the same value the user entered*/

    public function toKelvin()
    {
        return $this->_temperatureValue;
    }
    /* converts Kelvin to celsius
    conversion formula T(c)= T(k) - 273.15
    return string $result*/

    public function toCelsius()
    {
        $celsius = $this->_temperatureValue - 273.15;
        $result = number_format($celsius, 2);
        return $result;
    }
}

