<?php 
    include_once 'model/menu_func.php';

    function breadcrumb(){
        $result = '';
        if(isset($_GET['category'])){
            $category = $_GET['category'];
            $name_category = '';
            $categories = getCategories();
            foreach ($categories as $value) {
                if($value['id'] == $category){
                    $name_category = $value['name'];
                }
            }
        
            $result .= '<div class="breadcrumb">
            <ol>
                <li><a href="index.php?p=menu">Thực đơn</a></li>
                <li><a href="#">'.$name_category.'</a></li>
            </ol>
        </div>';
        }else{
            $result .= '<div class="breadcrumb">
            <ol>
                <li><a href="index.php?p=menu">Thực đơn</a></li>
                <li>Tất cả</li>
            </ol>
        </div>';
        }
        return $result;
    }
    function resultMenu(){
        $result_menu = '';
        $result = '';
        $category_name = '';
        if(isset($_GET['category'])){
            $category = $_GET['category'];
            $menu = getMenuByCategory($category);
            if($menu == null){
                $result_menu = '<h2>Không có sản phẩm nào</h2>';
                
            }else{
                foreach ($menu as $value) {
                    $category_name = $value['category_name'];
                    $result .= '
                    <div class="card">
                    <a href="index.php?p=product&id='.$value['id'].'">
                        <div class="card_img">
                            <img src="'.$value['image'].'" alt="">
                        </div>
                        <div class="card_text">
                            <div class="product_name">'.$value['name'].'</div>
                            <div class="product_price">'.number_format($value['price'],0,',','.').'đ</div>
                        </div>
                    </a>
                </div> ';
            }
            }
            $result_menu .= '<h2>'.$category_name.'</h2><div class="category_sub_layout">'.$result.'</div>';
        }else{
            $menu = getMenu();
            $category = getCategories();
            // var_dump($category);
            if($menu == null){
                $result_menu = '<h2>Không có sản phẩm nào</h2>';
                
            }else{
                foreach ($category as $e) {
                    $result = '';
                    $category_name = $e['name'];
                    foreach ($menu as $value) {
                        if($e['id'] == $value['category_id']){
                            $result .= '
                            <div class="card">
                            <a href="index.php?p=product&id='.$value['id'].'">
                                <div class="card_img">
                                    <img src="'.$value['image'].'" alt="">
                                </div>
                                <div class="card_text">
                                    <div class="product_name">'.$value['name'].'</div>
                                    <div class="product_price">'.number_format($value['price'],0,',','.').'đ</div>
                                </div>
                            </a>
                        </div> ';   
                        }         
                    }
                    $result_menu .= '<h2>'.$category_name.'</h2><div class="category_sub_layout">'.$result.'</div>';
            }
            }
            // var_dump($menu);
           
            
        }
       
       
        
        
    

    return $result_menu;
    }
  
    // result categories
    function resultCategories(){
        $categories = getCategories();
        $result_categories = '';
        foreach ($categories as $value) {
            $id = $value['id'];
            $name = $value['name'];
            $result_categories .= '<li><a href="index.php?p=menu&category='.$id.'">'.$name.'</a></li>';
        }
        return $result_categories;
    }

    // result menu by category
    if(isset($_GET['category'])){
        $category = $_GET['category'];
        $result = getMenuByCategory($category);
    }else{
        
    }
?>