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

    <form action="" id="ur_dc_form">
        <div id="ur_dc">

            <div id="progressbar">
                <div class="ur_step_count">
                    <span class="ur_current_step">0</span>/<span class="ur_total_step">10</span> Completed
                </div>
                <div class="ur_bar" id="ur_bar">
                    <span class="ur_completed"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
            <h3>Q1. How many sectors are you invested in?</h3>    
            <section>
                <div class="q_group">

                    

                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/single_sector.svg">
                        <label for="">Single Factor</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/two_to_four.svg">
                        <label for="">Two to four</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q1" name="q1" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/more_than_four.svg">
                        <label for="">More than four</label>
                    </div>

                </div>

            </section>

            
            <h3>Q2. Is your portfolio highly exposed to market declines?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q2" name="q2" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/yes_very_much.svg">
                        <label for="">Yes, Very much</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q2" name="q2" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/somewhat.svg">
                        <label for="">Somewhat</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q2" name="q2" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/correlation_to_market.svg">
                        <label for="">My portfolio has a lowcorrelation to the market</label>
                    </div>

                </div>
            </section>
            
            
            <h3>Q3. Is your portfolio composed entirely of traditional asset classes (Stocks and bonds)?</h3>
            <section>

                <div class="q_group">
                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q3" name="q3" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/only_in_bonds.svg">
                        <label for="">Yes, I only invest in stocks and bonds</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q3" name="q3" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/small_exposure_to_others.svg">
                        <label for="">No, I have a small exposure to other asset classes</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q3" name="q3" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/balance_major_asset_classes.svg">
                        <label for="">I have a healthy balance among major asset classes</label>
                    </div>
                </div>

            </section>


            <h3>Q4. Are you diversified within each asset class you are invested in?</h3>
            <section>
                <div class="q_group">
                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q4" name="q4" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/single_investment_under_each_asset_class.svg" >
                        <label for="">I only have a single investment under each asset class</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q4" name="q4" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/two_to_four_investments_for_each_asset_class.svg" >
                        <label for="">Two to four investments for each asset class</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q4" name="q4" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/five_and_above_for_each_asset_class.svg" >
                        <label for="">Five and above for each asset class</label>
                    </div>
                </div>
            </section>


            <h3>Q5. Do you invest in both domestic markets and international markets?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q5" name="q5" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/only_domestically.svg">
                        <label for="">Only domestically</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q5" name="q5" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/small_portion_invested_in_global_markets.svg">
                        <label for="">Only a small portion invested in global markets</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q5" name="q5" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/significant_in_global_markets.svg">
                        <label for="">A significant portion of my portfolio is invested in global markets</label>
                    </div>

                </div>
            </section>


            <h3>Q6. Do your investments have a high level of correlation between them?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q6" name="q6" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/yes.svg">
                        <label for="">Yes</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q6" name="q6" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/no.svg">
                        <label for="">No</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q6" name="q6" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/low_correlation_to_the_market.svg">
                        <label for="">My portfolio has a low correlation to the market</label>
                    </div>

                </div>
            </section>


            <h3>Q7. Are your investments diversified by investment horizon?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q7" name="q7" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/short_term_investments.svg">
                        <label for="">No, I only focus on short-term investments</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q7" name="q7" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/somewhat_diversified.svg">
                        <label for="">Yes, my portfolio is somewhat diversified between short-term and long-term investments</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q7" name="q7" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/long_term_investments.svg">
                        <label for="">Yes, my portfolio is adequately invested in short-term, medium-term and long-term investments</label>
                    </div>

                </div>
            </section>


            <h3>Q8. Is a significant portion of your portfolio invested in a single sector, industry or entity?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q8" name="q8" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/specific_sector.svg">
                        <label for="">Yes, most of my investments are in a specific sector</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q8" name="q8" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/somewhat1.svg">
                        <label for="">Somewhat</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q8" name="q8" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/between_different_sectors.svg">
                        <label for="">No, my portfolio is divided adequately between different sectors/ industries</label>
                    </div>

                </div>
            </section>


            <h3>Q9. Does your portfolio have any exposure to alternative assets (e.g. illiquid markets such as private equity, real estate, and private credit)?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box">
                        <input type="radio" value="1" class="ur_cs_radio q9" name="q9" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/only_invest_in_traditional.svg">
                        <label for="">No, I only invest in traditional/ liquid assets</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="2" class="ur_cs_radio q9" name="q9" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/however_my_exposure_is_limited.svg">
                        <label for="">Yes, however my exposure to alternative asset classes is limited</label>
                    </div>
                    <div class="q_box">
                        <input type="radio" value="3" class="ur_cs_radio q9" name="q9" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/sufficient_exposure_alternative_asset_classes.svg">
                        <label for="">Yes, I have sufficient exposure to alternative asset classes</label>
                    </div>

                </div>
            </section>


            <h3>Q10. Is your portfolio diversified by vintage (i.e. were most of your investments made around the same time or were they staggered over a longer period)?</h3>
            <section>
                <div class="q_group">

                    <div class="q_box q_box10">
                        <input type="radio" value="1" class="ur_cs_radio q10" name="q10" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/single_year.svg">
                        <label for="">Most of my investments were made in a single year. </label>
                    </div>
                    <div class="q_box q_box10">
                        <input type="radio" value="2" class="ur_cs_radio q10" name="q10" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/more_than_year.svg">
                        <label for="">My investments were made in a few intervals over more than one year.</label>
                    </div>
                    <div class="q_box q_box10">
                        <input type="radio" value="3" class="ur_cs_radio q10" name="q10" hidden required>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/dc_icons/regularly_over_time.svg">
                        <label for="">I tend to invest regularly over time.</label>
                    </div>

                </div>
            </section>

        </div>
        
    </form>

    <div id="ur_dc_show_result">
        <p>Your diversified score</p>
        <h1 class="ur_dc_score">
            <span class="dc_obtained_score">27</span>/<span class="dc_total_score">30</span>
        </h1>
        <div class="dc_diversed_emojis">
            <div class="ur_dc_poorly_diversified">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M12.5967 0.548584C5.97668 0.548584 0.59668 5.92858 0.59668 12.5486C0.59668 19.1686 5.97668 24.5486 12.5967 24.5486C19.2167 24.5486 24.5967 19.1686 24.5967 12.5486C24.5967 5.92858 19.2167 0.548584 12.5967 0.548584ZM12.5967 22.9486C6.86668 22.9486 2.19668 18.2786 2.19668 12.5486C2.19668 6.81858 6.86668 2.14858 12.5967 2.14858C18.3267 2.14858 22.9967 6.81858 22.9967 12.5486C22.9967 18.2786 18.3267 22.9486 12.5967 22.9486Z" fill="white"></path>
                    <path d="M15.9164 17.3286C15.9164 17.7686 15.5564 18.1286 15.1164 18.1286C14.6764 18.1286 14.3164 17.7686 14.3164 17.3286C14.3164 16.8486 13.6064 16.3186 12.5964 16.3186C11.5864 16.3186 10.8764 16.8486 10.8764 17.3286C10.8764 17.7686 10.5164 18.1286 10.0764 18.1286C9.63637 18.1286 9.27637 17.7686 9.27637 17.3286C9.27637 15.8686 10.7364 14.7186 12.5964 14.7186C14.4564 14.7286 15.9164 15.8686 15.9164 17.3286Z" fill="white"></path>
                    <path d="M9.24703 10.1286C9.24703 11.0086 8.70703 11.6786 7.97703 11.6786C7.24703 11.6786 6.70703 11.0086 6.70703 10.1286C6.70703 9.24861 7.24703 8.57861 7.97703 8.57861C8.70703 8.57861 9.24703 9.24861 9.24703 10.1286Z" fill="white"></path>
                    <path d="M18.4863 10.1286C18.4863 11.0086 17.9463 11.6786 17.2163 11.6786C16.4963 11.6786 15.9463 11.0086 15.9463 10.1286C15.9463 9.24861 16.4863 8.57861 17.2163 8.57861C17.9363 8.57861 18.4863 9.24861 18.4863 10.1286Z" fill="white"></path>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="24" height="24" fill="white" transform="translate(0.59668 0.548584)"></rect>
                    </clipPath>
                    </defs>
                </svg>
                <p>Poorly Diversified</p>
            </div>
            <div class="ur_dc_well_diversified">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M12.8506 0.548584C6.23059 0.548584 0.850586 5.92858 0.850586 12.5486C0.850586 19.1686 6.23059 24.5486 12.8506 24.5486C19.4706 24.5486 24.8506 19.1686 24.8506 12.5486C24.8506 5.92858 19.4706 0.548584 12.8506 0.548584ZM12.8506 22.9486C7.12059 22.9486 2.45059 18.2786 2.45059 12.5486C2.45059 6.81858 7.12059 2.14858 12.8506 2.14858C18.5806 2.14858 23.2506 6.81858 23.2506 12.5486C23.2506 18.2786 18.5806 22.9486 12.8506 22.9486Z" fill="white"></path>
                    <path d="M15.8404 16.1986C15.8404 17.5386 14.5304 18.5986 12.8504 18.5986C11.1704 18.5986 9.86035 17.5486 9.86035 16.1986C9.86035 15.7586 10.2204 15.3986 10.6604 15.3986C11.1004 15.3986 11.4604 15.7586 11.4604 16.1986C11.4604 16.5786 12.0504 16.9986 12.8504 16.9986C13.6504 16.9986 14.2404 16.5786 14.2404 16.1986C14.2404 15.7586 14.6004 15.3986 15.0404 15.3986C15.4804 15.3986 15.8404 15.7586 15.8404 16.1986Z" fill="white"></path>
                    <path d="M9.50094 10.1286C9.50094 11.0086 8.96094 11.6786 8.23094 11.6786C7.50094 11.6786 6.96094 11.0086 6.96094 10.1286C6.96094 9.24861 7.50094 8.57861 8.23094 8.57861C8.96094 8.57861 9.50094 9.24861 9.50094 10.1286Z" fill="white"></path>
                    <path d="M18.7402 10.1286C18.7402 11.0086 18.2002 11.6786 17.4702 11.6786C16.7502 11.6786 16.2002 11.0086 16.2002 10.1286C16.2002 9.24861 16.7402 8.57861 17.4702 8.57861C18.1902 8.57861 18.7402 9.24861 18.7402 10.1286Z" fill="white"></path>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="24" height="24" fill="white" transform="translate(0.850586 0.548584)"></rect>
                    </clipPath>
                    </defs>
                </svg>
                <p>Well Diversified</p>
            </div>
        </div>
        <div class="ur-progress-status-bar">
            <span class="ur_status" style="left: 90%;"></span>
        </div>
        <div class="dc_recal_btn my-5">
            <a href="#">Recalculate</a>
        </div>
        <div class="ur_dc_cta">
            <div class="ur_dc_cta_content">
                <p>Let’s Build Your Diversification Strategy</p>
                <p>Find out what is the ideal portfolio allocation to achieve your financial goals</p>   
            </div>
            
            <div class="cta_btn">
                <a href="/financial-tools/portfolio-builder/">Try Portflio Planner</a>
            </div>
        </div>
    </div>

    <?php
    return ob_get_clean();
}
