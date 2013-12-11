<?php $pagename="Contact"; ?>
<?php include("includes/head.php"); ?>
<?php include("includes/topbar.php"); ?>
  <div class="container">

    <div id="wrapper">
      <section class="maincontent">
        
        <h1>Thank You!</h1>
        
        <?php 
            $to="dminns@gmail.com";
            $subject="Don't use your email eh??";
            $message=$_POST["firstname"]. " " . $_POST["lastname"]. " is sending a bunch of spam! \r\n";
            $message.= $_POST["comments"] . "\r\n" . "\r\n";  
            $message.= $_POST["phone"] . "\r\n" . "\r\n";
            $message.= $_POST["address"] . "\r\n";
            $message.= $_POST["city"] . ", ". $_POST["province"] . "\r\n";
            $message.= $_POST["country"] . "\r\n";
            $message.= $_POST["postalcode"] . "\r\n";
            $from=$_POST["email"];
                
            mail($to, $subject, $from, $message);
        ?>
        
        <h2>Hi <?php echo $_POST["firstname"]." ". $_POST["lastname"]; ?> is Drew Minns high?</h2>
         <h3>You are reporting his address as:</h3>
         <p> <?php echo $_POST["address"]; ?></p>
         <p> <?php echo $_POST["city"] .", ". $_POST["province"]; ?></p>
         <p> <?php echo $_POST["country"]; ?></p>
         <p> <?php echo $_POST["postalcode"]; ?></p>
         <h2>You can be reached at:</h2>
         <p>Phone Number: <?php echo $_POST["phone"]; ?></p>
         <p>E-mail : <?php echo $_POST["email"]; ?></p>
         <h2>You made the following report:</h2>
         <p><?php echo $_POST["comments"]; ?></p>
       </section>
    </div>
  </div>
<?php include("includes/footer.php"); ?>