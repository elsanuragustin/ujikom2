<?php
    if($_GET['menu'] == "home" || $_GET['menu'] == ''){
    include("views/home.php");
}
    else if($_GET['menu'] == "profil"){
    include("views/profile.php");
}
    else if($_GET['menu'] == "about"){
    include("views/about.php");
}
    else if($_GET['menu'] == "projek"){
    include("views/project.php");
}
    else if($_GET['menu'] == "kontak"){
    include("views/contact.php");
}
else if ($_GET['menu'] == 'logout') {
    session_start();
    session_destroy();
    print `<meta http-equiv="refresh" content="0; url=index.php">`;
  }
?>