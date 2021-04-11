<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];
//
if (empty($name) || empty($email) || empty($message))
{
    echo "Please fill all the fields";

}
else{

mail("tusharbanerjee14379380@gmail.com", "Webtech message", $message, "From: $name<$email>");
echo "<script type= 'text/javascript'>alert('your message sent sucessfully');
window.history.log(-1);
</script>";


}