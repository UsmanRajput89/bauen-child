<?php
add_shortcode("ur_risk_profiler", "ur_risk_profiler_html");

function ur_risk_profiler_html()
{
    $ob = ur_risk_profiler_fn();
    return $ob;
}

function ur_risk_profiler_fn()
{
    ob_start(); ?>

    <form action="" id="ur_rf_form" >
        <div id="ur_rf" class="ur_wizard" data-info="rf">

            <div id="progressbar">
                <div class="ur_step_count">
                    <span class="ur_current_step">01</span>/<span class="ur_total_step">06</span> Completed
                </div>
                <div class="ur_bar" id="ur_bar">
                    <span class="ur_completed"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
            <h3>Q1. Where do you see yourself with regards to taking investment risks?</h3>    
            <section>
                <div class="q_group ">
                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/safer_the_better.svg">
                        <label for="">The safer the better</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/the _golden_middle.svg">
                        <label for="">The golden middle</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/high_risks_high_rewards.svg">
                        <label for="">High risk, high reward</label>
                    </div>

                </div>

            </section>

            
            <h3>Q2. How often do you buy or sell investments?</h3>
            <section>
                <div class="q_group">
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q2" name="q2" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/weekly.svg">
                        <label for="">Weekly</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q2" name="q2" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/monthly.svg">
                        <label for="">Monthly</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q2" name="q2" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/yearly.svg">
                        <label for="">Yearly</label>
                    </div>

                </div>
            </section>
            
            
            <h3>Q3. How would you react to financial losses?</h3>
            <section>
                <div class="q_group">
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q3" name="q3" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/sell_immediately.svg">
                        <label for="">Sell immediately</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q3" name="q3" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/patience_and_reassess.svg">
                        <label for="">Be patient and reassess</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q3" name="q3" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/stick_to_investment_plan.svg">
                        <label for="">Stick to my investment plan</label>
                    </div>
                </div>

            </section>


            <h3>Q4. Are you willing to put a significant part of your wealth in high risk investment?</h3>
            <section>
                <div class="q_group">
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q4" name="q4" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/yes.svg" >
                        <label for="">Yes</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q4" name="q4" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/no.svg" >
                        <label for="">No</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q4" name="q4" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/not_sure.svg" >
                        <label for="">Not Sure</label>
                    </div>
                </div>
            </section>


            <h3>Q5. How often would you like to oversee your portfolio?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q5" name="q5" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/weekly.svg">
                        <label for="">Weekly</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q5" name="q5" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/monthly.svg">
                        <label for="">Monthly</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q5" name="q5" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/yearly.svg">
                        <label for="">Yearly</label>
                    </div>

                </div>
            </section>


            <h3>Q6. Would you risk losing some money for the chance to gain?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q6" name="q6" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/yes.svg">
                        <label for="">Yes</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q6" name="q6" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/no.svg">
                        <label for="">No</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q6" name="q6" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/rf_icons/not_sure.svg">
                        <label for="">Not Sure</label>
                    </div>

                </div>
            </section>



        </div>
        
    </form>

    <div id="ur_df_show_result">
        <div class="df_res_wrapper">

            <div class="ur_risk_profile">
                <p>Risk Profile</p>
                <h3 class="rp_title">Balanced</h3>
                <h6 class="rp_subtext">Moderate Risk Taker</h6>
                <p class="rp_text">You are a balanced investor seeking moderate returns while ensuring a minimum periodic income. You don’t panic during a market downturn, but you will be cautious. You try to balance risk and reward and do not like excessive risk or minimal returns.</p>
            </div>

            <div class="ur_responsive_level">
                <p>Responsiveness Level</p>
                <h3 class="rp_res_title">Fast Responder</h3>
                <h6 class="rp_res_subtext">High Responsiveness</h6>
                <p class="rp_res_text">You react quickly and make quick decisions in response to new information even if the full picture is not yet visible. Market volatility is extremely uncomfortable, forcing you to act immediately. You tend to check your portfolio very frequently even if you have a long-term investment plan.</p>
            </div>
        </div>
        <div class="rf_btn_div">
            <a href="#" class="rf_btn" onClick="history.go(0);">Recalculate Risk</a>
        </div>
    </div>
    

    <div class="ur_overlay_bg" id="ur_overlai">
        <div class="ur_overlay">
            <div class="ur_modal_head">
                <h5>Potential Portfolio</h5>
                <div class="ur_modal_close">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/closeIcon.svg" alt="">
                </div>
            </div>
            <!-- <p class="ur_disclaimer">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi temporibus tempora inventore assumenda laudantium.
            </p> -->
            <!-- <form action="#" id="ur_contact_form_rf" class="ur_contact_form" method="POST">
                <div class="ur_row">
                    <div class="ur_col">
                        <label for="first_name">First Name*</label>
                        <input type="text" name="first_name" required>
                    </div>
                    <div class="ur_col">
                        <label for="last_name">Last Name*</label>
                        <input type="text" name="last_name" required>
                    </div>
                </div>
                <div class="ur_row">
                    <div class="ur_col">
                        <label for="email">Email*</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="ur_col">
                        <label for="number">Phone Number*</label>
                        <input type="text" name="number" required>
                    </div>
                </div>
                <input type="checkbox" name="t_c" required>
                <label for="">Agree on Term and Conditions</label>
                <br>
                <button type="submit" id="ur_contact_form_btn">Check my Results</button>
            </form> -->

            <?php echo do_shortcode( '[contact-form-7 id="790" html_id="ur_contact_form_rf" html_class="ur_contact_form" title="pf form"]' );?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
