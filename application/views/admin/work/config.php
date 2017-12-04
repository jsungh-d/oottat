<ol class="breadcrumb">
    <li class="breadcrumb-item">타투</li>
    <li class="breadcrumb-item active"><b>작품 관리</b></li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">
                        <strong>작품 관리</strong>
                        <small>작품을 관리합니다</small>
                    </div>

                    <div class="card-actions">
                        <a href="#" class="btn-setting" onclick="location.href = '/admin/insWork'">
                            등록
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- start project list -->
                    <table class="table table-bordered table-custom land_list_table">
                        <colgroup>
                            <col width="15%">
                            <col width="15%">
                            <col width="15%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th>제목</th>
                                <th>지역</th>
                                <th>관리</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $i = 0;
                            foreach ($lists as $row) {
                                ?>
                                <tr>
                                    <td>
                                        <a><?= $row['TITLE'] ?></a>
                                    </td>
                                    <td class="project_progress">
                                        <?= $row['LOCATION'] ?>
                                    </td>
                                    <td>
                                        <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                                        <a href="#" class="btn btn-xs btn-success" onclick="location.href = '/admin/work_modify/<?= $row['WORK_IDX'] ?>'"><i class="fa fa-pencil"></i>수정</a>
                                        <a href="#" class="btn btn-danger btn-xs" onclick="delContents(<?= $row['WORK_IDX'] ?>);"><i class="fa fa-trash-o"></i>삭제</a>
                                    </td>
                                </tr>
                                <?php
                                $i++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- end project list -->
                    <?= $pagination ?>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function delContents(idx) {
            if (confirm("삭제 하시겠습니까?") == true) {    //확인
                var data = {idx: idx};
                $.ajax({
                    dataType: 'text',
                    url: '/index.php/dataFunction/delWork',
                    data: data,
                    type: 'POST',
                    success: function (data, status, xhr) {
                        alert("삭제 되었습니다.");
                        location.reload();
                    }
                });
            } else {
                return false;
            }
        }
    </script>