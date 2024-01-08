<div class="logo-div" style="filter: grayscale(0);">
<?php
    if(has_custom_logo()){
        the_custom_logo();
    } else{
    ?>
<a class="the" href="<?php// echo esc_url((('/')); ?>">
    <img class="img-fluida logo-img conten-center" src="<?php echo get_stylesheet_directory_uri()?>/inc/img/logo.png" ?>
</a>
    <?php } ?>
    
</div>
<div class="logo-div2" style="display:none; ">

<?php
    if(has_custom_logo()){
        the_custom_logo();
    } else{
    ?>
<a class="the" href="<?php// echo esc_url((('/')); ?>">
    <img class="img-fluida logo-img conten-center" src="<?php echo get_stylesheet_directory_uri()?>/inc/img/logo.png" ?>
</a>
    <?php } ?>
    
</div>
