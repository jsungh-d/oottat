<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong>견적요청 확인</strong>
                견적요청을 확인합니다.
            </div>
            <div class="card-body">
                <table class="table table-bordered table-custom custom_table_list">
                    <tbody>
                        <tr>
                            <th>원하는 스타일</th>
                            <td>
                                <?= $info->TYPE_TEXT ?>
                            </td>
                        </tr>
                        <?php if ($info->TYPE !== 'N') { ?>
                            <tr>
                                <th>사진</th>
                                <td>
                                    <?php
                                    if ($info->TYPE === 'P') {
                                        foreach ($img_lists as $row) {
                                            ?>
                                            <img src="<?= $row['IMG'] ?>" style="max-width: 100px;">
                                            <?php
                                        }
                                    }
                                    ?>

                                    <?php
                                    if ($info->TYPE === 'W') {
                                        foreach ($work_lists as $row) {
                                            ?>
                                            <img src="<?= $row['IMG'] ?>" style="max-width: 100px;">
                                            <?php
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <th>내용</th>
                            <td>
                                <?= nl2br($info->CONTENTS) ?>
                            </td>
                        </tr>
                        <tr>
                            <th>원하는 위치</th>
                            <td>
                                <?php
                                foreach ($part_lists as $row) {
                                    echo substr($row['NAME'] . ',', 0, -1);
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>사시는곳</th>
                            <td>
                                <?= $info->LOCATION_NAME ?>
                            </td>
                        </tr>
                        <tr>
                            <th>원하는 크기</th>
                            <td>
                                약 <?= $info->SIZE ?> cm
                            </td>
                        </tr>
                        <tr>
                            <th>원하는 날짜</th>
                            <td>
                                <?php
                                if (!$info->CONTACT_DATE || $info->CONTACT_DATE === '0000-00-00') {
                                    echo '아무때나';
                                } else {
                                    echo $info->CONTACT_DATE;
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>이름</th>
                            <td>
                                <?= $info->NAME ?>
                            </td>
                        </tr>
                        <tr>
                            <th>연락처</th>
                            <td>
                                <?= $info->PHONE ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <button type="button" onclick="history.go(-1)" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> 목록</button>
            </div>
        </div>
    </div>
</div>