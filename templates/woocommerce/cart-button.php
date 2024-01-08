<a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Ver carrito' ); ?>">
    <i class="fa fa-shopping-cart"></i>
    <span class="count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
</a>