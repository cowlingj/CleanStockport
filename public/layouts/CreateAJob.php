<!DOCTYPE html>
<?php require('../../lib/db-functions.php') ?>
<html lang="en">
  <head>
    <title> Stockport </title>
    <link rel= "stylesheet" type= "text/css" href= "../assets/CleanStockport.css">
  </head>

  <body>
  <?php
    //Initialisation
    $jobName = $jobDescription = $jobPrice = $jobLocation = $jobImage = $contactEmail = $jobPrice = ""
  ?>
    <div class="job">
      <div class="jobDetails">
        <form  method="post"
               action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
          <label> Name </label>
          <input type="text" placeholder="job name..." name="jobName">
          
          <label> Description </label>
          <textarea rows="10" cols="500"
                    placeholder="description..."
                    name="jobDescription"></textarea>

          <label> Location </label>
          <input type="text" placeholder="location..." name="jobLocation">

          <label> Price </label>
          <input type="text" placeholder="price..." name="jobPrice">

          <label> Contact email </label>
          <input type="text" placeholder="someone@example.com"
                 name="contactEmail">

          <input type="text" name="jobImage">
        
          <input type="submit" value="SUBMIT">
        </form>
      </div>
    </div>

    <?php 
      if(isset($_POST["jobName"])) { $jobName = $_POST["jobName"]; }
      if(isset($_POST["jobDescription"]))
        { $jobDescription = $_POST["jobDescription"]; }
      if(isset($_POST["jobLocation"])) { $jobLocation = $_POST["jobLocation"]; }
      if(isset($_POST["jobPrice"])) { $jobPrice = $_POST["jobPrice"]; }
      if(isset($_POST["jobImage"])) { $jobImage = $_POST["jobImage"]; }
    
    //Adding data to the database
    addRow($jobName, $jobLocation, $jobDescription, $jobPrice, $contactEmail, $jobImage);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      header('location: index.php');
    }

     ?>


  </body>
</html> 
