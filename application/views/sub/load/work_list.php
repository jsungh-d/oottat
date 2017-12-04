<?php
foreach ($lists as $row) {
    if (in_array($row['WORK_IDX'], $idxs)) {
        $check = 'checked';
    } else {
        $check = '';
    }
    ?>
    <div class="col-sm-4 col-6 img_row" style="padding-left: 3px; padding-right: 3px;">
        <div class="img_box" style="width: 100%;">
            <label class="img_box_check" style="width: 100%;">
                <!--체크박스 값 = 이미지 주소-->
                <input class="check_ipt" type='checkbox' name="" value="<?= $row['IMG'] ?>" <?= $check ?>>
                <img class="img_selected" src="/images/common/pay_select.png" alt="">
                <div class="img_box_bg_div" style="background-image: url(<?= $row['IMG'] ?>)"></div>
                <!--인풋 히든 값 = idx-->
                <input class="img_selected_idx" type="hidden" name="" value="<?= $row['WORK_IDX'] ?>">
            </label>
        </div>
        <p class="img_box_detail_text">
            <b><?= $row['TITLE'] ?></b>
        </p>
    </div>
    <?php
}
?>