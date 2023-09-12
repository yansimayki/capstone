<?php

namespace App\Http\Controllers;

use App\Models\ExecModel;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminlogin(ExecModel $objModel){
        $aParam['title'] = "Adminlogin";

        return view('adminlogin', $aParam);

    }



    public function adminuser(ExecModel $objModel){
        $aParam['title'] = "Adminuser";
        $aParam['data'] = $objModel->adminuser();

        return view('adminuser', $aParam);

    }

    public function studentlogin(ExecModel $objModel){
        $aParam['title'] = "Studentlogin";
        return view('studentlogin', $aParam);

    }

    public function studentsignup(ExecModel $objModel){
        $aParam['title'] = "Studentsignup";
        return view('studentsignup', $aParam);

    }
    public function teacherlogin(ExecModel $objModel){
        $aParam['title'] = "TeacherLogin";
        return view('teacherlogin', $aParam);

    }
    public function dashboard(ExecModel $objModel){
        $aParam['title'] = "Dashboard";
        $aParam['data'] = $objModel->dashboard();

        return view('dashboard', $aParam);
        // return view('layouts.dashboard');

    }

    public function liststudent(ExecModel $objModel){
        $aParam['title'] = "Liststudent";
        $aParam['data'] = $objModel->liststudent();

        return view('liststudent', $aParam);
    }

    public function enrollstudent(ExecModel $objModel){
        $aParam['title'] = "Enrollstudent";
       

        return view('enrollstudent', $aParam);
    }


    public function listteacher(ExecModel $objModel){
        $aParam['title'] = "Listteacher";
        $aParam['data'] = $objModel->listteacher();
        return view('listteacher', $aParam);
        
    }

    
    public function addteacher(ExecModel $objModel){
        $aParam['title'] = "Addteacher";

        return view('addteacher', $aParam);
    
    }

    
    public function uploadfile(Request $request){
        
        $aFile = $request->file('file');

        echo 'File name: '.$aFile->getClientOriginalName();
        echo "\n";
      

        echo 'File Extension: '.$aFile->getClientOriginalExtension();
        echo "\n";
        

        echo 'File Real Path: '.$aFile->getRealPath();
        echo "\n";

        echo 'File Size: '.$aFile->getSize();
        echo "\n";

        echo 'File Mime Type: '.$aFile->getMimeType();
        echo "\n";

        $aNewFileName = "Upload_".date("YmdHis").".".$aFile->getClientOriginalExtension();
        echo "New Filename: ".$aNewFileName;

        $aFile->move("assets/images", $aNewFileName);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExecModel  $execModel
     * @return \Illuminate\Http\Response
     */
    public function show(ExecModel $execModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExecModel  $execModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ExecModel $execModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExecModel  $execModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExecModel $execModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExecModel  $execModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExecModel $execModel)
    {
        //
    }
}
