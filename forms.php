<?php 

error_reporting(-1);
ini_set('display_errors', 'on');
var_dump($_POST);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Forms</title>
</head>
<body>
<form action="forms.php" method="post">

    
    <label for="number1">First number</label>
    <input type="number1" id="number1" name="number1">
    
    <label for="function"></label>
    <select id="function" name="function">
    
    	<option value="+">add</option>
        <option value="-">subtract</option>
        <option value="*">mutliply</option>
        <option value="/">devide</option>
        <option value="$"></option>
    
    <label for="number2">Second number</label>
    <input type="number2" id="number2" name="number2">
	</select>
    
    <button type="submit">Calculate!</button>
    
</form>


	<?php if ($_POST['function'] == '+')  : ?>
    	<p><strong><?php echo number_format($_POST['number1']) + ($_POST['number2']) ?> $</strong></p>
    <?php endif; ?>
    
    <?php if ($_POST['function'] == '-')  : ?>
    	<p><strong><?php echo number_format($_POST['number1']) - ($_POST['number2']) ?> $</strong></p>
    <?php endif; ?>
    
    <?php if ($_POST['function'] == '*')  : ?>
    	<p><strong><?php echo number_format($_POST['number1']) * ($_POST['number2']) ?> $</strong></p>
    <?php endif; ?>
    
    <?php if ($_POST['function'] == '/')  : ?>
    	<p><strong><?php echo number_format($_POST['number1']) / ($_POST['number2']) ?> $</strong></p>
    <?php endif; ?>
    
        
    
</body>
</html>


