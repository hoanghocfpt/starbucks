
        <?php echo breadcrumb();  ?>     
        <div class="menu_container">
            <div class="category_sub_left">
                <div class="category">
                    <h2><span>Danh mục</span></h2>
                    <ul>
                        <?php echo resultCategories() ?>
                    </ul>
                </div>
                <div class="category_type">
                    <h2><span>Loại</span></h2>
                    <ul>
                        <li><input type="radio" name="category_type" id="" checked>Cà phê</li>
                        <li><input type="radio" name="category_type" id="">Cà phê Espresso</li>
                        <li><input type="radio" name="category_type" id="">Frappuccino®</li>
                        <li><input type="radio" name="category_type" id="">Trà</li>
                    </ul>
                </div>
            </div>
            <div class="category_sub_right">
               
              
                    <?php echo resultMenu() ?>
                    
             
            </div>
        </div>
        <!-- <div class="banner">
            <a href="#">
                <img src="view/images/banner_trungthu.jpg" alt="">
            </a>
            <a href="#">
                <img src="view/images/banner_quanmoi.jpg" alt="">
            </a>
            <a href="#">
                <img src="view/images/banner_blackpink.jpg" alt="">
            </a>
        </div> -->

 