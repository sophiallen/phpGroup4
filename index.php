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
require 'Fahrenheit.php';
require 'Kelvin.php';
//@todo validate user input

//store user input in variables
if($_POST){
//    echo var_dump($_POST);
    $temperature = $_POST['temperatureValue'];
    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
}else {
    $temperature = 0;
    $fromUnit='';
    $toUnit = '';
    $conversionValue_formatted = '';
}

//create the appropriate object
switch ($fromUnit){
    case 'celsius':
        $fromCelsius = new Celsius($temperature);
        $conversionValue = $fromCelsius->Convert($toUnit);
//        echo $conversionValue;
        break;
    case 'fahrenheit':
        $fromFahrenheit = new Fahrenheit($temperature);
        $conversionValue = $fromFahrenheit->Convert($toUnit);
//        echo $conversionValue;
        break;
    case 'kelvin':
        $fromKelvin = new Kelvin ($temperature);
        $conversionValue = $fromKelvin->Convert($toUnit);
//        echo $conversionValue;
        break;
}

//display the result to the user
if (isset($conversionValue))
$conversionValue_formatted = $temperature . ' ' . $fromUnit . ' = ' . $conversionValue .' '. $toUnit;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="wrapper">
<h1>Temperature Converter</h1>
    <div id="theForm">
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
    <input type="submit" value="Convert">
    </div>
    <p><?php echo $conversionValue_formatted ?></p>
    <p>A placeholder for error message</p>


</form>
</div>
</body>

</html>


