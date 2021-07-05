<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoopMembershipMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coop_membership_metas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('coop_membership_id');
            $table->json('member_information')->default('{}');
            $table->json('family_profile')->default('{}');
            $table->json('banking_information')->default('{}');
            $table->json('documents')->default('{}');
            $table->timestamps();

            $table->foreign('coop_membership_id', 'coop_membership_metas_mem')->references('id')->on('coop_memberships');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coop_membership_metas');
    }
}
