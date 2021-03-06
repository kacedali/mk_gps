<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarAbnormalTable extends Migration
{
    protected $table = 'car_abnormal';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->string('_id', 24)->unique();
            $table->string('car_id', 24);
            $table->string('car_no', 20);
            $table->string('car_brand_id', 24);
            $table->string('brand_name', 20);
            $table->text('check_item');
            $table->text('check_img');
            $table->text('check_remark');
            $table->timestamp('create_date');
            $table->string('create_user');
            $table->string('create_user_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->table);
    }

}
