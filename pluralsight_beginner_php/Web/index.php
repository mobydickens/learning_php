<!-- BEST PRACTICE: in a file called include.php, put the session_star t, and then include that file in every page that needs it. That way it is easier to use. BEST PRACTICE -->

<?php
// SESSIONS
session_start();

// PHP has a session variable
// $_SESSION['formPostData']  = $_POST; <- session variable set to form data. You set the key. 

// ENCLOSE WITH IF STATEMENT
if(isset($_SESSION['formPostData']))
{
  $postedData = $_SESSION['formPostData'];
  session_destroy(); //will clear all session data 
  // OR USE:
  unset($_SESSION['formPostData']); // just clear this particular session data
}
else
{
  // if no session, redirect (a way to keep user from seeing page)
  header('Location: anotherPage.php');
} 

// DESTROY A SESSION



?>
