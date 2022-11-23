jQuery(document).ready(function($) {
	// console.log('UR here!');
    
    

    $('.r_o_i_box').click(function () {
        // console.log("Box Clicked!");

        $('.r_o_i_box .r_o_i').removeAttr('checked');
        $(this).find('[name=r_o_i]').attr("checked", "checked");


        $('.r_o_i_box').removeClass('active');
        $(this).addClass('active');


        let val = $('input[name="r_o_i"]:checked').val();

        // console.log(val);

        ur_adding_disable(val);
    
    })

    

    function ur_adding_disable(val){
        // console.log("function called!", val);
        $('.r_o_i_box').removeClass('ur_disabled');
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
        $(".r_o_i_box.ur_disabled").unbind();
    }


});