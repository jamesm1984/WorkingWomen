<?php $pagename="Contact"; ?>
<?php include("includes/head.php"); ?>
<?php include("includes/topbar.php"); ?>
  <div class="container">

    <div id="wrapper">
      <section class="maincontent">
        
        <h1>Thank You!</h1>
        
        <?php 
            $to="jamesmcgaghey@gmail.com";
            $subject="Job Application";
            $message=$_POST["fn"]. " " . $_POST["ln"]. " \r\n";
            $message.= "Is applying for position" . "\r\n" . "\r\n"; 
            $message.= "Resume :" . "\r\n" . "\r\n";  
            $message.= $_POST["r"] . "\r\n" . "\r\n";
            $from=$_POST["ea"];
                
            mail($to, $subject, $from, $message);
        ?>
        
        <h2>Hi <?php echo $_POST["fn"]." ". $_POST["ln"]; ?></h2>
         <h3>You are reporting his address as:</h3>
         <p> <?php echo $_POST["ea"]; ?></p>
         <h2>You can be reached at:</h2>
         <p>E-mail : <?php echo $_POST["ea"]; ?></p>
         <h2>Your resume is:</h2>
         <p><?php echo $_POST["r"]; ?></p>
       </section>
    </div>
  </div>
<?php include("includes/footer.php"); ?>