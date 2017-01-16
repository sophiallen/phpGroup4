<?php

//declare variables and initialize them
$conversionValue = 0;
$conversionValue_formatted = '';
$error_message ='';

//store user input in variables
if ($_POST) 
{

    //validate input. If use enters invalid input, default value of 0 is used and error message displayed. 
    $temperature = filter_input(INPUT_POST, 'temperatureValue', FILTER_VALIDATE_FLOAT);

    if ($temperature === FALSE || !is_numeric($temperature)) 
    {

        $conversionValue_formatted = '';
        $error_message = "Please make sure the temperature you entered is a valid number.";
        $temperature = 0;
    }

    $fromUnit = $_POST['fromUnit'];
    $toUnit = $_POST['toUnit'];
}
else 
{
    $temperature = 0;
    $fromUnit='';
    $toUnit = '';
    $conversionValue_formatted = '';
}

//create the appropriate object

switch ($fromUnit) 
{
    case 'celsius':
        $fromCelsius = new Celsius($temperature);
        $conversionValue = $fromCelsius->Convert($toUnit);
        break;
    case 'fahrenheit':
        $fromFahrenheit = new Fahrenheit($temperature);
        $conversionValue = $fromFahrenheit->Convert($toUnit);
        break;
    case 'kelvin':
        $fromKelvin = new Kelvin ($temperature);
        $conversionValue = $fromKelvin->Convert($toUnit);
        break;
}

//display the result to the user if validation filter passes and returns a number(double).
//from the PHP manual: for historical reasons "double" is returned in case of a float, and not simply "float"
if (gettype($temperature) == "double")
$conversionValue_formatted = $temperature . ' ' . $fromUnit . ' = ' . $conversionValue .' '. $toUnit;
