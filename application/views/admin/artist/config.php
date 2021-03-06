<ol class="breadcrumb">
    <li class="breadcrumb-item">타투</li>
    <li class="breadcrumb-item active"><b>아티스트 관리</b></li>
</ol>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">
                        <strong>아티스트 관리</strong>
                        <small>아티스트를 관리합니다</small>
                    </div>

                    <div class="card-actions">
                        <a href="#" class="btn-setting" data-toggle="modal" data-target="#addModal">
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
                                <th>이름</th>
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
                                        <a><?= $row['NAME'] ?></a>
                                    </td>
                                    <td class="project_progress">
                                        <?= $row['LOCATION'] ?>
                                    </td>
                                    <td>
                                        <!--<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>-->
                                        <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#modModal<?= $row['ARTIST_IDX'] ?>"><i class="fa fa-pencil"></i>수정</a>
                                        <a href="#" class="btn btn-danger btn-xs" onclick="delContents(<?= $row['ARTIST_IDX'] ?>);"><i class="fa fa-trash-o"></i>삭제</a>
                                        <div id="modModal<?= $row['ARTIST_IDX'] ?>" title="<?= $row['NAME'] ?>수정"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form method="post" class="form-horizontal" role="form" enctype="multipart/form-data" action="/index.php/dataFunction/modArtist">
                                                        <input type="hidden" name="artist_idx" value="<?= $row['ARTIST_IDX'] ?>">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="addModalLabel">아티스트 관리 수정</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label class="col-sm-4 control-label">이름</label>
                                                                <input type="text" class="form-control" name="name" value="<?= $row['NAME'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-4 control-label">지역</label>
                                                                <input type="text" class="form-control" name="location" value="<?= $row['LOCATION'] ?>" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default antoclose" data-dismiss="modal">닫기</button>
                                                            <button type="submit" class="btn btn-primary antosubmit"><i class="fa fa-pencil"></i>수정</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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

    <!-- Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" class="form-horizontal" role="form" enctype="multipart/form-data" action="/index.php/dataFunction/insArtist">
                    <input type="hidden" name="lang" value="<?= $this->uri->segment(5) ?>">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModalLabel">아티스트 관리 등록</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">이름</label>
                            <input type="text" class="form-control" name="name" value="" required>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">지역</label>
                            <input type="text" class="form-control" name="location" value="" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default antoclose" data-dismiss="modal">닫기</button>
                        <button type="submit" class="btn btn-primary antosubmit"><i class="fa fa-pencil"></i>등록</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function delContents(idx) {
            if (confirm("삭제 하시겠습니까?") == true) {    //확인
                var data = {idx: idx};
                $.ajax({
                    dataType: 'text',
                    url: '/index.php/dataFunction/delArtist',
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