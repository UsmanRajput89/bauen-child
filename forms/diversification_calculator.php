<?php
add_shortcode("ur_diversification_calculator", "ur_diversification_calculator_html");

function ur_diversification_calculator_html()
{
    $ob = ur_diversification_calculator_fn();
    return $ob;
}

function ur_diversification_calculator_fn()
{
    ob_start(); ?>
    <form action="">
        <div id="ur_dc">

            <h3>Q1. How many sectors are you invested in?</h3>    
            <section>
                <div class="q_group">

                    

                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/single_sector.svg" alt="">
                        <label for="">Single Factor</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/two_to_four.svg" alt="">
                        <label for="">Two to four</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/more_than_four.svg" alt="">
                        <label for="">More than four</label>
                    </div>

                </div>

            </section>

            
            <h3>Q2. Is your portfolio highly exposed to market declines?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/yes_very_much.svg">
                        <label for="">Yes, Very much</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/somewhat.svg">
                        <label for="">Somewhat</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/correlation_to_market.svg">
                        <label for="">My portfolio has a lowcorrelation to the market</label>
                    </div>

                </div>
            </section>
            
            
            <h3>Q3. Is your portfolio composed entirely of traditional asset classes (Stocks and bonds)?</h3>
            <section>

                <div class="q_group">
                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/only_in_bonds.svg" alt="">
                        <label for="">Yes, I only invest in stocks and bonds</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/small_exposure_to_others.svg" alt="">
                        <label for="">No, I have a small exposure to other asset classes</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/balance_major_asset_classes.svg" alt="">
                        <label for="">I have a healthy balance among major asset classes</label>
                    </div>
                </div>

            </section>


            <h3>Q4. Are you diversified within each asset class you are invested in?</h3>
            <section>
                <div class="q_group">
                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/single_investment_under_each_asset_class.svg" >
                        <label for="">I only have a single investment under each asset class</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/two_to_four_investments_for_each_asset_class.svg" >
                        <label for="">Two to four investments for each asset class</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/five_and_above_for_each_asset_class.svg" >
                        <label for="">Five and above for each asset class</label>
                    </div>
                </div>
            </section>


            <h3>Q5. Do you invest in both domestic markets and international markets?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/only_domestically.svg" alt="">
                        <label for="">Only domestically</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/small_portion_invested_in_global_markets.svg" alt="">
                        <label for="">Only a small portion invested in global markets</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/significant_in_global_markets.svg" alt="">
                        <label for="">A significant portion of my portfolio is invested in global markets</label>
                    </div>

                </div>
            </section>


            <h3>Q6. Do your investments have a high level of correlation between them?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/yes.svg" alt="">
                        <label for="">Yes</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/no.svg" alt="">
                        <label for="">No</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/low_correlation_to_the_market.svg" alt="">
                        <label for="">My portfolio has a low correlation to the market</label>
                    </div>

                </div>
            </section>


            <h3>Q7. Are your investments diversified by investment horizon?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/short_term_investments.svg">
                        <label for="">No, I only focus on short-term investments</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/somewhat_diversified.svg">
                        <label for="">Yes, my portfolio is somewhat diversified between short-term and long-term investments</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/long_term_investments.svg">
                        <label for="">Yes, my portfolio is adequately invested in short-term, medium-term and long-term investments</label>
                    </div>

                </div>
            </section>


            <h3>Q8. Is a significant portion of your portfolio invested in a single sector, industry or entity?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/specific_sector.svg">
                        <label for="">Yes, most of my investments are in a specific sector</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/somewhat1.svg">
                        <label for="">Somewhat</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/between_different_sectors.svg">
                        <label for="">No, my portfolio is divided adequately between different sectors/ industries</label>
                    </div>

                </div>
            </section>


            <h3>Q9. Does your portfolio have any exposure to alternative assets (e.g. illiquid markets such as private equity, real estate, and private credit)?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/only_invest_in_traditional.svg" alt="">
                        <label for="">No, I only invest in traditional/ liquid assets</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/however_my_exposure_is_limited.svg" alt="">
                        <label for="">Yes, however my exposure to alternative asset classes is limited</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/sufficient_exposure_alternative_asset_classes.svg" alt="">
                        <label for="">Yes, I have sufficient exposure to alternative asset classes</label>
                    </div>

                </div>
            </section>


            <h3>Q10. Is your portfolio diversified by vintage (i.e. were most of your investments made around the same time or were they staggered over a longer period)?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/single_year.svg" alt="">
                        <label for="">Most of my investments were made in a single year. </label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/more_than_year.svg" alt="">
                        <label for="">My investments were made in a few intervals over more than one year.</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/regularly_over_time.svg" alt="">
                        <label for="">I tend to invest regularly over time.</label>
                    </div>

                </div>
            </section>
        </div>
    </form>
    <?php
    return ob_get_clean();
}
