<?php

namespace App\Repository;
use App\Models\PaymentStudent;
use App\Models\FundAccount;
use App\Models\StudentAcounte;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class student_paymentRepo implements student_paymentInterface{

    public function index(){
        $payment_students = PaymentStudent::all();
        return view('Payment.index',compact('payment_students'));

    }

    public function show($id){

        $student = Student::findorfail($id);
        return view('Payment.add',compact('student'));
    }

    public function edit($id){

        $payment_student = PaymentStudent::findorfail($id);
        return view('Payment.edit',compact('payment_student'));
    }

    public function store($request){

        DB::beginTransaction();

        try {

            // حفظ البيانات في جدول سندات الصرف
            $payment_students = new PaymentStudent();
            $payment_students->date = date('Y-m-d');
            $payment_students->student_id = $request->student_id;
            $payment_students->amount = $request->Debit;
            $payment_students->description = $request->description;
            $payment_students->save();


            // حفظ البيانات في جدول الصندوق
            $fund_accounts = new FundAccount();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->payment_id = $payment_students->id;
            $fund_accounts->Debit = 0.00;
            $fund_accounts->credit = $request->Debit;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();


            // حفظ البيانات في جدول حساب الطلاب
            $students_accounts = new StudentAcounte();
            $students_accounts->date = date('Y-m-d');
            $students_accounts->type = 'payment';
            $students_accounts->student_id = $request->student_id;
            $students_accounts->payment_id = $payment_students->id;
            $students_accounts->Debit = $request->Debit;
            $students_accounts->credit = 0.00;
            $students_accounts->description = $request->description;
            $students_accounts->save();

            DB::commit();
            toastr()->success(trans('messages.sucess'));
            return redirect()->route('Payment_students.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function update($request){

        DB::beginTransaction();

        try {

            // تعديل البيانات في جدول سندات الصرف
            $payment_students = PaymentStudent::findorfail($request->id);
            $payment_students->date = date('Y-m-d');
            $payment_students->student_id = $request->student_id;
            $payment_students->amount = $request->Debit;
            $payment_students->description = $request->description;
            $payment_students->save();


            // حفظ البيانات في جدول الصندوق
            $fund_accounts = FundAccount::where('payment_id',$request->id)->first();
            $fund_accounts->date = date('Y-m-d');
            $fund_accounts->payment_id = $payment_students->id;
            $fund_accounts->Debit = 0.00;
            $fund_accounts->credit = $request->Debit;
            $fund_accounts->description = $request->description;
            $fund_accounts->save();


            // حفظ البيانات في جدول حساب الطلاب
            $students_accounts = StudentAcounte::where('payment_id',$request->id)->first();
            $students_accounts->date = date('Y-m-d');
            $students_accounts->type = 'payment';
            $students_accounts->student_id = $request->student_id;
            $students_accounts->payment_id = $payment_students->id;
            $students_accounts->Debit = $request->Debit;
            $students_accounts->credit = 0.00;
            $students_accounts->description = $request->description;
            $students_accounts->save();
            DB::commit();
            toastr()->success(trans('messages.edit'));
            return redirect()->route('Payment_students.index');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function destroy($request){
        try {
            PaymentStudent::destroy($request->id);
            toastr()->error(trans('messages.delete'));
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}