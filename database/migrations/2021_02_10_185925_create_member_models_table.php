<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_register', function (Blueprint $table) {
            $table->id();
            $table->string('member_id',20);
            $table->string('name',100);
            $table->string('position',100);
            $table->string('organization',191);
            $table->text('mailing_address');
            $table->text('office_resident');
            $table->string('education',191);
            $table->string('office_no',50);
            $table->string('resident_no',50);
            $table->string('fax',50);
            $table->string('mobile',50);
            $table->string('web',100);
            $table->string('user_img',191);
            $table->string('signature_img',191);
            $table->string('date',100);
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
        Schema::dropIfExists('member_register');
    }
}
