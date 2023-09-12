<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class ExecModel extends Model
{
    use HasFactory;

    public function dashboard(){

        return;
   
    }

    
    public function adminlogin($aData){

        $qQuery = "SELECT * FROM `tbl_admin` WHERE `username` ='".$aData['username']."' AND `password` = '".md5($aData['pass'])."'";
        $eQuery = DB::select($qQuery);

        if ($eQuery === false) {
            return "error";
        } else {
            if (sizeof($eQuery) > 0) {
                return "found";
            }else {
                return "missing";
            } 
        }
     
    }

    public function adminuser(){

        $eQuery = DB::select("SELECT * FROM `tbl_admin` WHERE `status` is null");
        return $eQuery;
   
    }

    public function adduser($aData){
        $qQuery = "INSERT INTO `tbl_admin` 
        (`fullname`, `position`,`email`, `username`, `password`)
        VALUES
        ('".$aData['fullname']."','".$aData['position']."','".$aData['email']."','".$aData['username']."','".md5($aData['pass'])."')
        ";

    $eQuery = DB::select($qQuery);
    if ($eQuery === false) {
        return "error";
    } else {
        return "ok";
    }
    }

    public function edituser($aData){
            $qQuery = "SELECT * FROM `tbl_admin` WHERE `id` = '".$aData."'";
            $eQuery = DB::select($qQuery);
    
            return json_encode($eQuery[0]);

    }

    
    public function updateuser($aData) {
        $qQuery = "UPDATE `tbl_admin`  SET 
        `fullname` = '".$aData['fullname']."',
        `position` = '".$aData['position']."', 
        `email` ='".$aData['email']."', 
        `username` = '".$aData['username']."'
        WHERE 
            `id` = '".$aData['id']."'
        ";

        $eQuery = DB::select($qQuery);
        if ($eQuery === false) {
            return "error";
        } else {
            return "ok";
        }
    } 


    
    public function removeuser($aData) {

        $eUpdate = DB::table('tbl_admin')
        ->where('id', $aData)
        ->update(['status' => 'inactive']);
        
        if ($eUpdate == 1) {
            return "ok";
        } else {
            return "error";
        }
    } 

    
 

    public function liststudent(){
        $eQuery = DB::select("SELECT * FROM `tbl_studentinfo` WHERE `status` is null");
        return $eQuery;
        
    }

    public function enrollstudent($aData){
        $qQuery = "INSERT INTO `tbl_studentinfo` 
        (`grade`,`section`,`first_name`, `middle_name`, `last_name`, 
        `birthdate`,`gender`, `age`,
        `email`,`contact`, `address`,
        `city`,`district`, `zip`,
        `father_name`,`mother_name`)
            VALUES
       ('".$aData['grade']."','".$aData['section']."','".$aData['fname']."',
       '".$aData['mname']."','".$aData['lname']."',
       '".$aData['bdate']."','".$aData['gender']."','".$aData['age']."',
       '".$aData['email']."','".$aData['contact']."','".$aData['address']."',
       '".$aData['city']."','".$aData['district']."','".$aData['zip']."',
       '".$aData['dname']."','".$aData['moname']."')
    ";

    $eQuery = DB::select($qQuery);
    if ($eQuery === false) {
        return "error";
    } else {
        return "ok";
    }
     
    }



    public function removelist($aData) {

        $eUpdate = DB::table('tbl_studentinfo')
        ->where('id', $aData)
        ->update(['status' => 'inactive']);
        
        if ($eUpdate == 1) {
            return "ok";
        } else {
            return "error";
        }
    } 


    public function editlist($aData) {
        $qQuery = "SELECT * FROM `tbl_studentinfo` WHERE `id` = '".$aData."'
        ";
        $eQuery = DB::select($qQuery);

        return json_encode($eQuery[0]);
    } 

 

    
    public function updatelist($aData) {
        $qQuery = "UPDATE `tbl_studentinfo`  SET 
        `grade`= '".$aData['grade']."',
        `section`= '".$aData['section']."',
        `first_name`= '".$aData['fname']."',
        `middle_name` = '".$aData['mname']."',
        `last_name` = '".$aData['lname']."',
        `birthdate` = '".$aData['bdate']."',
        `gender` = '".$aData['gender']."',
        `age`  = '".$aData['age']."',
        `email` = '".$aData['email']."',
        `contact` = '".$aData['contact']."',
        `address` = '".$aData['address']."',
        `city` = '".$aData['city']."',
        `district` = '".$aData['district']."',
        `zip` = '".$aData['zip']."',
        `father_name` = '".$aData['dname']."',
        `mother_name` = '".$aData['moname']."'
        WHERE 
        `id` = '".$aData['id']."'
        ";

        $eQuery = DB::select($qQuery);
        if ($eQuery === false) {
            return "error";
        } else {
            return "ok";
        }
    } 




    public function addteacher($aData){
        $qQuery = "INSERT INTO `tbl_teacher` 
        (`grade`,`section`,`first_name`, `middle_name`, `last_name`, 
        `birthdate`,`gender`, `age`,
        `email`,`contact`, `address`,
        `city`,`district`, `zip`)
            VALUES
       ('".$aData['grade']."','".$aData['section']."','".$aData['fname']."',
       '".$aData['mname']."','".$aData['lname']."',
       '".$aData['bdate']."','".$aData['gender']."','".$aData['age']."',
       '".$aData['email']."','".$aData['contact']."','".$aData['address']."',
       '".$aData['city']."','".$aData['district']."','".$aData['zip']."')
    ";

    $eQuery = DB::select($qQuery);
    if ($eQuery === false) {
        return "error";
    } else {
        return "ok";
    }
     
    }

    
    public function listteacher(){

        $eQuery = DB::select("SELECT * FROM `tbl_teacher` ");
        return $eQuery;
   
    }


    public function editteacher($aData){
        $qQuery = "SELECT * FROM `tbl_teacher` WHERE `id` = '".$aData."'";
        $eQuery = DB::select($qQuery);

        return json_encode($eQuery[0]);

        
    }

    
    public function removeteacher($aData) {

        $eUpdate = DB::table('tbl_teacher')
        ->where('id', $aData)
        ->update(['status' => 'inactive']);
        
        if ($eUpdate == 1) {
            return "ok";
        } else {
            return "error";
        }
    } 

    
    public function updateteacher($aData) {
        $qQuery = "UPDATE `tbl_teacher`  SET 
        `grade`= '".$aData['grade']."',
        `section`= '".$aData['section']."',
        `first_name`= '".$aData['fname']."',
        `middle_name` = '".$aData['mname']."',
        `last_name` = '".$aData['lname']."',
        `birthdate` = '".$aData['bdate']."',
        `gender` = '".$aData['gender']."',
        `age`  = '".$aData['age']."',
        `email` = '".$aData['email']."',
        `contact` = '".$aData['contact']."',
        `address` = '".$aData['address']."',
        `city` = '".$aData['city']."',
        `district` = '".$aData['district']."',
        `zip` = '".$aData['zip']."'
        WHERE 
        `id` = '".$aData['id']."'
        ";

        $eQuery = DB::select($qQuery);
        if ($eQuery === false) {
            return "error";
        } else {
            return "ok";
        }
    } 


    


    public function signupstudent($aData) {
        
        $qQuery = "INSERT INTO `tbl_user` 
            (`first_name`, `middle_name`, `last_name`, `username`, `password`)
        VALUES
            ('".$aData['fname']."','".$aData['mname']."','".$aData['lname']."','".$aData['email']."','".md5($aData['pass'])."')
        ";

        $eQuery = DB::select($qQuery);
        if ($eQuery === false) {
            return "error";
        } else {
            return "ok";
        }
    }   

    public function loginstudent($aData) {
            
        $qQuery = "SELECT * FROM `tbl_user` WHERE `username` ='".$aData['email']."' AND `password` = '".md5($aData['pass'])."'";
        $eQuery = DB::select($qQuery);

        if ($eQuery === false) {
            return "error";
        } else {
            if (sizeof($eQuery) > 0) {
                return "found";
            } else {
                return "missing";
            }
        }
    } 

    public function removestudent($aData) {

        $eUpdate = DB::table('tbl_user')
        ->where('id', $aData)
        ->update(['status' => 'inactive']);
        
        if ($eUpdate == 1) {
            return "ok";
        } else {
            return "error";
        }
    } 

 
    public function editstudent($aData) {
        $qQuery = "SELECT * FROM `tbl_user` WHERE `id` = '".$aData."'";
        $eQuery = DB::select($qQuery);

        return json_encode($eQuery[0]);
    } 


    public function updatestudent($aData) {
        $qQuery = "UPDATE `tbl_user`  SET 
        `first_name` = '".$aData['fname']."',
        `middle_name` = '".$aData['mname']."', 
        `last_name` ='".$aData['lname']."', 
        `username` = '".$aData['email']."'
        WHERE 
            `id` = '".$aData['id']."'
        ";

        $eQuery = DB::select($qQuery);
        if ($eQuery === false) {
            return "error";
        } else {
            return "ok";
        }
    } 
}

