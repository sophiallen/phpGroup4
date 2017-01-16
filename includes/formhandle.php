<?php

//store user input in variables
if ($_POST) {

    //validate input. If use enters invalid input, default value of 0 is used and error message displayed. 
    $temperature = filter_input(INPUT_POST, 'temperatureValue');

    if ($temperature === FALSE || !is_numeric($temperature)) {
        $error_message = "Please make sure the temperature you entered is a valid number.";
        $temperature = 0;
    }

    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
}else {
    $temperature = 0;
    $fromUnit='';
    $toUnit = '';
    $conversionValue_formatted = '';
}

//create the appropriate object
switch ($fromUnit) {
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


