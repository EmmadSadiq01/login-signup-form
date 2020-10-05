<?php
$logedin = false;
echo "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
<a class='navbar-brand' href='/login/welcome.php'>LOGO</a>
<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
  <span class='navbar-toggler-icon'></span>
</button>

<div class='collapse navbar-collapse' id='navbarSupportedContent'>
  <ul class='navbar-nav mr-auto'>";
  // session_start();
if( isset($_SESSION['logedin']) && $_SESSION['logedin']!=false){
  echo "<li class='nav-item active'>
  <a class='nav-link' href='/login/welcome.php'>Home </a>
</li>
<li class='nav-item'>
    <a class='nav-link' href='/login/logout.php'>Log Out</a>
    </li>";
    $logedin = true;
}
else{
  $logedin = false;
}
if(!$logedin){

  echo "<li class='nav-item'>
        <a class='nav-link' href='/login/login.php'>Log In</a>
      </li>
      <li class='nav-item'>
        <a class='nav-link' href='/login/signup.php'>Sign Up</a>
      </li>";
}
    
    ?>

  </ul>
  <form class='form-inline my-2 my-lg-0'>
    <input class='form-control mr-sm-2' type='search' placeholder='Search' aria-label='Search'>
    <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
  </form>
</div>
</nav>

