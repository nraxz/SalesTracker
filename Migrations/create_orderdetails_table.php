<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdetailsTable extends Migration
{
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->integer('orderNumber');
            $table->string('productCode', 15);
            $table->integer('quantityOrdered');
            $table->decimal('priceEach', 10, 2);
            $table->smallInteger('orderLineNumber');
            $table->primary(['orderNumber', 'productCode']);
            $table->foreign('orderNumber')->references('orderNumber')->on('orders')->onDelete('cascade');
            $table->foreign('productCode')->references('productCode')->on('products')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orderdetails');
    }
}

?>