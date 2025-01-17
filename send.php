<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <title>Money Transfer</title>
</head>
<body>

    <!-- header with connection and sql code -->
  <?php require_once './include/header.php'; 
    require 'connection.php';
  $Name=NULL;

if(!empty($_GET["name"]) ) 
   $Name = $_GET["name"];
  $from='';
  $to='';
  $amount='';
   if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];


    check_name($from,$to,$amount);
   }
   
  ?>

    <!-- transfer form starts -->
    <div class="container my-4">
      <h2> <b> Money Transfer </b> </h2>
      <h6> Fill the Details Carefully </h6>
    </div>
    <div class="container my-3">
  <form action="<?php $_PHP_SELF ?>" method="post" >
  <div class="mb-3">
    <label for="From" class="form-label">From</label>
    <input type="text" class="form-control" id="From" name="from"  value='<?php echo $Name; ?>' required/>
  </div>
  
  <div class="mb-3">
    <label for="To" class="form-label">To</label>
    <select class="form-select" id="To" name="to" required>
        <option value="">Select Receiver</option>
        <?php
            // Assuming you have an array $Cust_Name from your database
            foreach ($Cust_Name as $receiver) {
                echo '<option value="' . htmlspecialchars($receiver) . '">' . htmlspecialchars($receiver) . '</option>';
            }
        ?>
    </select>
    <div id="emailHelp" class="form-text">Select Receiver Name</div>
</div>

  <div class="mb-3">
    <label for="Amount" class="form-label">Amount</label>
    <input type="number" class="form-control" id="Amt" name="amount" required/>
    <div id="emailHelp" class="form-text"> Enter the Amount Here </div>
  </div>
  <button type="submit" class="btn btn-primary" id="submit" >Send</button>
</form>
</div>

     <!-- footer  -->
  <?php require_once './include/footer.php' ?>  
</body>
        <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <title>Money Transfer</title>
</head>
<body>

    <!-- header with connection and sql code -->
  <?php require_once './include/header.php'; 
    require 'connection.php';
  $Name=NULL;

if(!empty($_GET["name"]) ) 
   $Name = $_GET["name"];
  $from='';
  $to='';
  $amount='';
   if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];


    check_name($from,$to,$amount);
   }
   
  ?>

    <!-- transfer form starts -->
    <div class="container my-4">
      <h2> <b> Money Transfer </b> </h2>
      <h6> Fill the Details Carefully </h6>
    </div>
    <div class="container my-3">
  <form action="<?php $_PHP_SELF ?>" method="post" >
  <div class="mb-3">
    <label for="From" class="form-label">From</label>
    <input type="text" class="form-control" id="From" name="from"  value='<?php echo $Name; ?>' required/>
  </div>
  
  <div class="mb-3">
    <label for="To" class="form-label">To</label>
    <select class="form-select" id="To" name="to" required>
        <option value="">Select Receiver</option>
        <?php
            // Assuming you have an array $Cust_Name from your database
            foreach ($Cust_Name as $receiver) {
                echo '<option value="' . htmlspecialchars($receiver) . '">' . htmlspecialchars($receiver) . '</option>';
            }
        ?>
    </select>
    <div id="emailHelp" class="form-text">Select Receiver Name</div>
</div>

  <div class="mb-3">
    <label for="Amount" class="form-label">Amount</label>
    <input type="number" class="form-control" id="Amt" name="amount" required/>
    <div id="emailHelp" class="form-text"> Enter the Amount Here </div>
  </div>
  <button type="submit" class="btn btn-primary" id="submit" >Send</button>
</form>
</div>

     <!-- footer  -->
  <?php require_once './include/footer.php' ?>  
</body>
        <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <title>Money Transfer</title>
</head>
<body>

    <!-- header with connection and sql code -->
  <?php require_once './include/header.php'; 
    require 'connection.php';
  $Name=NULL;

if(!empty($_GET["name"]) ) 
   $Name = $_GET["name"];
  $from='';
  $to='';
  $amount='';
   if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];


    check_name($from,$to,$amount);
   }
   
  ?>

    <!-- transfer form starts -->
    <div class="container my-4">
      <h2> <b> Money Transfer </b> </h2>
      <h6> Fill the Details Carefully </h6>
    </div>
    <div class="container my-3">
  <form action="<?php $_PHP_SELF ?>" method="post" >
  <div class="mb-3">
    <label for="From" class="form-label">From</label>
    <input type="text" class="form-control" id="From" name="from"  value='<?php echo $Name; ?>' required/>
  </div>
  
  <div class="mb-3">
    <label for="To" class="form-label">To</label>
    <select class="form-select" id="To" name="to" required>
        <option value="">Select Receiver</option>
        <?php
            // Assuming you have an array $Cust_Name from your database
            foreach ($Cust_Name as $receiver) {
                echo '<option value="' . htmlspecialchars($receiver) . '">' . htmlspecialchars($receiver) . '</option>';
            }
        ?>
    </select>
    <div id="emailHelp" class="form-text">Select Receiver Name</div>
</div>

  <div class="mb-3">
    <label for="Amount" class="form-label">Amount</label>
    <input type="number" class="form-control" id="Amt" name="amount" required/>
    <div id="emailHelp" class="form-text"> Enter the Amount Here </div>
  </div>
  <button type="submit" class="btn btn-primary" id="submit" >Send</button>
</form>
</div>

     <!-- footer  -->
  <?php require_once './include/footer.php' ?>  
</body>
        <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icon.png">
    <title>Money Transfer</title>
</head>
<body>

    <!-- header with connection and sql code -->
  <?php require_once './include/header.php'; 
    require 'connection.php';
  $Name=NULL;

if(!empty($_GET["name"]) ) 
   $Name = $_GET["name"];
  $from='';
  $to='';
  $amount='';
   if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $from = $_POST["from"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];


    check_name($from,$to,$amount);
   }
   
  ?>

    <!-- transfer form starts -->
    <div class="container my-4">
      <h2> <b> Money Transfer </b> </h2>
      <h6> Fill the Details Carefully </h6>
    </div>
    <div class="container my-3">
  <form action="<?php $_PHP_SELF ?>" method="post" >
  <div class="mb-3">
    <label for="From" class="form-label">From</label>
    <input type="text" class="form-control" id="From" name="from"  value='<?php echo $Name; ?>' required/>
  </div>
  
  <div class="mb-3">
    <label for="To" class="form-label">To</label>
    <select class="form-select" id="To" name="to" required>
        <option value="">Select Receiver</option>
        <?php
            // Assuming you have an array $Cust_Name from your database
            foreach ($Cust_Name as $receiver) {
                echo '<option value="' . htmlspecialchars($receiver) . '">' . htmlspecialchars($receiver) . '</option>';
            }
        ?>
    </select>
    <div id="emailHelp" class="form-text">Select Receiver Name</div>
</div>

  <div class="mb-3">
    <label for="Amount" class="form-label">Amount</label>
    <input type="number" class="form-control" id="Amt" name="amount" required/>
    <div id="emailHelp" class="form-text"> Enter the Amount Here </div>
  </div>
  <button type="submit" class="btn btn-primary" id="submit" >Send</button>
</form>
</div>

     <!-- footer  -->
  <?php require_once './include/footer.php' ?>  
</body>
        <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="./js/main.js"></script>
</html>