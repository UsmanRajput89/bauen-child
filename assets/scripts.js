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
        $('.ioi_box_2').addClass('active');

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

        let val = $("input[name=r_o_i]:checked").val();

        change_values(val);

        $('.ur_result').show();

        $(this).trigger("reset");
    });

    // 
    // 
    // 
    // 

    $("#ur_dc").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "none",
        autoFocus: true,
        labels: {
            previous: "<i class='ti-angle-left'></i> Go Back",
        }
    });
    var steps_count = 1;

    $('#ur_dc .actions a[href=#next]').attr('id', 'ur_cs_next');
    $('#ur_dc .actions a[href=#previous]').attr('id', 'ur_cs_prev');

    $("#ur_cs_prev").click(function () {
        steps_count-- ;
        
        console.log(steps_count);

        ur_steps_change(steps_count);
    })

    

    $(".q_box").on('click', function () {

        $(this).siblings('.q_box').removeClass('selected');
        $(this).find('.ur_cs_radio').prop("checked", true);
        $(this).addClass('selected');

        // let val = $("input[name=r_o_i]:checked").val();

        $('#ur_cs_next').click();

        steps_count++;
        console.log(steps_count);
        ur_steps_change(steps_count);

    });

    $(".q_box10").on('click', function () {

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

        $('#ur_dc_form').fadeOut();
        $('#ur_dc_show_result').fadeIn();

    });

    function ur_steps_change(steps_count){
        $('#ur_bar span').removeClass("ur_completed");
        
        let ur_steps = document.getElementById('ur_bar').children;
        

        for (var i = 0; i < steps_count; i++) {
            let class_list = ur_steps[i].classList;
            class_list.add("ur_completed");
        }
    }




});