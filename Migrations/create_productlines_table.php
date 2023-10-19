<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductlinesTable extends Migration
{
    public function up()
    {
        Schema::create('productlines', function (Blueprint $table) {
            $table->string('productLine', 50)->primary();
            $table->string('textDescription', 4000)->nullable();
            $table->mediumText('htmlDescription')->nullable();
            $table->mediumBlob('image')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productlines');
    }
}

?>