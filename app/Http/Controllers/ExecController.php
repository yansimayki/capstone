<?php

namespace App\Http\Controllers;

use App\Models\ExecModel;
use Illuminate\Http\Request;

class ExecController extends Controller
{

    
    public function enrollstudent(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->enrollstudent($aData));
    }


    public function editlist(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->editlist($aData));
    }

    public function removelist(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->removelist($aData));
    }

    public function updatelist(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->updatelist($aData));
    }


    public function adminlogin(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->adminlogin($aData));
    }

    public function adduser(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->adduser($aData));
    }

    public function edituser(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->edituser($aData));
    }

    

    public function updateuser(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->updateuser($aData));
    }


    public function removeuser(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->removeuser($aData));
    }


    public function addteacher(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->addteacher($aData));
    }

    public function editteacher(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->editteacher($aData));
    }

    public function removeteacher(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->removeteacher($aData));
    }

    public function updateteacher(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->updateteacher($aData));
    }





    public function loginstudent(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->loginstudent($aData));
    }

    public function removestudent(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->removestudent($aData));
    }

    public function editstudent(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->editstudent($aData));
    }

    public function updatestudent(Request $req, ExecModel $sModel) {

        $aData = $req->data;

        print_r($sModel->updatestudent($aData));
    }

}
