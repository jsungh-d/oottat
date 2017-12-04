<section class="bg_purple top_area section_center">
    <h2>원하는 작품 또는 유사한 스타일을 만나보세요</h2>
    <h6 class=""><em>마음에 드는 작품이 있다면 바로 콕 찍어 의뢰하세요!</em></h6>
</section>

<section class="section_center hr">
    <h2 class="top_heading_text">작품 리스트</h2>
    <div class="container">
        <div class="row">
            <?php foreach ($lists as $row) { ?>
            <div class="col-md-4 pl0 pr0" style="cursor:pointer;" onclick="location.href = '/index/work_view/<?= $row['WORK_IDX'] ?>/<?= $row['ARTIST_IDX'] ?>'">
                    <div class="img_box">
                        <div class='img_box_bg_img' style="background-image: url(<?= $row['IMG'] ?>)"></div>
                        <div class="overlay_black"></div>
                        <img class='view_detail_img' src='/images/common/search_white.png' alt="view detail">    
                    </div>
                    <h4 class="img_box_detail_text"><b><?= $row['TITLE'] ?></b></h4>
                    <p class=""><?= $row['CONTENTS'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
    <?= $pagination ?>
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
