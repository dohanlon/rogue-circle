

<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = "customer@rogue-circle.com";
$EmailTo = "general@rogue-circle.com";
$Subject = "CONTACT";
$First = Trim(stripslashes($_POST['First'])); 
$Last = Trim(stripslashes($_POST['Last'])); 
$Company = Trim(stripslashes($_POST['Company'])); 
$Address = Trim(stripslashes($_POST['Address'])); 
$Telephone = Trim(stripslashes($_POST['Telephone'])); 
$Mobile = Trim(stripslashes($_POST['Mobile'])); 
$Website = Trim(stripslashes($_POST['Website'])); 

// validation
$validationOK=true;
if (Trim($First)=="") $validationOK=false;
if (Trim($Last)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "First: ";
$Body .= $First;
$Body .= "\n";
$Body .= "Last: ";
$Body .= $Last;
$Body .= "\n";
$Body .= "Company: ";
$Body .= $Company;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "Telephone: ";
$Body .= $Telephone;
$Body .= "\n";
$Body .= "Mobile: ";
$Body .= $Mobile;
$Body .= "\n";
$Body .= "Website: ";
$Body .= $Website;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>

