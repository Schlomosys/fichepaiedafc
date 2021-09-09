<?php

namespace App\Imports;

use App\Models\Fichepaie;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithStartRow;

class FichepaieImport implements ToModel, WithStartRow, WithCalculatedFormulas
{

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fichepaie([
            //
            'projet'=> $row[0],
            'nom_prenoms'=> $row[1],
            'statut'=> $row[2],
            'categorie'=> $row[3],
            'num_ifu'=> $row[4],
            'num_cnss'=> $row[5],
            'titre'=> $row[6],
            'num_mat'=> $row[7],
            'date_embauche'=> $row[8],
            'ifu'=> $row[9],
            'mode_paiement'=> $row[10],
            'num_comp_bancaire'=> $row[11],
            'banque'=> $row[12],
            'nb_enfant'=> $row[13],
            'salaire_base'=> $row[14],
            'prime_projet'=> $row[15],
            'prime_resp'=> $row[16],
            'prime_risq'=> $row[17],
            'prime_rend'=> $row[18],
            'indemn_deplacement'=> $row[19],
            'salaire_brut'=> $row[20],
            'cnss_po'=> $row[21],
            'cnss_pp'=> $row[22],
            'irpp_ts'=> $row[23],
            'vps'=> $row[24],
            'mass_sal'=> $row[25],
            'total_avanc'=> $row[26],
            'salaire_net'=> $row[27],
            'email'=> $row[28],
            'mois'=> $row[29],
            'annee'=> $row[30],

        ]);
    }
}
