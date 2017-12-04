<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataFunction
 *
 * @author dev_piljae
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class DataFunction extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();

        $this->TATTOO = $this->load->database('TATTOO', TRUE);
        $this->load->model('Db_m');
        $this->load->library('session');
    }

    function defaultAdminSet() {
        $insArray = array(
            'ID' => 'admin',
            'PWD' => password_hash('1234', PASSWORD_DEFAULT)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->insData('ADMIN', $insArray, 'TATTOO');

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function adminLogin() {

        $this->load->helper(array('alert'));

        $this->TATTOO->trans_start(); // Query will be rolled back
        //sql 인젝션 방지
        $id = $this->TATTOO->escape($this->input->post('adminId', TRUE));
        $pwd = $this->input->post('adminPw', TRUE);

        $sql = "SELECT
                    ADMIN_IDX,
                    PWD
                FROM 
                    ADMIN 
                WHERE 
                    ID = $id";

        $res = $this->Db_m->getInfo($sql, 'TATTOO');

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            alert("데이터 처리오류!!", '/');
        } else {
            if ($res && password_verify($pwd, $res->PWD)) {
                //세션 생성
                $newdata = array(
                    'ADMIN_IDX' => $res->ADMIN_IDX
                );
                $this->session->set_userdata($newdata);
                alert('로그인 되었습니다.', '/admin/main');
            } else {
                alert("일치하는 정보가 없습니다.", '/admin');
            }
        }
    }

    function insPart() {
        $insArray = array(
            'NAME' => $this->input->post('name', true),
            'USE_YN' => $this->input->post('use_yn', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->insData('PART', $insArray, 'TATTOO');

        $this->TATTOO->trans_complete();

        $this->load->helper(array('alert'));

        if ($this->TATTOO->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/partConfig');
        } else {
            alert('등록 되었습니다.', '/admin/partConfig');
        }
    }

    function modPart() {
        $updateArray = array(
            'NAME' => $this->input->post('name', true),
            'USE_YN' => $this->input->post('use_yn', true)
        );

        $updateWhere = array(
            'PART_IDX' => $this->input->post('part_idx', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->update('PART', $updateArray, $updateWhere, 'TATTOO');

        $this->TATTOO->trans_complete();

        $this->load->helper(array('alert'));

        if ($this->TATTOO->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/partConfig');
        } else {
            alert('수정 되었습니다.', '/admin/partConfig');
        }
    }

    function delPart() {
        $delWhere = array(
            'PART_IDX' => $this->input->post('idx', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->delete('PART', $delWhere, 'TATTOO');

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function insLocation() {
        $insArray = array(
            'NAME' => $this->input->post('name', true),
            'USE_YN' => $this->input->post('use_yn', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->insData('LOCATION', $insArray, 'TATTOO');

        $this->TATTOO->trans_complete();

        $this->load->helper(array('alert'));

        if ($this->TATTOO->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/locationConfig');
        } else {
            alert('등록 되었습니다.', '/admin/locationConfig');
        }
    }

    function modLocation() {
        $updateArray = array(
            'NAME' => $this->input->post('name', true),
            'USE_YN' => $this->input->post('use_yn', true)
        );

        $updateWhere = array(
            'LOCATION_IDX' => $this->input->post('location_idx', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->update('LOCATION', $updateArray, $updateWhere, 'TATTOO');

        $this->TATTOO->trans_complete();

        $this->load->helper(array('alert'));

        if ($this->TATTOO->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/locationConfig');
        } else {
            alert('수정 되었습니다.', '/admin/locationConfig');
        }
    }

    function delLocation() {
        $delWhere = array(
            'LOCATION_IDX' => $this->input->post('idx', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->delete('LOCATION', $delWhere, 'TATTOO');

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function insArtist() {
        $insArray = array(
            'NAME' => $this->input->post('name', true),
            'LOCATION' => $this->input->post('location', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->insData('ARTIST', $insArray, 'TATTOO');

        $this->TATTOO->trans_complete();

        $this->load->helper(array('alert'));

        if ($this->TATTOO->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/artistConfig');
        } else {
            alert('등록 되었습니다.', '/admin/artistConfig');
        }
    }

    function modArtist() {
        $updateArray = array(
            'NAME' => $this->input->post('name', true),
            'LOCATION' => $this->input->post('location', true)
        );

        $updateWhere = array(
            'ARTIST_IDX' => $this->input->post('artist_idx', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->update('ARTIST', $updateArray, $updateWhere, 'TATTOO');

        $this->TATTOO->trans_complete();

        $this->load->helper(array('alert'));

        if ($this->TATTOO->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/artistConfig');
        } else {
            alert('수정 되었습니다.', '/admin/artistConfig');
        }
    }

    function delArtist() {
        $delWhere = array(
            'ARTIST_IDX' => $this->input->post('idx', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->delete('ARTIST', $delWhere, 'TATTOO');

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function insWork() {

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->load->helper(array('alert'));

        $file['location'] = '';

        if (@$_FILES['main_img']['name']) {

            $this->load->library('upload');

            $url_path = "/uploads/work";
            $upload_config = Array(
                'upload_path' => $_SERVER['DOCUMENT_ROOT'] . $url_path,
                'allowed_types' => 'gif|jpg|jpeg|png|bmp',
                'encrypt_name' => TRUE,
                'max_size' => '512000'
            );
            $this->upload->initialize($upload_config);

            if (!$this->upload->do_upload('main_img')) {
                echo $this->upload->display_errors();
            }

            $info = $this->upload->data();

            $file['location'] = $url_path . "/" . $info['file_name'];
            $file['origin_name'] = $info['orig_name'];
        }

        $insArray = array(
            'ARTIST_IDX' => $this->input->post('artist_idx', true),
            'TITLE' => $this->input->post('title', true),
            'IMG' => $file['location'],
            'CONTENTS' => $this->input->post('contents', true),
            'STYLE' => $this->input->post('style', true),
            'RECOMMENDATION' => $this->input->post('recommendation', true),
            'LOCATION' => $this->input->post('location', true)
        );

        $this->Db_m->insData('WORK', $insArray, 'TATTOO');

        $ins_id = $this->TATTOO->insert_id();

        if ($this->input->post('comment', true)) {
            for ($i = 0; $i < count($this->input->post('comment', true)); $i++) {
                $uploaded_files = $_FILES;
                $url_path = "/uploads/work";
                if ($uploaded_files['cases_img']['name'][$i] == null)
                    continue;
//                unset($_FILES);

                $_FILES['file']['name'] = $uploaded_files['cases_img']['name'][$i];
                $_FILES['file']['type'] = $uploaded_files['cases_img']['type'][$i];
                $_FILES['file']['tmp_name'] = $uploaded_files['cases_img']['tmp_name'][$i];
                $_FILES['file']['error'] = $uploaded_files['cases_img']['error'][$i];
                $_FILES['file']['size'] = $uploaded_files['cases_img']['size'][$i];

                $upload_config = Array(
                    'upload_path' => $_SERVER['DOCUMENT_ROOT'] . $url_path,
                    'allowed_types' => 'gif|jpg|jpeg|png|bmp',
                    'encrypt_name' => TRUE,
                    'max_size' => '512000'
                );

                $this->upload->initialize($upload_config);

                if (!$this->upload->do_upload('file')) {
                    echo $this->upload->display_errors();
                }

                $info = $this->upload->data();

                $stamp_file['file'] = $url_path . "/" . $info['file_name'];
                $stamp_file['origin_name'] = $info['orig_name'];

                $ins_working_cases_array[] = array(
                    'WORK_IDX' => $ins_id,
                    'IMG' => $stamp_file['file'],
                    'COMMENT' => $this->input->post('comment', true)[$i]
                );
            }
            $this->Db_m->insMultiData('WORKING_CASES', $ins_working_cases_array, 'TATTOO');
        }

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/insWork');
        } else {
            alert('등록 되었습니다.', '/admin/workConfig');
        }
    }

    function modWork() {
        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->load->helper(array('alert'));

        $file['location'] = $this->input->post('org_main_img');

        if (!$this->input->post('org_main_img')) {
            if (@$_FILES['main_img']['name']) {

                $this->load->library('upload');

                $url_path = "/uploads/work";
                $upload_config = Array(
                    'upload_path' => $_SERVER['DOCUMENT_ROOT'] . $url_path,
                    'allowed_types' => 'gif|jpg|jpeg|png|bmp',
                    'encrypt_name' => TRUE,
                    'max_size' => '512000'
                );
                $this->upload->initialize($upload_config);

                if (!$this->upload->do_upload('main_img')) {
                    echo $this->upload->display_errors();
                }

                $info = $this->upload->data();

                $file['location'] = $url_path . "/" . $info['file_name'];
                $file['origin_name'] = $info['orig_name'];
            }
        }

        $updateArray = array(
            'ARTIST_IDX' => $this->input->post('artist_idx', true),
            'TITLE' => $this->input->post('title', true),
            'IMG' => $file['location'],
            'CONTENTS' => $this->input->post('contents', true),
            'STYLE' => $this->input->post('style', true),
            'RECOMMENDATION' => $this->input->post('recommendation', true),
            'LOCATION' => $this->input->post('location', true)
        );

        $updateWhere = array(
            'WORK_IDX' => $this->input->post('idx', true)
        );

        $this->Db_m->update('WORK', $updateArray, $updateWhere, 'TATTOO');

        $this->Db_m->delete('WORKING_CASES', $updateWhere, 'TATTOO');

        if ($this->input->post('comment', true)) {
            for ($i = 0; $i < count($this->input->post('comment', true)); $i++) {

                if (!$this->input->post('org_cases_img', true)[$i]) {
                    $uploaded_files = $_FILES;
                    $url_path = "/uploads/work";
                    if ($uploaded_files['cases_img']['name'][$i] == null)
                        continue;
//                unset($_FILES);

                    $_FILES['file']['name'] = $uploaded_files['cases_img']['name'][$i];
                    $_FILES['file']['type'] = $uploaded_files['cases_img']['type'][$i];
                    $_FILES['file']['tmp_name'] = $uploaded_files['cases_img']['tmp_name'][$i];
                    $_FILES['file']['error'] = $uploaded_files['cases_img']['error'][$i];
                    $_FILES['file']['size'] = $uploaded_files['cases_img']['size'][$i];

                    $upload_config = Array(
                        'upload_path' => $_SERVER['DOCUMENT_ROOT'] . $url_path,
                        'allowed_types' => 'gif|jpg|jpeg|png|bmp',
                        'encrypt_name' => TRUE,
                        'max_size' => '512000'
                    );

                    $this->upload->initialize($upload_config);

                    if (!$this->upload->do_upload('file')) {
                        echo $this->upload->display_errors();
                    }

                    $info = $this->upload->data();

                    $stamp_file['file'] = $url_path . "/" . $info['file_name'];
                    $stamp_file['origin_name'] = $info['orig_name'];
                } else {
                    $stamp_file['file'] = $this->input->post('org_cases_img', true)[$i];
                }

                $ins_working_cases_array[] = array(
                    'WORK_IDX' => $this->input->post('idx', true),
                    'IMG' => $stamp_file['file'],
                    'COMMENT' => $this->input->post('comment', true)[$i]
                );
            }
            $this->Db_m->insMultiData('WORKING_CASES', $ins_working_cases_array, 'TATTOO');
        }

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            alert('데이터 처리오류!!', '/admin/work_modify/' . $this->input->post('idx', true) . '');
        } else {
            alert('수정 되었습니다.', '/admin/work_modify/' . $this->input->post('idx', true) . '');
        }
    }

    function delWork() {
        $delWhere = array(
            'WORK_IDX' => $this->input->post('idx', true)
        );

        $this->TATTOO->trans_start(); // Query will be rolled back

        $this->Db_m->delete('WORK', $delWhere, 'TATTOO');

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function insQuoteContact() {
        $this->TATTOO->trans_start(); // Query will be rolled back

        if (!$this->input->post('contact_date', true)) {
            $data = '0000-00-00';
        } else {
            $data = $this->input->post('contact_date', true);
        }

        $insArray = array(
            'TYPE' => $this->input->post('type', true),
            'LOCATION_IDX' => $this->input->post('location', true),
            'SIZE' => $this->input->post('size', true),
            'CONTACT_DATE' => $data,
            'NAME' => $this->input->post('name', true),
            'PHONE' => $this->input->post('phone', true),
            'CONTENTS' => $this->input->post('contents', true)
        );

        $this->Db_m->insData('QUOTE_CONTACT', $insArray, 'TATTOO');

        $ins_id = $this->TATTOO->insert_id();

        //원하는 위치
        if ($this->input->post('part')) {
            for ($i = 0; $i < count($this->input->post('part', true)); $i++) {
                $ins_quote_contact_part_array[] = array(
                    'QUOTE_CONTACT_IDX' => $ins_id,
                    'PART_IDX' => $this->input->post('part', true)[$i]
                );
            }

            $this->Db_m->insMultiData('QUOTE_CONTACT_PART', $ins_quote_contact_part_array, 'TATTOO');
        }

        //사진선택
        if ($this->input->post('type', true) === 'P') {
            $this->load->library('upload');
            if ($_FILES) {
                $uploaded_files = $_FILES;
                $url_path = "/uploads/quote_contact";
                $count = count($_FILES['file']['name']);
                for ($i = 0; $i < $count; $i++) {
//                echo "$i" . "<br>";
                    if ($uploaded_files['file']['name'][$i] == null)
                        continue;
                    unset($_FILES);
                    $_FILES['file']['name'] = $uploaded_files['file']['name'][$i];
                    $_FILES['file']['type'] = $uploaded_files['file']['type'][$i];
                    $_FILES['file']['tmp_name'] = $uploaded_files['file']['tmp_name'][$i];
                    $_FILES['file']['error'] = $uploaded_files['file']['error'][$i];
                    $_FILES['file']['size'] = $uploaded_files['file']['size'][$i];

                    $upload_config = Array(
                        'upload_path' => $_SERVER['DOCUMENT_ROOT'] . $url_path,
                        'allowed_types' => 'gif|jpg|jpeg|png|bmp',
                        'encrypt_name' => TRUE,
                        'max_size' => '512000'
                    );

                    $this->upload->initialize($upload_config);

                    if (!$this->upload->do_upload('file')) {
                        echo $this->upload->display_errors();
                    }

                    $info = $this->upload->data();
                    $stamp_file['file'] = $url_path . "/" . $info['file_name'];

                    $ins_quote_contact_img[] = array(
                        'QUOTE_CONTACT_IDX' => $ins_id,
                        'IMG' => $stamp_file['file']
                    );
                }
                $this->Db_m->insMultiData('QUOTE_CONTACT_IMG', $ins_quote_contact_img, 'TATTOO');
            }
        }

        //작품선택
        if ($this->input->post('type', true) === 'W') {
            for ($i = 0; $i < count($this->input->post('work_idx', true)); $i++) {
                if ($this->input->post('work_idx', true)[$i]) {
                    $ins_quote_contact_work_array[] = array(
                        'QUOTE_CONTACT_IDX' => $ins_id,
                        'WORK_IDX' => $this->input->post('work_idx', true)[$i]
                    );
                }
            }

            $this->Db_m->insMultiData('QUOTE_CONTACT_WORK', $ins_quote_contact_work_array, 'TATTOO');
        }

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

    function getWorkList() {

        $this->TATTOO->trans_start(); // Query will be rolled back

        $start = $this->input->post('start', true);
        $limit = $this->input->post('limit', true);

        $lists_sql = "SELECT
                          WORK_IDX,
                          ARTIST_IDX,
                          IMG,
                          TITLE,
                          CONTENTS
                      FROM 
                          WORK
                      ORDER BY TIMESTAMP DESC LIMIT $start, $limit";

        $data['lists'] = $this->Db_m->getList($lists_sql, 'TATTOO');

        $data['idxs'] = array();

        if ($this->input->post('appNum', true)) {
            $exp = explode(',', $this->input->post('appNum', true));
            $idxArray = array();
            for ($i = 0; $i < count($exp); $i++) {
                array_push($idxArray, $exp[$i]);
            }

            $data['idxs'] = $idxArray;
        }

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            $this->load->view('sub/load/work_list', $data);
        }
    }

    function getWorkCnt() {
        $this->TATTOO->trans_start(); // Query will be rolled back

        $sql = "SELECT
                    COUNT(*) CNT
                FROM 
                    WORK";

        $res = $this->Db_m->getInfo($sql, 'TATTOO');

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo $res->CNT;
        }
    }

    function delQuoteContact() {

        $this->TATTOO->trans_start(); // Query will be rolled back

        $delWhere = array(
            'QUOTE_CONTACT_IDX' => $this->input->post('idx', true)
        );

        $this->Db_m->delete('QUOTE_CONTACT', $delWhere, 'TATTOO');

        $this->TATTOO->trans_complete();

        if ($this->TATTOO->trans_status() === FALSE) {
            echo 'FAILED';
        } else {
            echo 'SUCCESS';
        }
    }

}
