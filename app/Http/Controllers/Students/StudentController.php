<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Repository\StudentRepoInterface;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\student as studentValidtae;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $student;

     public function __construct(StudentRepoInterface $student){
         $this->student= $student;

     }

    public function index()
    {
      return $this->student->list_student();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $add_student=$this->student->add_student();

        return view('Students.Add_student',compact('add_student'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(studentValidtae $request)
    {
        return $this->student->Store_Student($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return $this->student->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        return $this->student->edit_student($id);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(studentValidtae $request)
    {
        return $this->student->update_student($request);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      return  $this->student->del_student($id);
    }

    public function Get_classerooms($id){
        return  $this->student->Get_classerooms($id);
    }
    public function Get_section($id){
        return $this->student->Get_section($id);
    }

    // to upload other atttchment
    public function upload_attachment(Request $request){
        return $this->student->upload_attachment($request);
   }
    // to download  files of attach
    public function download_attchment($id,$namefile){
        return $this->student->download_attchment($id,$namefile);
    }

    //delete attachment only
    public function del_attchment($id,$namefile){
       return $this->student->del_attchment($id,$namefile);
    }

    // to show files of attch
    public function show_Attach($id,$namefile){
        return $this->student->show_Attach($id,$namefile);
     }
}
