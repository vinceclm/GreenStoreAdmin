<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoopMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coop_memberships', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id');
            $table->boolean('active')->default(true);
            $table->boolean('approved')->default(false);
            $table->timestamp('registration')->useCurrent();
            $table->timestamps();

            $table->foreign('user_id', 'coop_membership_user_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coop_memberships');
    }
}
