<section id="main-menu">

    <div class="container">
        <h1 class="logo"><a href="https://welcomeenglish.online/">Welcome English</a></h1>
        <ul class="menu main-menu">  
            <?php if( is_front_page() ) { ?>          
                <li><a href="#courses" class="anchor">Courses</a></li>
                <li><a href="#ebook" class="anchor">e-Books</a></li>     
            <?php } else { ?>       
                <li><a href="https://welcomeenglish.online/#courses">Courses</a></li>
                <li><a href="https://welcomeenglish.online/#ebook">e-Books</a></li> 
            <?php } ?>
            <li><a href="#contato" class="anchor">Contact</a></li> 
            <li class="fb"><a href="https://www.facebook.com/welcomeenglish.class" target="_blank">Facebook</a></li>           
            <li class="insta"><a href="https://www.instagram.com/welcomeenglish.class/" target="_blank">Instagram</a></li>
        </ul>
        <div class="menu-extras">
            <div class="lang">
                <ul>
                    <li class="en-us"><a href="<?php echo get_site_url()?>">English</a></li>
                    <li class="pt-br"><a href="<?php echo get_site_url()?>/br">Português</a></li>
                    <li class="cart"><a href="https://welcomeenglish.online/br/carrinho/">Carrinho</a></li>
                </ul>
            </div>
        </div>       
    </div>

</section>