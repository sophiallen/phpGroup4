<?php
/**
 * This is my testing document, to make sure the functions work.
 * I created the objects to calculate the conversions
 * Created by PhpStorm.
 * User: Ekogoca
 * Date: 01/10/2017
 * Time: 11:14 PM
 */
require 'Conversion.php';
require 'Celsius.php';
//validate user input

//store user input in variables
if($_POST){
    echo var_dump($_POST);
    $temperature = $_POST['temperatureValue'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];

}

//create the appropriate object
switch ($fromUnit){
    case 'celsius':
        $fromCelsius = new Celsius($temperature);
        $conversionValue = $fromCelsius->Convert($toUnit);
        echo $conversionValue;
        break;
    //@todo implement the rest of the cases
}

//display the result to the user

?>

<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
<h1>Temperature Converter</h1>
<form method="post" action="index.php">
    <input type="text" name="temperatureValue">
    <select name="fromUnit">
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
    </select>
    <span>To</span>
    <select name="toUnit">
        <option value="celsius">Celsius</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
    </select>
    <input type="text" name="conversionValue" value="" disabled>
    <input type="submit" value="Convert">
    <p>A placeholder for error message</p>


</form>
</body>

</html>

