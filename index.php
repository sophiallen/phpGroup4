<?php

require 'includes/Conversion.php';
require 'includes/Celsius.php';
require 'includes/Fahrenheit.php';
require 'includes/Kelvin.php';
require 'includes/formhandle.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="wrapper">
<h1>Temperature Converter</h1>
  
<form id="theForm" method="post" action="index.php">
    <input type="text" name="temperatureValue">
    <select name="fromUnit">
        <option value="celsius">&#x2103;elsius</option>
        <option value="fahrenheit">&#8457;ahrenheit</option>
        <option value="kelvin">&#8490;elvin</option>
    </select>
    <span>To</span>
    <select name="toUnit">
        <option value="celsius">&#x2103;elsius</option>
        <option value="fahrenheit">&#8457;ahrenheit</option>
        <option value="kelvin">&#8490;elvin</option>
    </select>
    <input type="submit" value="Convert">
  <br/> <br/>
    <h3><i><?php echo $conversionValue_formatted ?></i></h3>
    <h4 class="error"><?php echo htmlspecialchars($error_message); ?></h4>


</form>
</div>
</body>

</html>


