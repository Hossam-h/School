<?php
namespace App\Repository;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use App\Models\Fee;
use App\Models\FeeInvoice;
use App\Models\StudentAcounte;
use App\Models\Grade;
use Exception;

class FeeInvoiceRepo implements FeeInvoiceInterface{
    public function index(){

        $Fee_invoices = FeeInvoice::all();
        // $Grades = Grade::all();
        return view('Fees_Invoices.index',compact('Fee_invoices'));

    }
    public function store($request){

        $List_Fees = $request->List_Fees;

        DB::beginTransaction();

        try {

            foreach ($List_Fees as $List_Fee) {

                // حفظ البيانات في جدول فواتير الرسوم الدراسية
                $Fees = new FeeInvoice();
                $Fees->invoice_date = date('Y-m-d');
                $Fees->student_id = $List_Fee['student_id'];
                $Fees->Grade_id = $request->Grade_id;
                $Fees->Classroom_id = $request->Classroom_id;
                $Fees->fee_id = $List_Fee['fee_id'];
                $Fees->amount = $List_Fee['amount'];
                $Fees->description = $List_Fee['description'];
                $Fees->save();


                // حفظ البيانات في جدول حسابات الطلاب
                $StudentAccount = new StudentAcounte();
                $StudentAccount->date = date('Y-m-d');
                $StudentAccount->type = 'invoice';
                $StudentAccount->fee_invoice_id = $Fees->id;
                $StudentAccount->student_id = $List_Fee['student_id'];
                $StudentAccount->Debit = $List_Fee['amount'];
                $StudentAccount->Grade_id = $request->Grade_id;
                $StudentAccount->Classroom_id = $request->Classroom_id;;
                $StudentAccount->credit = 0.00;
                $StudentAccount->description = $List_Fee['description'];
                $StudentAccount->save();

            }

            DB::commit();

            toastr()->success(trans('messages.success'));
            return redirect()->route('Feeinvo.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function edit($id){


          $fee_invoices=FeeInvoice::find($id);
          $fees=Fee::all();

          return view('Fees_Invoices.edit',compact('fee_invoices','fees'));


    }


    public function update($request){


        DB::beginTransaction();




        try{

 // تعديل البيانات في جدول فواتير الرسوم الدراسية
 $Fees = FeeInvoice::findorfail($request->id);
 $Fees->fee_id = $request->fee_id;
 $Fees->amount = $request->amount;
 $Fees->description = $request->description;
 $Fees->save();

 // تعديل البيانات في جدول حسابات الطلاب
 $StudentAccount = StudentAcounte::where('fee_invoice_id',$request->id)->first();
 $StudentAccount->Debit = $request->amount;
 $StudentAccount->description = $request->description;
 $StudentAccount->save();

 DB::commit();
toastr()->success(trans('messages.success'));
            return redirect()->route('Feeinvo.index');


        }catch(Exception $e){
            return redirect()->back()->withErrors(['errors'=>$e->getMessage()]);
        }

    }

    public function show($id){


        $student = Student::findorfail($id);
        $fees = Fee::where('Classroom_id',$student->Classroom_id)->get();
        return view('Fees_Invoices.add',compact('student','fees'));
    }
    public function delete($request){
        try{
            FeeInvoice::destroy($request->id);
            toastr()->error(trans('messages.delete'));
            return redirect()->route('Feeinvo.index');

        }catch(Exception $e){
          return redirect()->back()->withErrors(['errors'=>$e->getMessage()]);
        }

    }
}
