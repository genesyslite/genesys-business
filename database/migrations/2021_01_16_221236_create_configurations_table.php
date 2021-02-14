<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->string('field');
            $table->string('value')->nullable();
            $table->string('type')->nullable();
            $table->timestamps();
        });
        DB::table('configurations')->insert([
            [
                'field' => 'name',
                'value' => 'Genesys Lite',
                'type' => 'Business'
            ],
            [
                'field' => 'trade_name',
                'value' => 'Genesys Lite',
                'type' => 'Business'
            ],
            [
                'field' => 'number',
                'value' => '10714506370',
                'type' => 'Business'
            ],
            [
                'field' => 'identity_document_type_id',
                'value' => '6',
                'type' => 'Business'
            ],

            [
                'field' => 'soap_send_id',
                'value' => '01',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'soap_type_id',
                'value' => '01',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'soap_username',
                'value' => '',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'soap_password',
                'value' => '',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'soap_url',
                'value' => '',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'certificate',
                'value' => '',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'certificate_due',
                'value' => '',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'logo',
                'value' => '',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'logo_store',
                'value' => '',
                'type' => 'SUNAT'
            ],
            [
                'field' => 'operation_amazonia',
                'value' => false,
                'type' => 'SUNAT'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configurations');
    }
}
