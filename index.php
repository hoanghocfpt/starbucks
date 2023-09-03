<?php
    include_once 'view/header.php';
    
    if(isset($_GET['p'])){
        $p = $_GET['p'];
        switch ($p) {
            case 'home':
                include_once 'view/home.php';

                break;
            case 'menu':
                include_once 'view/menu.php';
                
                break;

            case 'cart':
                include_once 'view/cart.php';
                
                break;
            case 'product':
                include_once 'view/product.php';
                
                break;
            case 'signup':
                include_once 'view/signup.php';
                
                break;
            case 'signin':
                include_once 'view/signin.php';
                
                break;
            default:
                include_once 'view/home.php';
                break;
        }
    }else{
        include_once 'view/home.php';
    }
    include_once 'view/footer.php';

?>