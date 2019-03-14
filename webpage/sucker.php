<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php 
            if($_REQUEST["yourname"]==""||$_REQUEST["yourcard"]==""||$_REQUEST["cardtype"]==""){ ?>
            <h1>Sorry</h1>
            <p>You didn't fill out the form completely.</p>
            <a href="buyagrade.html"> Try again?</a>
            <?php 
            }
            else{ ?>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?php  
			   echo $_POST ["yourname"];  
			 ?></dd>

			<dt>Section</dt>
			<dd><?php  
			   echo $_POST ["yoursection"];  
			 ?></dd>

			<dt>Credit Card</dt>
			<dd><?php  
			   echo $_POST ["yourcard"]; 
			 ?> 
			 	<?php  
			   echo $_POST ["cardtype"];  
			 ?>
			 </dd>
		</dl>
      
       <?php 
       $file = 'suckers.txt';
       $data = $_POST["yourname"] . ";" . $_POST["yoursection"] . ";" . $_POST["yourcard"] . ";" . $_POST["cardtype"] ." \n"; 
       file_put_contents($file, $data, FILE_APPEND);
       $contents = file_get_contents($file);
       ?>

       <p> Here are all the suckers who have submitted here: </p> 
          <pre>
             <?= $contents ?>
          </pre>
        <?php }?>
	</body>
</html>  