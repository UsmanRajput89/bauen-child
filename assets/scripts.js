jQuery(document).ready(function ($) {
    // console.log('UR here!');


    $('.roi_box_js').on('click', function () {

        $('input[name=r_o_i]').removeAttr('checked');
        $(this).find('input[name=r_o_i]').prop("checked", true);

        $('.roi_box_js').removeClass('active');
        $(this).addClass('active');



        let val = $("input[name=r_o_i]:checked").val();
        ur_adding_disable(val);

        change_values(val);
    });

    function ur_adding_disable(val) {

        $('.ioi_box').removeClass('active');
        // $('.ioi_box_2').addClass('active');

        $('.ioi_box').removeClass('ur_disabled');

        if (val == 4) {
            $('.ioi_box_3, .ioi_box_4, .ioi_box_5').addClass('ur_disabled');
        }
        if (val == 6) {
            $('.ioi_box_4, .ioi_box_5').addClass('ur_disabled');
        }
        if (val == 8) {
            $('.ioi_box_5').addClass('ur_disabled');
        }
        if (val == 10) {
            $('.ioi_box_1').addClass('ur_disabled');
        }


    }


    $('.ioi_box').on('click', function () {

        $('.ioi_box .i_o_i').removeAttr('checked');
        $(this).find('[name=i_o_i]').prop("checked", true);

        $('.ioi_box').removeClass('active');
        $(this).addClass('active');

    });


    $('#ur_pb_form').on('submit', function (e) {
        e.preventDefault();

        $('.ur_overlay_bg').fadeIn();
    })

    function change_values(val) {
        if (val == 4) {
            head = "Conservative";
            para = "You are a conservative investor. You seek to preserve your wealth while earning modest returns. You do not like the idea of a market downturn and will prepare ahead of time to minimize losses during such events. You wish to achieve consistent returns even if it means giving up some upside."
        }
        if (val == 6) {
            head = "Moderately Conservative";
            para = "You are a balanced investor who leans towards slightly below average risk. You seek good returns while ensuring a minimum level of consistent returns. You do not panic in a market downturn, but you are cautious. You try to balance between risk and reward without either excessive risk or minimal returns.";
        }
        if (val == 8) {
            head = "Moderately Aggressive";
            para = "You are a balanced investor who leans towards slightly above average risk. You seek above average returns while limiting potential downside. You do not panic in a market downturn. You try to balance between risk and reward, but prefer higher returns even if it means slightly higher risk";
        }
        if (val == 10) {
            head = "Aggressive";
            para = "You are an aggressive investor. You have exceptional tolerance for market fluctuations. You are willing to accept losses for a chance to earn higher returns. You seek higher returns even if it means sacrificing consistent returns in the short term. You muster your emotions in a market downturn and stick to your investment plan.";
        }

        $('#ur_result_head').html(head);
        $('#ur_result_para').html(para);
    }

    $('.ur_modal_close').click(function (e) {
        $('.ur_overlay_bg').fadeOut();
    });

    $('#ur_contact_form').on('submit', function (e) {

        e.preventDefault();

        $('.ur_overlay_bg').fadeOut();
        $('.ur_btn').fadeOut();

        let val = $("input[name=r_o_i]:checked").val();

        change_values(val);

        // let formData = new FormData(this);
        // formData.append('action', 'for_sending_mail');
        // $.ajax({
        //     type: "POST",
        //     url: frontendajax.ajaxurl,
        //     data: formData,
        //     contentType: false,
        //     processData: false,
        //     success: function(response){
        //         console.log("Mail sent Success!");
        //     },
        // });



        $('.ur_result').show();

        $(this).trigger("reset");

    });

    $(document).on('mouseenter', ".ur_disabled", function () {
        // console.log("Disabled hovered!");
        $(this).find(".ur_tooltip").fadeIn();
    })
    $(document).on('mouseleave', ".ur_disabled", function () {
        // console.log("Disabled hovered!");
        $(this).find(".ur_tooltip").fadeOut();
    })

    // ----------------------------------------------------
    //          Diversification Calculator
    // ----------------------------------------------------

    $("#ur_dc").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "none",
        autoFocus: true,
        labels: {
            previous: "<i class='ti-angle-left'></i> Go Back",
        }
    });

    var steps_count_dc = 1;

    $("#ur_rf").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "none",
        autoFocus: true,
        labels: {
            previous: "<i class='ti-angle-left'></i> Go Back",
        }
    });

    var steps_count_rf = 1;


    $('#ur_dc .actions a[href=#next]').attr('id', 'ur_cs_next');
    $('#ur_dc .actions a[href=#previous]').attr('id', 'ur_cs_prev');

    $('#ur_rf .actions a[href=#next]').attr('id', 'ur_rf_next');
    $('#ur_rf .actions a[href=#previous]').attr('id', 'ur_rf_prev');

    $("#ur_cs_prev").click(function () {
        steps_count_dc--;
        ur_steps_change_dc(steps_count_dc);
    });

    $("#ur_rf_prev").click(function () {
        steps_count_rf--;
        ur_steps_change_rf(steps_count_rf);
    })



    $(".q_box").on('click', function () {

        $(this).siblings('.q_box').removeClass('selected');
        $(this).find('.ur_cs_radio').prop("checked", true);
        $(this).addClass('selected');

        let ur_wizard = $(this).parents('.ur_wizard').data('info');

        if (ur_wizard == "rf") {
            $('#ur_rf_next').click();
            steps_count_rf++;
            ur_steps_change_rf(steps_count_rf);
        } else {
            $('#ur_cs_next').click();
            steps_count_dc++;
            ur_steps_change_dc(steps_count_dc);
        }

    });


    function ur_steps_change_dc(steps_count) {

        if (steps_count <= 10) {
            $('#ur_bar span').removeClass("ur_completed");
            let ur_steps = document.getElementById('ur_bar').children;

            let a_step = (steps_count).toLocaleString('en-US', { minimumIntegerDigits: 2, useGrouping: false });
            $('.ur_current_step').html(a_step);
            for (var i = 0; i < steps_count; i++) {
                let class_list = ur_steps[i].classList;
                class_list.add("ur_completed");
            }
            // }else if (steps_count == 11) {
        } else {

            var inputs = $('#ur_dc_form input:checked');

            var values = {};
            var total = 0;
            inputs.each(function () {
                let val = Number($(this).val());
                values[this.name] = val;
                total += val;
            });

            let total_per = (total / 30) * 100;

            $('.dc_obtained_score').html(total);
            $('.ur_status').css('left', total_per + '%');

            


            $('.ur_overlay_bg').fadeIn();
            // $('#ur_dc_show_result').fadeIn();
        }

    }

    $('#ur_contact_form_dc').on('submit', function (e) {

        e.preventDefault();
        $('.ur_overlay_bg').fadeOut();
        $('#ur_dc_form').fadeOut();
        $('#ur_dc_show_result').fadeIn();

        $(this).trigger("reset");
    });




    function ur_steps_change_rf(steps_count) {
        // console.log(steps_count);
        if (steps_count <= 6) {
            $('#ur_bar span').removeClass("ur_completed");
            let ur_steps = document.getElementById('ur_bar').children;

            let a_step = (steps_count).toLocaleString('en-US', { minimumIntegerDigits: 2, useGrouping: false });
            $('.ur_current_step').html(a_step);

            for (var i = 0; i < steps_count; i++) {
                let class_list = ur_steps[i].classList;
                class_list.add("ur_completed");
            }
        } else {

            // console.log("6 steps Completed");
            let q1 = $("input[name=q1]:checked").val();
            let q2 = $("input[name=q2]:checked").val();
            let q3 = $("input[name=q3]:checked").val();
            let q4 = $("input[name=q4]:checked").val();
            let q5 = $("input[name=q5]:checked").val();
            let q6 = $("input[name=q6]:checked").val();


            let risk_profiler = Number(q1) + Number(q4) + Number(q6);
            let responsive_level = Number(q2) + Number(q3) + Number(q5);

            let rp_title;
            let rp_subtext;
            let rp_text;
            if (risk_profiler <= 4) {
                rp_title = "Conservative";
                rp_subtext = "Risk Averse";
                rp_text = "You are a conservative investor seeking to preserve your wealth while earning modest but consistent periodic returns, even if overall investment returns are lower. You do not like market downturns and will prepare ahead of time to minimize losses during such events.";
            } else if (risk_profiler <= 7) {
                rp_title = "Balanced";
                rp_subtext = "Moderate Risk Taker";
                rp_text = "You are a balanced investor seeking moderate returns while ensuring a minimum periodic income. You don’t panic during a market downturn, but you will be cautious. You try to balance risk and reward and do not like excessive risk or minimal returns.";
            } else {
                rp_title = "Adventurer";
                rp_subtext = "Risk Seeker";
                rp_text = "You have a high risk tolerance and can withstand market fluctuations more than others. A chance to earn higher returns does not discourage you from accepting short-term losses and forgoing periodical income. In a market downturn, you can control your emotions and stick to your investment plan.";
            }

            $("#ur_df_show_result .rp_title").html(rp_title);
            $("#ur_df_show_result .rp_subtext").html(rp_subtext);
            $("#ur_df_show_result .rp_text").html(rp_text);

            let rp_res_title;
            let rp_res_subtext;
            let rp_res_text;

            if (responsive_level <= 4) {
                rp_res_title = "Calm Responder";
                rp_res_subtext = "Low Responsiveness";
                rp_res_text = "You take your time to understand new information to make the right decision regardless of time constraints. It is easy for you to stick to your investment plan even during market volatility. You tend not to check your portfolio very frequently.";
            } else if (responsive_level <= 7) {
                rp_res_title = "Paced Responder";
                rp_res_subtext = "Medium Responsiveness";
                rp_res_text = "You do NOT act impulsively to new information but try to make an informed decision by monitoring the situation and doing your own research. During market volatility, you can stick to your investment plan even if it is uncomfortable but may deviate if you get too uncomfortable. You tend to review your portfolio regularly.";
            } else {
                rp_res_title = "Fast Responder";
                rp_res_subtext = "High Responsiveness";
                rp_res_text = "You react quickly and make quick decisions in response to new information even if the full picture is not yet visible. Market volatility is extremely uncomfortable, forcing you to act immediately. You tend to check your portfolio very frequently even if you have a long-term investment plan.";
            }
            $("#ur_df_show_result .rp_res_title").html(rp_res_title);
            $("#ur_df_show_result .rp_res_subtext").html(rp_res_subtext);
            $("#ur_df_show_result .rp_res_text").html(rp_res_text);



            // $('#ur_rf_form').fadeOut();
            $('.ur_overlay_bg').fadeIn();
        }
    }


    $('#ur_contact_form_rf').on('submit', function (e) {

        e.preventDefault();


        $('.ur_overlay_bg').fadeOut();

        $('#ur_rf_form').fadeOut();
        $('#ur_df_show_result').fadeIn();

        // sendcontact();



        $(this).trigger("reset");

    });

    // function sendcontact() {
    //     console.log("This will send mail HF!");
        
        
    // }

    // function sendcontact() {
    //     Email.send({
    //         Host: "mail.reabus.me",
    //         Username: "salman@reabus.me",
    //         Password: "c++VB6.0",
    //         To: 'usmanrana18989@gmail.com',
    //         From: "cont@reabus.me",
    //         Subject: "This is the subject",
    //         Body: "And this is the body"
    //     }).then(
    //         message => alert(message)
    //     );
    // }
});