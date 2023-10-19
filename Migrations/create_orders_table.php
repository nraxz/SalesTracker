<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('orderNumber')->primary();
            $table->date('orderDate');
            $table->date('requiredDate');
            $table->date('shippedDate')->nullable();
            $table->string('status', 15);
            $table->text('comments')->nullable();
            $table->integer('customerNumber');
            $table->foreign('customerNumber')->references('customerNumber')->on('customers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}

?>