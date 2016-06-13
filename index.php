<?php
require 'routes/routes.php';
$router = new routes();
if($router->is_login()){
  //header('Location:some_page.php');
}
else {
  //header('Location:some_page.php');
}
