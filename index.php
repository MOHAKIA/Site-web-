<?php 

require_once realpath(__DIR__) .'\bootstrap.php';

require_once  "./database/DB.php";
require_once "./autoload.php";
require_once  "./Controllers/class.Cart.php";
require_once "./Controllers/productController.php";
require_once "./Controllers/HomeController.php";

$home = new HomeController;

$cart = new Cart([
   
    'cartMaxItem'      => 0,
   
   
    'itemMaxQuantity'  => 0,
   
   
    'useCookie'        => true,
  ]);
  
$pages=['home','inscription','Produit','events','productDetail','dashboardcomm','dashboardAdmin','dashboard','editproduit','login','commandDetail','addproduit','addcommande','addcommercial','addevents','editclient','logout','Note','detail','checkout','cart'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        if($page ==="Dashboared"){
            if(isset($_SESSION['admin']) && $_SESSION['admin']===true){
                $admin = new AdminController();
                $admin->index($page);
            }else{
            include('Views/includes/404.php');
        }
       
        }else{
            $home->index($page);
        }
    }else{
        include('Views/includes/404.php');
    }
}else{
    $home->index("/home");
}
?>
