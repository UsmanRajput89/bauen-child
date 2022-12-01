<?php 
add_shortcode("ur_portfolio_builder", "ur_portfolio_builder_form");

function ur_portfolio_builder_form(){
    $ob = ur_portfolio_builder_fields();
    return $ob;
}

function ur_portfolio_builder_fields(){
    
    ob_start(); ?>

    <div class="ur_form_div">

        <form action="" id="ur_pb_form">
            
            <div class="field">
                
                <label class="ur_label">Return You Expect on your investment?</label>

                <div class="ur_chkbox_group">
                    <div class="r_o_i_box roi_box_js">
                        <label for="">4%</label>
                        <input type="radio" value="4" class="roi_radio" name="r_o_i" hidden required>
                    </div>
                    <div class="r_o_i_box roi_box_js">
                        <label for="">6%</label>
                        <input type="radio" value="6" class="roi_radio" name="r_o_i" hidden required>
                    </div>
                    <div class="r_o_i_box roi_box_js">
                        <label for="">8%</label>
                        <input type="radio" value="8" class="roi_radio" name="r_o_i" hidden required>
                    </div>
                    <div class="r_o_i_box roi_box_js">
                        <label for="">10%</label>
                        <input type="radio" value="10" class="roi_radio" name="r_o_i" hidden required>
                    </div>
                </div>
      
            </div>

            <div class="field">
                
                <label class="ur_label">What annual income do you expect from your investment?</label>

                <div class="ur_chkbox_group">
                    
                    <div class="r_o_i_box ioi_box ioi_box_1" >
                        <label for="">0%</label>
                        <input type="radio" value="0" name="i_o_i" hidden required>
                    </div>
                    
                    <div class="r_o_i_box ioi_box ioi_box_2">
                        <label for="">2%</label>
                        <input type="radio" value="2" name="i_o_i" hidden required>
                    </div>

                    <div class="r_o_i_box ioi_box ioi_box_3">
                        <label for="">3%</label>
                        <input type="radio" value="3" name="i_o_i" hidden required>
                    </div>

                    <div class="r_o_i_box ioi_box ioi_box_4">
                        <label for="">4%</label>
                        <input type="radio" value="4" name="i_o_i" hidden required>
                    </div>

                    <div class="r_o_i_box ioi_box ioi_box_5">
                        <label for="">5%</label>
                        <input type="radio" value="5" name="i_o_i" hidden required>
                    </div>

                </div>
            </div>

            <div class="ur_btn">
                <input type="submit" value="Check My Result" class="ur_pb_submit">
                <!-- <button class="ur_pb_submit">Check My Result</button> -->
            </div>
        </form>

        <div class="ur_result">
            <p class="tophead">Investment Style</p>
            <h3 id="ur_result_head">Conservative</h3>
            <p id="ur_result_para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem alias voluptatibus deserunt eveniet architecto sunt doloribus, nisi quia laborum facilis quo assumenda eius vel veniam voluptate odit molestias dolores tempora cupiditate. Similique nesciunt quidem delectus fugit, consectetur, cumque labore ea aut nisi quod deleniti aperiam. Ab officia eligendi optio tempore.</p>
        </div>
            
    </div>

    <div class="ur_overlay_bg">
        <div class="ur_overlay">
            <div class="ur_modal_head">
                <h5>Potentiel Portfolio</h5>
                <div class="ur_modal_close">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/closeIcon.svg" alt="">
                </div>
            </div>
            <p class="ur_disclaimer">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi temporibus tempora inventore assumenda laudantium.
            </p>
            <form action="#" id="ur_contact_form" method="POST">
                <label for="first_name">First Name*</label>
                <input type="text" name="first_name" required>
                <label for="last_name">Last Name*</label>
                <input type="text" name="last_name" required>
                <label for="email">Email*</label>
                <input type="email" name="email" required>
                <label for="number">Phone Number*</label>
                <input type="text" name="number" required>
                <input type="checkbox" name="t_c" required>
                <label for="">Agree on Term and Conditions</label>
                <br>
                <button type="submit" id="ur_contact_form_btn">Submit</button>
            </form>
        </div>
    </div>

    <?php  

    return ob_get_clean();
}