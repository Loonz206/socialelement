<?php include 'includes/header.php';
//contact.php - will be a test of an email formhandler    

define("THIS_PAGE",basename($_SERVER['PHP_SELF']));


if(isset($_POST['email']))
{//show POST data/process form
/*   echo "<pre>";
   var_dump($_POST);
   echo "</pre>";
   
   die();*/
   
    $myText = process_post();
	
	//echo $myText;
	//die;
	
	mail("info@socialelementgroup.com","Customer Inquiry",$myText);
	echo 
	"<div class=\"container\">
		<div class=\"row\">
			<div class=\"threecol\">
			</div>
			<div class=\"sixcol offset3 last\">
				<h3>Your Message Has Been Sent</h3>
				<p>Thank you for contacting Social Element</p>
				<br />
				<p><a href=\"home.php\">Home</a></p>
		</div>
	</div>";   
   
}else{//show form


?>    
<div class="container" id="detail">
	<div class="row">
    	<div class="twocol">
        </div><!--/END TWOCOL-->
        <div class="sixcol offset2 last">
<h2>Contact Form</h2>
<p>Want to find out more about Social Element and what we can do for your business? Please fill out the form below and we will contact you promptly. The more information you provide, the better prepared we will be when we contact you:</p>
<div class="doform">
<form action="<?=THIS_PAGE;?>" id="thing-alerts" method="post">
<fieldset>
<label for="alerts-first-name">Your First Name</label>
<input type="text" name="first_name" required="required" id="alerts-first-name" />
</fieldset>
<fieldset>
<label for="alerts-last-name">Your Last Name</label>
<input type="text" name="last_name" required="required" id="alerts-last-name" />
</fieldset>
<fieldset>
<label for="alerts-website">Your Website</label>
<input type="url" name="website" pattern="https?://.+" id="alerts-website">
</fieldset>
<fieldset>
<label for="alerts-email">Your Email</label>
<input type="email" name="email" required="required" placeholder="Provide email" id="alerts-email">
</fieldset>
<fieldset>
<label>Check Your Interests</label>
<input type="checkbox" name="Interests" value="Social Audit"> Social Audit<br />
<input type="checkbox" name="Interests" value="Web Design"> Web Design<br />
<input type="checkbox" name="Interests" value="Social Media Packages"> Social Media Packages<br />
<input type="checkbox" name="Interests" value="Consulting"> Consulting<br />
</fieldset>
<fieldset>
<label for="alerts-comments">Your Comments</label>
<textarea cols="40" rows="10" id="alerts-comments"></textarea>
</fieldset>
<fieldset>
<input type="submit" value="Submit" />
</fieldset>
</form>	

</div><!--/END DOFORM-->
<p>If you wish to speak to someone in person, please call us at <a href="tel:2064866584">206.486.6584</a>	</p>
		</div>
	</div><!--/END ROW-->
</div><!--/END CONTAINER-->
<?php include 'includes/footer.php';
}

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
} 
?>