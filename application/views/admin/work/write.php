<div class="row">
    <div class="col-md-12">
        <form action="/index.php/dataFunction/insWork" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="card">
                <div class="card-header">
                    <strong>작품 등록</strong>
                    작품을 등록합니다.
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-custom custom_table_list">
                        <tbody>
                            <tr>
                                <th>아티스트</th>
                                <td>

                                    <select class="form-control" name="artist_idx" required>
                                        <option value="">선택</option>
                                        <?php foreach ($artist_lists as $row) { ?>
                                            <option value="<?= $row['ARTIST_IDX'] ?>"><?= $row['NAME'] ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>대표사진</th>
                                <td>
                                    <input id="main_img" name="main_img" type="file" class="form-control" accept="image/*" required>
                                </td>
                            </tr>
                            <tr>
                                <th>제목</th>
                                <td>
                                    <input id="title" name="title" type="text" class="form-control" value="" maxlength="20" required>
                                </td>
                            </tr>
                            <tr>
                                <th>내용</th>
                                <td>
                                    <textarea id="contents" name="contents" class="form-control" rows="10" cols="100" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>스타일</th>
                                <td>
                                    <input id="style" name="style" type="text" class="form-control" value="" maxlength="30" required>
                                </td>
                            </tr>
                            <tr>
                                <th>작가 추천</th>
                                <td>
                                    <input id="recommendation" name="recommendation" type="text" class="form-control" value="" maxlength="30" required>
                                </td>
                            </tr>
                            <tr>
                                <th>위치</th>
                                <td>
                                    <input id="location" name="location" type="text" class="form-control" value="" maxlength="20" required>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    작업사례 <button type="button" id="cases_add_btn" class="btn btn-primary">추가</button>
                    <table id="work_cases_table" class="table table-bordered table-custom custom_table_list">
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <button type="button" onclick="location.href = '/admin/workConfig'" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> 목록</button>
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i> 등록</button>
                    <!--<button type="button" class="btn btn-sm btn-danger" onclick="location.href = '/admin/noticeConfig'"><i class="fa fa-ban"></i> 취소</button>-->
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#cases_add_btn").click(function () {
            var html = '<tr>';
            html += '<td>';
            html += '<input id="main_img" name="cases_img[]" type="file" class="form-control" accept="image/*" required>';
            html += '</td>';
            html += '<td>';
            html += '<input type="text" class="form-control" name="comment[]" placeholder="설명" maxlength="20" required>';
            html += '</td>';
            html += '<td>';
            html += '<button type="button" class="btn form-control btn-danger cases_del_btn">삭제</button>';
            html += '</td>';
            html += '</tr>';

            $("#work_cases_table tbody").append(html);

            $(".cases_del_btn").click(function () {
                $(this).parent().parent().remove();
            });
        });
    });
</script>