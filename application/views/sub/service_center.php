
<section class="bg_purple section_center top_area">
    <h2>문의사항이 있나요?</h2>
    <h6 class=""><em>채팅창을 통해 문의하시면 빠르고 정확한 안내가 가능합니다.</em></h6>
</section>
<section class="section_center pt0">
    <div class="container">
        <div class="row hr">
            <div class="offset-lg-3 offset-md-2 offset-1 col-lg-6 col-md-8 col-10  pr0 pl0">
                <div class="ipt_div_wrapper">
                    <h2>고객센터 안내</h2>
                    <div class="client_center_div">
                        <img src="/images/common/support.png" alt="">
                        <div class="client_center_info">
                            <p class="client_tel">02-6085-8880</p>
                            <p>오전 8시 - 오후 10시<br>(연중 무휴로 운영됩니다)</p>
                            <p>서울 강남구 청담동 40-17, 3층</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="offset-lg-3 offset-md-2 offset-1 col-lg-6 col-md-8 col-10  pr0 pl0">
                <div class="ipt_div_wrapper">
                    <h2>자주 묻는 질문</h2>
                    <div class="custom_select_box">
                        <div class="choose_text">
                            가사도우미
                        </div>
                        <div class="triangle triangle_up"></div>
                        <div class="selectbox">
                            <div class="option">가사도우미</div>
                            <div class="option">침대 · 가전</div>
                            <div class="option">이사청소</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-3 offset-md-2 offset-1 col-lg-6 col-md-8 col-10  pr0 pl0">
                <div class="qna_list_wrapper">
                    <ul class="qna_list">
                        <li>
                            <h5 class="qna_list_title">언제까지 취소, 변경이 가능한가요?</h5>
                            <div class="qna_list_detail">
                                <p>서비스 시작 24시간 전에는 취소, 변경해주셔야 합니다. 그 이후에 취소, 변경요청을 하실 경우 위약금이 발생할 수 있습니다. 앱의 [문의하기]나 홈페이지의 [실시간 채팅]을 통해 연락주시면 예약취소 및 변경이 가능합니다.</p>
                            </div>
                        </li>
                        <li>
                            <h5 class="qna_list_title">언제까지 취소, 변경이 가능한가요?</h5>
                            <div class="qna_list_detail">
                                <p>서비스 시작 24시간 전에는 취소, 변경해주셔야 합니다. 그 이후에 취소, 변경요청을 하실 경우 위약금이 발생할 수 있습니다. 앱의 [문의하기]나 홈페이지의 [실시간 채팅]을 통해 연락주시면 예약취소 및 변경이 가능합니다.</p>
                            </div>
                        </li>
                        <li>
                            <h5 class="qna_list_title">언제까지 취소, 변경이 가능한가요?</h5>
                            <div class="qna_list_detail">
                                <p>서비스 시작 24시간 전에는 취소, 변경해주셔야 합니다. 그 이후에 취소, 변경요청을 하실 경우 위약금이 발생할 수 있습니다. 앱의 [문의하기]나 홈페이지의 [실시간 채팅]을 통해 연락주시면 예약취소 및 변경이 가능합니다.</p>
                            </div>
                        </li>
                        <li>
                            <h5 class="qna_list_title">언제까지 취소, 변경이 가능한가요?</h5>
                            <div class="qna_list_detail">
                                <p>서비스 시작 24시간 전에는 취소, 변경해주셔야 합니다. 그 이후에 취소, 변경요청을 하실 경우 위약금이 발생할 수 있습니다. 앱의 [문의하기]나 홈페이지의 [실시간 채팅]을 통해 연락주시면 예약취소 및 변경이 가능합니다.</p>
                            </div>
                        </li>
                        <li>
                            <h5 class="qna_list_title">언제까지 취소, 변경이 가능한가요?</h5>
                            <div class="qna_list_detail">
                                <p>서비스 시작 24시간 전에는 취소, 변경해주셔야 합니다. 그 이후에 취소, 변경요청을 하실 경우 위약금이 발생할 수 있습니다. 앱의 [문의하기]나 홈페이지의 [실시간 채팅]을 통해 연락주시면 예약취소 및 변경이 가능합니다.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function () {
        $(".menu-trigger").click(function () {
            $(this).toggleClass("active");
        });

        $(".custom_select_box").click(function () {
            $(".custom_select_box").toggleClass("open");

            if ($(this).hasClass("open")) {
                $(this).css("border", "1px solid #1082fc");
                $(this).find(".selectbox").show();
                $(this).find(".choose_text").addClass("choose_text_on");
                $(this).find(".triangle").removeClass("triangle_up");
                $(this).find(".triangle").addClass("triangle_down");
            } else {
                $(this).css("border", "2px solid #1082fc");
                $(this).find(".selectbox").hide();
                $(this).find(".choose_text").removeClass("choose_text_on");
                $(this).find(".triangle").addClass("triangle_up");
                $(this).find(".triangle").removeClass("triangle_down");
            }

            $(this).find(".option").click(function () {
                var text = $(this).text();
                $(this).parent().siblings(".choose_text").text(text);
            });
        });

        $(".qna_list_title").click(function () {

            $(".qna_list_detail").css("height", "1px");

            if ($(this).hasClass("on")) {
                $(this).removeClass("on");
                $(".qna_list_detail").css("height", "1px");
            } else {
                var height = $(this).siblings(".qna_list_detail").find("p").height();

                $(".qna_list_title").removeClass("on");
                $(this).addClass("on");
                $(this).siblings(".qna_list_detail").css("height", height + 60 + "px");
            }
        });

    });
</script>