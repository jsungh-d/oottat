
<section class="bg_purple top_area section_center">
    <h2>아티스트와 작품을 제안드립니다</h2>
    <h6 class=""><em>아래 양식을 작성해주세요</em></h6>
</section>
<section>
    <div class="list_top_div">
        <h4 class="list_top_div_title"><?= $info->TITLE ?></h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="list_top_div_img" style="background-image: url('<?= $info->IMG ?>');"></div>
                </div>
                <div class="col-sm-4">
                    <div class="list_top_div_text">
                        <h6 class="title">작품 설명</h6>
                        <h6 class="detail">
                            <?= nl2br($info->CONTENTS) ?>
                        </h6>
                        <h6 class="title">스타일</h6>
                        <h6 class="detail">
                            <?= $info->STYLE ?>
                        </h6>
                        <h6 class="title">작가 추천</h6>
                        <h6 class="detail">
                            <?= $info->RECOMMENDATION ?>
                        </h6>
                        <h6 class="title">위치</h6>
                        <h6 class="detail">
                            <?= $info->LOCATION ?>
                        </h6>
                        <!--                        <h6 class="title">작품가</h6>
                                                <h6 class="detail">
                                                    <span>05cm 이하 &#8361;150,000</span>
                                                    <span>10cm 이하 &#8361;200,000</span>
                                                    <span>10cm 이상 &#8361;300,000</span>
                                                </h6>-->
                    </div>
                    <div class="list_top_div_btn">
                        <button type="button" class="gray_btn">바로구매</button>
                        <button type="button" class="bnw_btn" onclick="openAskModal();">이런 스타일로 견적요청</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section_center bg_lightgray no_pd_section">
    <div class="view_title_div">
        <h5>#실제작업사례</h5>
        <h6>같은 시안으로 직업 작업한 사례입니다.</h6>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($cases_lists as $row) { ?>
                <div class="col-sm-4 col-6" style="padding-left: 3px; padding-right: 3px; cursor: pointer;">
                    <div class="img_box">
                        <div class='img_box_bg_img view_box_bg_img' style="background-image: url(<?= $row['IMG'] ?>)"></div>
                        <div class="overlay_black"></div>
                        <img class='view_detail_img' src='/images/common/search_white.png' alt="view detail">
                    </div>
                    <p class="img_box_detail_text">
                        <b><?= $row['COMMENT'] ?></b>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="view_title_div">
        <h5>#작가의 포트폴리오</h5>
        <h6>시안을 디자인한 작가의 다른 작품입니다.</h6>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($diff_lists as $row) { ?>
                <div class="col-sm-4 col-6" style="padding-left: 3px; padding-right: 3px; cursor: pointer;" onclick="location.href = '/index/work_view/<?= $row['WORK_IDX'] ?>/<?= $row['ARTIST_IDX'] ?>'">
                    <div class="img_box">
                        <div class='img_box_bg_img view_box_bg_img' style="background-image: url(<?= $row['IMG'] ?>)"></div>
                        <div class="overlay_black"></div>
                        <img class='view_detail_img' src='/images/common/search_white.png' alt="view detail">
                    </div>
                    <p class="img_box_detail_text">
                        <b><?= $row['TITLE'] ?></b>
                    </p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="section_center hr index_img_section">
    <h2 class="top_heading_text">편리한 OOTTAT 시스템</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="service_img">
                    <img src="/images/main/p1.png" alt="">
                </div>
                <div class="service_list">
                    <h5 class="heading_text">의뢰하기</h5>
                    <p>마음에 드는 작품, 원하는 스타일을 통해 맞춤 견적을 손쉽게 신청하세요</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_img">
                    <img src="/images/main/p2.png" alt="">
                </div>
                <div class="service_list">
                    <h5 class="heading_text">아티스트 제안</h5>
                    <p>실력있는 아티스트들이 의뢰 내용을 보고 맞춤 견적을 제안해드립니다.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service_img">
                    <img src="/images/main/p3.png" alt="">
                </div>
                <div class="service_list">
                    <h5 class="heading_text">관리자 안심 매니징</h5>
                    <p>아티스트 및 스타일 상담, 일정, 결제를 안전하게 추천 및 관리해드립니다.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- 견적 모달 모달 -->
<div id="askModal" title="" class="modal cust_modal ask_modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">원하는 스타일</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form id="data_form" action="/index.php/dataFunction/insQuoteContact" method="post">
                <input type="hidden" name="work_idx" value="<?= $info->WORK_IDX ?>">
                <input type="hidden" name="type" value="W">
                <input type="hidden" name="contents" value="">
                <div class="modal-body">
                    <div class="ask_modal_img">
                        <img src="<?= $info->IMG ?>" alt="">
                    </div>
                    <div class="">
                        <h4 class="top_heading_text">원하는 위치</h4>
                        <div class="">
                            <?php foreach ($part_lists as $row) { ?>
                                <label class="bg_checkdiv">
                                    <input type="checkbox" name="part[]" class="partChk" value="<?= $row['PART_IDX'] ?>">
                                    <h5><?= $row['NAME'] ?></h5>
                                </label>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="">
                        <h4 class="top_heading_text">사시는 곳</h4>
                        <div class="">
                            <?php foreach ($location_lists as $row) { ?>
                                <label class="bg_checkdiv">
                                    <input type="radio" name="location" class="locationChk" value="<?= $row['LOCATION_IDX'] ?>">
                                    <h5><?= $row['NAME'] ?></h5>
                                </label>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="">
                        <h4 class="top_heading_text">원하는 크기</h4>
                        <div class="size_ipt_div">
                            <h2>
                                약
                                <input type="text" pattern="[0-9]*" class="ipt width_ipt" name="size" maxlength="2" required>
                                cm
                            </h2>
                            <button class="calc_btn" type="button" value="1"><h5>+</h5></button>
                            <button class="calc_btn" type="button" value="-1"><h5>-</h5></button>
                        </div>
                    </div>
                    <div class="">
                        <h4 class="top_heading_text">원하는 날짜</h4>
                        <div class="btn_width_fix">
                            <label class="bg_checkdiv">
                                <input type="radio" name="date_type" value="A" checked>
                                <h5 style="padding: 5px 10px;">아무때나</h5>
                            </label>
                            <label class="bg_checkdiv">
                                <input type="radio" name="date_type" value="B">
                                <h5 style="padding: 5px 10px;">날짜선택</h5>
                            </label>
                        </div>

                        <div class="datepicker_area" style="display:none;"></div>
                        <input type="text" class="date" name="contact_date" style="display: none;">
                    </div>
                    <div class="">
                        <h4 class="top_heading_text">이름과 연락처를 알려주세요</h4>
                        <div class="info_ipt_area">
                            <input type="text" class="ipt" name="name" placeholder="이름" maxlength="10" required>
                            <input type="text" class="ipt" name="phone" pattern="[0-9]*" minlength="10" maxlength="11" placeholder="연락처('-'제외)" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn">의뢰하기</button>
                </div>
            </form>
        </div>
    </div>
</div>

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

                    $.fn.clearForm = function () {
                        return this.each(function () {
                            var type = this.type, tag = this.tagName.toLowerCase();
                            if (tag == 'form')
                                return $(':input', this).clearForm();
                            if (type == 'text' || type == 'password' || tag == 'textarea')
                                this.value = '';
                            else if (type == 'checkbox' || type == 'radio')
                                this.checked = false;
                            else if (tag == 'select')
                                this.selectedIndex = -1;
                        });
                    };

                    $("#data_form").ajaxForm({
                        beforeSubmit: formChk,
                        success: function (data) {
                            if (data == 'SUCCESS') {
                                alert("요청되었습니다.");
                                $('#data_form').clearForm();
                                $("#askModal").modal('hide');
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

                function openAskModal() {
                    $("#askModal").modal();
                }

                function formChk() {
                    var cnt = $(".partChk:checked").length;
                    var cnt2 = $(".locationChk:checked").length;
                    if (cnt == 0) {
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