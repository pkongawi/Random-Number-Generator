<body>
<div class="container">  
<h2>PHP Random Number Generator Example</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
<div class="form-group"> 
  <label for="exampleInputNumber" class="control-label col-sm-2">Enter a number</label>
  <div class="col-sm-10">
  <input class="form-control form-control-lg" type="number" id="dice" name="dice" min="1" value="<?php echo $number;?>">
  </div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="dice">Sides of the dice:</label>
  <select class="form-control form-control-lg" name="sides" id="sides">
	<option value="">--- Roll the dice ---</option>
	<option value="4">D4</option>
	<option value="8">D8</option>
	<option value="10">D10</option>
  <option value="12">D12</option>
  <option value="20">D20</option>
  </select>
  </div>

  <input type="submit" name="submit" value="Submit" class="btn btn-primary">  
</form>

<?php 
  if (isset($_POST['submit'])) {
  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field of dice
    // create an empty array to hold 
    $dice = $_POST['dice'];
    $num_array = array();
?>



<table class="table table-striped mt-3">
    <tr>
      <th>#</th>
      <th>Result</th>
    </tr>
    <?php 
    //Loop through the number in the dice field
    //Increment the variable $i by 1 and store it in varialbe $j
    //This, variable $j, gives you the number of times you need to roll the dice
    //Push all the results of the random number in the empty array, $num_array, at the end of the array
    //array_push(array, value1, value2, ...), each value is added to the array.
    //rand(min,max);
      for ($i=0; $i < $dice; $i++) { 
        $j = $i + 1;
        array_push($num_array, rand(1, $_POST['sides']));
    ?>
    <tr>
      <td><?php echo $j; ?></td>
      <td><?php echo $num_array[$i]; ?></td>
    </tr>
<?php
    }
  }
?>
</table>

 </div>