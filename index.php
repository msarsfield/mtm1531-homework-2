<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Money Calculator</title>
<link href="css/general.css" rel="stylesheet">
</head>
<body>

<h1>Money Calculator</h1>

	<form action="index.php" method="post">
    	<div>
        	<label for="number1">Enter Number</label>
 			<input id="number1" name="number1">
        </div>
        
        <div>
			<label for="function">Choose Function</label>
            <select id="function" name="function">
                  <option value="add">+</option>
                  <option value="subtract">-</option>
                  <option value="multiply">*</option>
                  <option value="divide">/</option>
           	</select>        
       	</div>
        
        <div>
        	<label for="number2">Enter Number</label>
 			<input id="number2" name="number2">
        </div>
    	
		<button type='submit'>Submit</button>

	</form>
    <?php $total = ''; ?>
    
	<?php if(!empty($_POST['number1']) && !empty($_POST['number2'])):?>
         
   		<?php if ($_POST['function'] == 'add'): ?>
   			<?php $total = ($_POST['number1']) + ($_POST['number2'])?>

   		<?php elseif ($_POST['function'] == 'subtract'): ?>
   			<?php $total = ($_POST['number1']) - ($_POST['number2'])?>
        
   		<?php elseif ($_POST['function'] == 'multiply'): ?>
   			<?php $total = ($_POST['number1']) * ($_POST['number2'])?>
        
   		<?php elseif ($_POST['function'] == 'divide'): ?>
   			<?php $total = ($_POST['number1']) / ($_POST['number2'])?>
      	<?php endif;?>                        
    
    <?php endif;?>
    
    <?php $grandTotal = $total * 1.13 ?>
    
    
    <p>Total = <strong>$<?php echo number_format($grandTotal,2); ?></strong></p>
    
</body>
</html>