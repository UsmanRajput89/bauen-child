<?php

add_shortcode("ur_portfolio_builder", "ur_portfolio_builder_form");

function ur_portfolio_builder_form(){
    $ob = ur_portfolio_builder_fields();
    return $ob;
}

function ur_portfolio_builder_fields(){
    
    ob_start(); ?>

    <?php 

    ?>
    <form action="">
        <label>First Name</label>
        <input type="text">
        <label>Last name</label>
        <input type="text">
    </form>
        


    <?php  

    return ob_get_clean();
}
