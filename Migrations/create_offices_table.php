<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->string('officeCode', 10)->primary();
            $table->string('city', 50);
            $table->string('phone', 50);
            $table->string('addressLine1', 50);
            $table->string('addressLine2', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('country', 50);
            $table->string('postalCode', 15);
            $table->string('territory', 10);
        });
    }

    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
?>
