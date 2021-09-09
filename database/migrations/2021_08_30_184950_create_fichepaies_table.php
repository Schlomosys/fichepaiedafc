<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichepaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichepaies', function (Blueprint $table) {
            $table->id();

            $table->string('projet')->nullable();
            $table->string('nom_prenoms')->nullable();
            $table->string('statut')->nullable();
            $table->string('categorie')->nullable();
            $table->string('num_ifu')->nullable();
            $table->string('num_cnss')->nullable();
            $table->string('titre')->nullable();
            $table->string('num_mat')->nullable();
            $table->string('date_embauche')->nullable();
            $table->string('ifu')->nullable();
            $table->string('mode_paiement')->nullable();
            $table->string('num_comp_bancaire')->nullable();
            $table->string('banque')->nullable();
            $table->string('nb_enfant')->nullable();
            $table->string('salaire_base')->nullable();
            $table->string('prime_projet')->nullable();
            $table->string('prime_resp')->nullable();
            $table->string('prime_risq')->nullable();
            $table->string('prime_rend')->nullable();
            $table->string('indemn_deplacement')->nullable();
            $table->float('salaire_brut')->nullable();
            $table->string('cnss_po')->nullable();
            $table->string('cnss_pp')->nullable();
            $table->string('irpp_ts')->nullable();
            $table->float('vps')->nullable();
            $table->float('mass_sal')->nullable();
            $table->string('total_avanc')->nullable();
            $table->float('salaire_net')->nullable();
            $table->string('email')->nullable();
            $table->string('mois')->nullable();
            $table->string('annee')->nullable();

           ;


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
        Schema::dropIfExists('fichepaies');
    }
}
