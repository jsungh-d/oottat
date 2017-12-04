
<section class="bg_purple top_area section_center">
    <h2>아티스트와 작품을 제안드립니다</h2>
    <h6 class=""><em>아래 양식을 작성해주세요</em></h6>
</section>
<form id="data_form" action="/index.php/dataFunction/insQuoteContact" class="text_gray_area" enctype="multipart/form-data" method="post">
    <section class="section_center">
        <h2 class="top_heading_text">원하는 스타일</h2>
        <div class="btn_width_fix ask_img_ipt_area">
            <label class="bg_checkdiv">
                <input type="radio" name="type" class="style_type" value="P" checked>
                <h5>사진 첨부</h5>
            </label>
            <label class="bg_checkdiv">
                <input type="radio" name="type" class="style_type" value="W">
                <h5>OOTTAT에 있어요</h5>
            </label>
            <label class="bg_checkdiv">
                <input type="radio" name="type" class="style_type" value="N">
                <h5>사진이 없어요 ㅠ.ㅠ</h5>
            </label>
        </div>
        <div class="cust_file_div_wrapper">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="cust_file_div select_type_a">
                    <label style="width:100%; height:100%; padding:0;">
                        <input type="file" class="cust_ipt ipt_file" name="file[]" accept="image/*">
                        <img src="" class="cust_ipt_img" alt="">
                    </label>
                    <span class="line_vert"></span>
                    <span class="line_hori"></span>
                    <img class="hover_delete x" src="/images/btn/cross.png" alt="">
                </div>
            <?php } ?>

            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="cust_file_div select_type_b">
                    <label style="width:100%; height:100%; padding:0;">
                        <img src="" class="cust_ipt_img" alt="">
                        <input type="hidden" name="work_idx[]" class="select_type_b_ipt">
                    </label>
                    <span class="line_vert"></span>
                    <span class="line_hori"></span>
                    <img class="hover_delete x" src="/images/btn/cross.png" alt="">
                </div>
            <?php } ?>

            <textarea name="contents" id="contents" placeholder="원하는 스타일을 적어주세요."></textarea>
        </div>
    </section>

    <!-- oottat에 있어요 모달 -->
    <div id="styleModal" title="" class="modal cust_modal style_modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">마음에 드는 추천 작품을 바로!</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" id="modal_row">

                        </div>
                        <div class="btn_area">
                            <input type="hidden" id="start" value="0">
                            <input type="hidden" id="limit" value="1">
                            <button type="button" class="dotted_btn" id="more_view_btn" value="1" data-bind="">더보기</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn antosubmit select_type_b_submit">선택</button>
                </div>
            </div>
        </div>
    </div>



    <section class="section_center section_md">
        <h2 class="top_heading_text">원하는 위치</h2>
        <div class="">
            <?php foreach ($part_lists as $row) { ?>
                <label class="bg_checkdiv">
                    <input type="checkbox" name="part[]" class="partChk" value="<?= $row['PART_IDX'] ?>">
                    <h5><?= $row['NAME'] ?></h5>
                </label>
            <?php } ?>
        </div>
    </section>
    <section class="section_center section_md">
        <h2 class="top_heading_text">사시는 곳</h2>
        <div class="">
            <?php foreach ($location_lists as $row) { ?>
                <label class="bg_checkdiv">
                    <input type="radio" name="location" class="locationChk" value="<?= $row['LOCATION_IDX'] ?>">
                    <h5><?= $row['NAME'] ?></h5>
                </label>
            <?php } ?>
        </div>
    </section>

    <section class="section_center section_md">
        <h2 class="top_heading_text">원하는 크기</h2>
        <div class="size_ipt_div">
            <h2>
                약
                <input type="text" pattern="[0-9]*" class="ipt width_ipt" name="size" maxlength="2" required>
                cm
            </h2>
            <button class="calc_btn" type="button" value="1"><h5>+</h5></button>
            <button class="calc_btn" type="button" value="-1"><h5>-</h5></button>
        </div>
    </section>

    <section class="section_center section_md">
        <h2 class="top_heading_text">원하는 날짜</h2>
        <div class="btn_width_fix">
            <label class="bg_checkdiv">
                <input type="radio" name="date_type" value="A" checked>
                <h5>아무때나</h5>
            </label>
            <label class="bg_checkdiv">
                <input type="radio" name="date_type" value="B">
                <h5>날짜선택</h5>
            </label>
        </div>

        <div class="datepicker_area" style="display:none;"></div>
        <input type="text" class="date" name="contact_date" style="display: none;">
    </section>

    <section class="section_center section_md">
        <h2 class="top_heading_text">이름과 연락처를 알려주세요</h2>
        <div class="info_ipt_area">
            <input type="text" class="ipt" name="name" placeholder="이름" maxlength="10" required>
            <input type="text" class="ipt" name="phone" pattern="[0-9]*" minlength="10" maxlength="11" placeholder="연락처('-'제외)" required>
        </div>
    </section>

    <section class="section_center section_md">
        <div class="btn_width_fix">
            <button type="submit" class="btn bnw_btn">의뢰하기</button>
        </div>
    </section>
</form>

<!-- 데이트피커 -->
<script type="text/javascript" src="/js/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/js/datepicker/bootstrap-datepicker.ko.js"></script>
<script type="text/javascript" src="/js/datepicker/daterangepicker.js"></script>

<script src="http://malsup.github.com/jquery.form.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $(".menu-trigger").click(function () {
            $(this).toggleClass("active");
        });
        $('.cust_file_div .cust_ipt').on('change', function () {
            var targeting = $(this).siblings(".cust_ipt_img");
            readURL(this, targeting);
        });
        $(".calc_btn").click(function () {
            if ($(".width_ipt").val()) {
                var result = parseInt($(".width_ipt").val()) + parseInt($(this).val());
                if (result >= 0) {
                    $(".width_ipt").val(result);
                } else {
                    return false;
                }
            } else {
                $(".width_ipt").val("0");
            }
        });
        $(".btn_width_fix button").click(function () {
            $(this).parent().find("button").removeClass("bnw_btn");
            $(this).parent().find("button").addClass("wnb_btn");
            $(this).addClass("bnw_btn");
            $(this).removeClass("wnb_btn");
        });
        
        var dateToday = new Date();
        // 데이터피커(달력 그리기)
        $('.datepicker_area').datepicker({
            language: "ko",
            // 월 선택 년도 선택 불가 하게 만드는 옵션
            maxViewMode: 0,
            startDate: dateToday,
            todayHighlight: true
        }).datepicker("setDate", "0")
                .on('changeDate', function (ev) {
                    $('.date').val(ev.format());
                });
        // 버튼에 따라 인풋 disable 시키기
        $("input[name='date_type']").change(function () {
            if ($(this).val() == "B") {
                $(".datepicker_area").show();
//                            $(".date").prop("disabled", false);
                $(".date").val('<?= date('Y-m-d') ?>');
            } else {
                $(".datepicker_area").hide();
//                            $(".date").prop("disabled", true);
                $(".date").val('');
            }
        });
        $("input[name='type']").click(function () {
            // oottat에 있어요 선택 시
            if ($(this).val() === "W") {

                // 파일 첨부 영역을 disabled 하고 숨긴다.
                $(".cust_file_div").show();
                $(".select_type_a").find("input").prop("disabled", true);
                $(".select_type_b_ipt").prop("disabled", false);
                $(".select_type_b").css('display', 'inline-block');
                $(".select_type_a").hide();
            } else if ($(this).val() === "N") {
                $(".cust_file_div").hide();
                $(".select_type_a").find("input").prop("disabled", true);
                $(".select_type_b_ipt").prop("disabled", true);
            } else {
                // 모달 이미지 선택 영역을 disabled 하고 숨긴다.
                $(".cust_file_div").show();
                $(".select_type_b_ipt").prop("disabled", true);
                $(".select_type_a").find("input").prop("disabled", false);
                $(".select_type_a").css('display', 'inline-block');
                $(".select_type_b").hide();
            }
        });
//        모달 열기
        $(".select_type_b").click(function () {

            $.ajax({
                dataType: 'text',
                url: '/index.php/dataFunction/getWorkCnt',
                success: function (data, status, xhr) {
                    if (data !== 'FAILED') {
                        $("#more_view_btn").attr('data-bind', data);
                    } else {
                        alert("데이터 처리오류!!");
                        return false;
                    }
                }
            });
            var check_number = '';
            $(".select_type_b_ipt").each(function (index) {
                if ($(this).val()) {
                    check_number += $(this).val() + ",";
                }
            });
            var appNum = check_number.substr(0, check_number.length - 1);
            var data = {limit: $("#limit").val(), start: $("#start").val(), appNum: appNum};
            $.post("/index.php/dataFunction/getWorkList", data, function (data) {
                $("#modal_row").html(data);
                $("#styleModal").modal();
                if (parseInt($("#more_view_btn").attr('data-bind')) <= parseInt($(".img_row").length)) {
                    $("#more_view_btn").hide();
                } else {
                    $("#more_view_btn").show();
                }

            });
        });
        $("#more_view_btn").click(function () {

            $.ajax({
                dataType: 'text',
                url: '/index.php/dataFunction/getWorkCnt',
                success: function (data, status, xhr) {
                    if (data !== 'FAILED') {
                        $("#more_view_btn").attr('data-bind', data);
                    } else {
                        alert("데이터 처리오류!!");
                        return false;
                    }
                }
            });
            if ($(this).attr('data-bind') <= $(".img_row").length) {
                $(this).hide();
            } else {

                var check_number = '';
                $(".select_type_b_ipt").each(function (index) {
                    if ($(this).val()) {
                        check_number += $(this).val() + ",";
                    }
                });
                var appNum = check_number.substr(0, check_number.length - 1);
                var data = {limit: $(this).val(), start: $(".img_row").length, appNum: appNum};
                $.post("/index.php/dataFunction/getWorkList", data, function (data) {

                    $("#modal_row").append(data);
                    $("#start").val('0');
                    $("#limit").val($(".img_row").length);
                    if ($("#more_view_btn").attr('data-bind') <= $(".img_row").length) {
                        $("#more_view_btn").hide();
                    } else {
                        $("#more_view_btn").show();
                    }
                });
                $(this).show();
            }
        });
        $('.check_ipt').change(function () {
//체크된 항목 갯수 검사
            if (checkboxCount() == false) {
                $(this).prop('checked', false);
            }
        });
        $(".select_type_b_submit").click(function () {
// 값 비우기
            $(".select_type_b").find('.cust_ipt_img').attr('src', '');
            $(".select_type_b").find('.select_type_b_ipt').val('');
            var objArray = getChk();
            objArray = objArray.split(',');
            for (var i = 0; i < objArray.length; i++) {
                $(".select_type_b").eq(i).find('.cust_ipt_img').attr('src', objArray[i]);
            }
            ;
            var objHiddenArray = getHiddenChk();
            objHiddenArray = objHiddenArray.split(',');
            for (var i = 0; i < objHiddenArray.length; i++) {
                $(".select_type_b").eq(i).find('.select_type_b_ipt').val(objHiddenArray[i]);
            }
            ;
            $("#styleModal").modal('hide');
        });

        $("#data_form").ajaxForm({
            beforeSubmit: formChk,
            success: function (data) {
                if (data == 'SUCCESS') {
                    alert("요청되었습니다.");
                    location.reload();
                    return false;
                } else if (data == 'FAILED') {
                    alert('데이터 처리오류!!');
                    return false;
                } else {
                    alert('데이터 처리오류!!');
                    return false;
                }
            }
        });
    });
    //이미지 바꾸는 함수
    function readURL(input, targeting) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                targeting.attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
//체크된 항목 갯수 검사
    function checkboxCount() {
        if ($('.check_ipt:checked').length > 3) {
            alert('최대 3개까지 선택할 수 있습니다.');
            return false;
        }
    }

//체크된 항목의 이미지 값 리턴하기    
    function getChk() {
        var chk_val = "";
        $(".check_ipt:checked").each(function (index, obj) {
            chk_val += "," + obj.value;
        });
        if (chk_val != "") {
            chk_val = chk_val.substring(1);
        }

        return chk_val;
    }

    //체크된 항목의 히든 값 리턴하기    
    function getHiddenChk() {
        var chk_val = "";
        $(".check_ipt:checked").each(function (index, obj) {
            chk_val += "," + $(obj).siblings('.img_selected_idx').val();
        });
        if (chk_val != "") {
            chk_val = chk_val.substring(1);
        }

        return chk_val;
    }

    function formChk() {

        var style_type = $(".style_type:checked").val();
        var check_file = '';
        $(".ipt_file").each(function (index) {
            if ($(this).val()) {
                check_file += $(this).val() + ",";
            }
        });
        var check_number = '';
        $(".select_type_b_ipt").each(function (index) {
            if ($(this).val()) {
                check_number += $(this).val() + ",";
            }
        });
        var contents = $("#contents").val();

        var cnt = $(".partChk:checked").length;
        var cnt2 = $(".locationChk:checked").length;

        if (!check_file && style_type === 'P') {
            alert("사진을 하나이상 선택해주세요.");
            return false;
        } else if (!check_number && style_type === 'W') {
            alert("작품을 하나이상 선택해주세요.");
            return false;
        } else if (!$.trim(contents) && style_type === 'N') {
            alert("원하는 스타일을 입력해주세요.");
            return false;
        } else if (cnt == 0) {
            alert("부위를 선택하세요.");
            return false;
        } else if (cnt2 == 0) {
            alert("사시는곳을 선택하세요.");
            return false;
        } else {
            return true;
        }
    }
</script>