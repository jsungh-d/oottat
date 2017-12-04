
<section class="bg_purple section_center top_area">
    <h2>우따와 함께할 실력있는 아티스트를 모집합니다</h2>
    <h6 class=""><em>베타서비스 기간으로 무료로 함께하세요</em></h6>
</section>
<section class="section_center pt0">
    <form action="" method="post">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 offset-md-2 offset-1 col-lg-6 col-md-8 col-10  pr0 pl0">
                    <div class="ipt_div_wrapper">
                        <h3>지원분야를 선택해주세요</h3>
                        <div class="checkdiv_area checkdiv_area_w100">
                            <label class="blue_checkdiv checkdiv">
                                <input type="radio" name="choice" value="">
                                <h5>아티스트</h5>
                            </label>
                            <!-- <label class="green_checkdiv checkdiv">
                                <input type="radio" name="choice" value="">
                                <h5>침대,가전청소</h5>
                            </label>
                            <label class="purple_checkdiv checkdiv">
                                <input type="radio" name="choice" value="">
                                <h5>이사 청소</h5>
                            </label> -->
                        </div>
                    </div>
                </div>
                <div class="offset-lg-3 offset-md-2 offset-1 col-lg-6 col-md-8 col-10  pr0 pl0">
                    <div class="ipt_div_wrapper">
                        <h3>이름과 연락처를 알려주세요</h3>
                        <div class="ipt_area">
                            <input type="text" placeholder="이름" name="">
                            <input type="text" placeholder="연락처" name="">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="btn_area">
                        <button type="submit" class="bnw_btn" disabled>미소에 지원하기</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        $(".menu-trigger").click(function () {
            $(this).toggleClass("active");
        });

        $(".checkdiv").click(function () {
            var index = $(this).index(".checkdiv");

            if (index == 0) {
                $(".top_area").removeClass("choice_bg_purple");
                $(".top_area").removeClass("choice_bg_green");
                $("button[type='submit']").removeClass("choice_bg_purple");
                $("button[type='submit']").removeClass("choice_bg_purple_b");
                $("button[type='submit']").removeClass("choice_bg_green");
                $("button[type='submit']").removeClass("choice_bg_green_b");
                $(".ipt_area input").removeClass("b_green");
                $(".ipt_area input").removeClass("b_purple");
                $(".top_area").addClass("choice_bg_blue");
                $("button[type='submit']").addClass("choice_bg_blue");
                $("button[type='submit']").addClass("choice_bg_blue_b");
                $(".ipt_area input").addClass("b_blue");
            } else if (index == 1) {
                $(".top_area").removeClass("choice_bg_purple");
                $(".top_area").removeClass("choice_bg_blue");
                $("button[type='submit']").removeClass("choice_bg_purple");
                $("button[type='submit']").removeClass("choice_bg_purple_b");
                $("button[type='submit']").removeClass("choice_bg_blue");
                $("button[type='submit']").removeClass("choice_bg_blue_b");
                $(".ipt_area input").removeClass("b_blue");
                $(".ipt_area input").removeClass("b_purple");
                $(".top_area").addClass("choice_bg_green");
                $("button[type='submit']").addClass("choice_bg_green");
                $("button[type='submit']").addClass("choice_bg_green_b");
                $(".ipt_area input").addClass("b_green");
            } else {
                $(".top_area").removeClass("choice_bg_blue");
                $(".top_area").removeClass("choice_bg_green");
                $("button[type='submit']").removeClass("choice_bg_blue");
                $("button[type='submit']").removeClass("choice_bg_blue_b");
                $("button[type='submit']").removeClass("choice_bg_green");
                $("button[type='submit']").removeClass("choice_bg_green_b");
                $(".ipt_area input").removeClass("b_green");
                $(".ipt_area input").removeClass("b_blue");
                $(".top_area").addClass("choice_bg_purple");
                $("button[type='submit']").addClass("choice_bg_purple");
                $("button[type='submit']").addClass("choice_bg_purple_b");
                $(".ipt_area input").addClass("b_purple");
            }
        });

        var input_val_flag1 = false;
        var input_val_flag2 = false;

        $(".ipt_area input").keyup(function (e) {
            if (!$.trim($(".ipt_area input").eq(0).val())) {
                input_val_flag1 = false;
            } else {
                input_val_flag1 = true;
            }

            if (!$.trim($(".ipt_area input").eq(1).val())) {
                input_val_flag2 = false;
            } else {
                input_val_flag2 = true;
            }

            if (!input_val_flag1 || !input_val_flag2) {
                $("button[type='submit']").prop("disabled", true);
            } else {
                $("button[type='submit']").prop("disabled", false);
            }
        });
    });
</script>