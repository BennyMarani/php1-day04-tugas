<?php include ('partials/header.php'); ?>

<?php

if(isset($_GET['page']) && $_GET['page'] == 'about'){
// tampilkan halaman about.php
include ('pages/about.php'); 

  
} elseif(isset($_GET['page']) && $_GET['page'] == 'post'){
// tampilkan halaman post.php
include ('pages/post.php');

} elseif(isset($_GET['page']) && $_GET['page'] == 'contact'){
// tampilkan halaman contact.php
include ('pages/contact.php'); 

    
} else{
// tampilkan halaman error 404.php
    
}

?>

<?php include ('partials/content.php'); ?>
<?php include ('partials/footer.php'); ?>