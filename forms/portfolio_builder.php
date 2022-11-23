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
                    <div class="r_o_i_box">
                        <label for="">4%</label>
                        <input type="radio" value="4" name="r_o_i" hidden>
                    </div>
                    <div class="r_o_i_box">
                        <label for="">6%</label>
                        <input type="radio" value="6" name="r_o_i" hidden>
                    </div>
                    <div class="r_o_i_box">
                        <label for="">8%</label>
                        <input type="radio" value="8" name="r_o_i" hidden>
                    </div>
                    <div class="r_o_i_box">
                        <label for="">10%</label>
                        <input type="radio" value="10" name="r_o_i" hidden>
                    </div>
                </div>
            </div>

            <div class="field">
                
                <label class="ur_label">What annual income do you expect from your investment?</label>

                <div class="ur_chkbox_group">
                    
                    <div class="r_o_i_box ioi_box_1" >
                        <label for="">0%</label>
                        <input type="radio" value="0" name="i_o_i" hidden>
                    </div>
                    
                    <div class="r_o_i_box ioi_box_2">
                        <label for="">2%</label>
                        <input type="radio" value="2" name="i_o_i" hidden>
                    </div>

                    <div class="r_o_i_box ioi_box_3">
                        <label for="">3%</label>
                        <input type="radio" value="3" name="i_o_i" hidden>
                    </div>

                    <div class="r_o_i_box ioi_box_4">
                        <label for="">4%</label>
                        <input type="radio" value="4" name="i_o_i" hidden>
                    </div>

                    <div class="r_o_i_box ioi_box_5">
                        <label for="">5%</label>
                        <input type="radio" value="5" name="i_o_i" hidden>
                    </div>

                </div>
            </div>

            <div class="ur_btn">
                <input type="submit" value="Check My Result" class="ur_pb_submit">
            </div>
        </form>
            
    </div>

    <div class="ur_overlay">
        <form action="#">
            
        </form>
    </div>

    <?php  

    return ob_get_clean();
}