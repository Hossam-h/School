<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAcountesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_acountes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('type');

            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');

            $table->foreignId('receipt_id')->nullable()->references('id')->on('receipt_students')->onDelete('cascade');
            $table->foreignId('payment_id')->nullable()->references('id')->on('payment_students')->onDelete('cascade');

            $table->foreignId('Fee_invoice_id')->nullable()->references('id')->on('fee_invoices')->onDelete('cascade');
            $table->foreignId('processing_id')->nullable()->references('id')->on('processing_fees')->onDelete('cascade');
            $table->foreignId('Grade_id')->nullable()->references('id')->on('Grades')->onDelete('cascade');
            $table->foreignId('Classroom_id')->nullable()->references('id')->on('classrooms')->onDelete('cascade');
            $table->decimal('Debit',8,2)->nullable();
            $table->decimal('credit',8,2)->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_acountes');
    }
}
