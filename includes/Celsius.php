<?php

/**
 * Created by PhpStorm.
 * User: Ekogoca
 * Date: 01/11/2017
 * Time: 12:42 AM
 */
class Celsius extends Conversion
{
    /**
     * Converts temperature from Celsius to Fahrenheit
     * Conversion Formula: T(°F) = T(°C) × 1.8 + 32
     * @return string(formatted to 2 decimals) $result
     */

    public function toFahrenheit()
    {

        $fahrenheit = $this->_temperatureValue * 1.8 + 32;
        $result = number_format($fahrenheit, 2);
        return $result;
    }

    /**
     * Converts temperature from Celsius to Kelvin
     * Conversion Formula: T(K) = T(°C) + 273.15
     * @return string $result
     */

    public function toKelvin()
    {

        $kelvin = $this->_temperatureValue + 273.15;
        $result = number_format($kelvin, 2);
        return $result;
    }

    /**
     * Returns the same value that the user entered
     * @return float _celsius
     */

    public function toCelsius()
    {
        return $this->_temperatureValue;
    }

}
