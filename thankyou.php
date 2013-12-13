<?php $pagename="Contact"; ?>
<?php include("includes/head.php"); ?>
<?php include("includes/topbar.php"); ?>
  <div class="container">

    <div id="wrapper">
      <section class="mainContent">
        
        <h1>Thank You!</h1>
        
        <?php 
            $to="jamesmcgaghey@gmail.com";
            $subject="Job Application";
            $attachment = chunk_split(base64_encode(file_get_contents(r))); 

            $message=$_POST["fn"]. " " . $_POST["ln"]. " \r\n";
            $message.= "Is applying for position" . "\r\n" . "\r\n"; 
            $message.= "Resume :" . "\r\n" . "\r\n";  
            $message.= $_POST["r"] . "\r\n" . "\r\n";

            $message.= "--".$separator.$eol;
            $message.= "Content-Type: text/document; name=\""."\"".$eol; 
            $message.= "Content-Transfer-Encoding: base64".$eol;
            $message.= "Content-Disposition: attachment".$eol.$eol;
            $message.= $attachment.$eol;
            $message.= "--".$separator."--";
            
            $from=$_POST["ea"];

                
            mail($to, $subject, $from, $message);
        ?>
        
        <h2>Hi <?php echo $_POST["fn"]." ". $_POST["ln"]; ?></h2>
            <div>
                <h3>Your email address is:</h3>
                <p> <?php echo $_POST["ea"]; ?></p>
            <div>
            <div>
                <h3>Your resume is:</h3>
                <p><?php echo $_POST["r"]; ?></p>
            </div>
       </section>
    </div>
  </div>
<?php include("includes/footer.php"); ?>