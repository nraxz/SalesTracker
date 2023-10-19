<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('employeeNumber')->primary();
            $table->string('lastName', 50);
            $table->string('firstName', 50);
            $table->string('extension', 10);
            $table->string('email', 100);
            $table->string('officeCode', 10);
            $table->integer('reportsTo')->nullable();
            $table->string('jobTitle', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
?>