<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('productCode', 15)->primary();
            $table->string('productName', 70);
            $table->string('productLine', 50);
            $table->string('productScale', 10);
            $table->string('productVendor', 50);
            $table->text('productDescription');
            $table->smallInteger('quantityInStock');
            $table->decimal('buyPrice', 10, 2);
            $table->decimal('MSRP', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}


?>