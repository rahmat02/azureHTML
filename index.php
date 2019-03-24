<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="utama.css">
</head>
<body>

<form name="contact-form" method="post" action="insert.php">
  <div class="container">
    <h1>Register here !</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="job"><b>Job</b></label>
    <input type="text" placeholder="Enter Job" name="job" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <hr>
 <button type="submit" class="registerbtn">Register</button>
 <input type="button" value="lihat daftar" id="btnsubmit" onclick="submitForm()" class='registerbtn'>

<!--   
     <input type="button" value="Submit" id="btnsubmit" onclick="submitForm()" class='registerbtn'>
-->
  </div>

</form>
<script>
function submitForm() {
  window.location.href="daftar.php";
 //  var frm = document.getElementsByName('contact-form')[0];
   //frm.submit(); // Submit the form
   //frm.reset();  // Reset all form data
   //return false; // Prevent page refresh
   
}
</script>
</body>

</html>
