
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  

    <style type="text/css">
    
    </style>

</head>
<body>


    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center lh-1 mb-2">
                    <h4 class="fw-bold">DEDRAS ONG</h4> <span class="fw-bold" >BULLETIN DE PAIE DE {{ $fichepaie->mois }} {{ $fichepaie->annee }}</span>
                </div>
                <div class="row">
                    <div class="col-md-10">
                         <div class="row">
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">N° Matricule :</span> <small class="ms-3">{{ $fichepaie->num_mat }}</small> </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Nom et Prénoms</span> <small class="ms-3">{{ $fichepaie->nom_prenoms }}</small> </div>
                            </div>
                        </div>
                       
                       
                    </div>
                <div class="text-center lh-1 mb-2">
                    <span class="fw-bold" >SITUATION ADMINISTRATIVE ET FAMILIALE</span>
                </div>
                <div class="row">
                    <div class="col-md-10">
                </div>
                
                </div>
                </div>
                <table class=" table table-bordered table-sm">
                    
                    <thead class="">
                        <tr>
                            <!--<th scope="col"></th>
                            <th scope="col"></th>-->
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><span class="fw-bolder">Projet :</span> <small class="ms-3">{{ $fichepaie->projet}}</small></td>
                            <td scope="row"></td>
                            
                        </tr>
                        <tr>
                            <td scope="row"><span class="fw-bolder">Date Embauche	:</span> <small class="ms-3">{{ $fichepaie->date_embauche}}</small></td>
                            <td><span class="fw-bolder">N° CNSS :</span> <small class="ms-3">{{ $fichepaie->num_cnss}}</small></td>
                            
                        </tr>
                        <tr>
                            <td scope=""><span class="fw-bolder">Statut :</span> <small class="ms-3"></small>Employé </td>
                            <td><span class="fw-bolder">N° IFU :</span> <small class="ms-3">{{ $fichepaie->num_ifu}}</small> </td>
                           
                        </tr>
                        <tr>
                            <td scope=""><span class="fw-bolder">Sit Matrimoniale :</span> <small class="ms-3">{{ $fichepaie->statut}}</small></td>
                            <td><span class="fw-bolder">Mode Règlement. :</span> <small class="ms-3">{{ $fichepaie->mode_paiement}}</small>  </td>
                            
                        </tr>
                        <tr>
                            <td scope=""> <span class="fw-bolder">Titre :</span> <small class="ms-3">{{ $fichepaie->titre}}</small></td>
                            <td><span class="fw-bolder">N° Compte :</span> <small class="ms-3">{{ $fichepaie->num_comp_bancaire}}</small> </td>
                            
                        </tr>
                        <tr>
                            <td scope=""><span class="fw-bolder">Catégorie :</span> <small class="ms-3">{{ $fichepaie->categorie}}</small></td>
                            <td><span class="fw-bolder">Banque :</span> <small class="ms-3">{{ $fichepaie->banque}}</small>   </td>
                            
                        </tr>
                    </tbody>
                </table>
                        
                <!--<div class="d-flex justify-content-end"> <span>Working Branch:ROHINI</span> </div>-->
               <div class="text-center lh-1 mb-2">
                    <span class="fw-bold" >SALAIRE DU MOIS DE {{ $fichepaie->mois }} {{ $fichepaie->annee }}</span>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        {{--  <div class="row">
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Projet :</span> <small class="ms-3">39124</small> </div>
                            </div>
                            <!--<div class="col-md-6">
                                <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">Ashok</small> </div>
                            </div>-->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Date Embauche	:</span> <small class="ms-3">101523065714</small> </div>
                            </div>
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">N° CNSS :</span> <small class="ms-3">28</small> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Statut :</span> <small class="ms-3"></small> </div>
                            </div>
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">N° IFU :</span> <small class="ms-3">SBI</small> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Sit Matrimoniale :</span> <small class="ms-3">Marketing Staff (MK)</small> </div>
                            </div>
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Mode Règlement. :</span> <small class="ms-3">*******0701</small> </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Titre :</span> <small class="ms-3">Marketing Staff (MK)</small> </div>
                            </div>
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">N° Compte :</span> <small class="ms-3">*******0701</small> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Catégorie :</span> <small class="ms-3">Marketing Staff (MK)</small> </div>
                            </div>
                            <div class="col-md-6">
                                <div> <span class="fw-bolder">Banque :</span> <small class="ms-3">*******0701</small> </div>
                            </div>
                        </div>--}}
                    </div>
                    <table class="table table-bordered  table-sm">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Rubriques</th>
                                <th scope="col">Base</th>
                                <th  scope="col" colspan="3">Part Employé</th>
                                <!--<th scope="col">-->
                                    <!--<td colspan="2">A</td>-->
                                     
                                        
                                          <!--<tr>
                                            <th>Qté/Tauxs</th>
                                            <th>Retenue</th>
                                            <th>Gains</th>

                                          </tr>-->

                                    




                                <!--</th>-->
                                <th scope="col" colspan="2">Part Patronale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <th scope="row">Qté/Taux</th>
                                <th scope="row">Retenue</th>
                                <th scope="row">Gains</th>
                                <th scope="row">Taux</th>
                                <th scope="row">Charge</th>
                            </tr>
                            <tr>
                                <th scope="row">SALAIRE DE BASE</th>
                                <th scope="row"> {{ number_format($fichepaie->salaire_base, 2,",",".") }}</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="">Prime de Projet</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ number_format($fichepaie->prime_projet, 2,",",".")}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                
                                <th scope="">Prime de Responsabilité</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ number_format($fichepaie->prime_resp, 2,",",".")}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="">Prime de risque</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ number_format($fichepaie->prime_risq, 2,",",".")}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="">Prime de rendement</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{ number_format($fichepaie->prime_rend, 2,",",".")}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="">Indemnité de déplacement</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> {{ number_format($fichepaie->indemn_deplacement, 2,",",".")}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row" >SALAIRE BRUT</th>
                                <th scope="row">{{ number_format($fichepaie->salaire_brut, 2,",",".")}}</th>
                                <td colspan="5"></td>
                                
                            </tr>
                            <tr>
                                <th scope="">Cotisations C.N.S.S.</th>
                                <td></td>
                                <td>0.036</td>
                                <td>{{number_format($fichepaie->cnss_po, 2,",",".")}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="">Charge patronale</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0.164</td>
                                <td>{{number_format($fichepaie->cnss_pp, 2,",",".")}}</td>
                            </tr>
                            <tr>
                                <th scope="">I.P.T.S.</th>
                                <td></td>
                                <td></td>
                                <td>{{number_format( $fichepaie->irpp_ts, 2,",",".")}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="">VPS</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0.04</td>
                                <td>{{number_format(  $fichepaie->vps, 2,",",".")}}</td>
                            </tr>
                            <tr>
                                <th scope="">REMB AVANCES SUR SALAIRE</th>
                                <td>{{number_format($fichepaie->total_avanc, 2,",",".")}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">SALAIRE NET.</th>
                                <th scope="row">{{number_format($fichepaie->salaire_net, 2,",",".")}}</th>
                                <td colspan="5"></td>
                            </tr>
                            <!--<tr>
                                <th scope="">I.P.T.S.</th>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <th scope="">I.P.T.S.</th>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                            </tr>
                            <tr class="border-top">
                                <th scope="row">Total Earning</th>
                                <td>25970.00</td>
                                <td>Total Deductions</td>
                                <td>2442.00</td>
                            </tr>-->
                        </tbody>
                    </table>
                    <!--<div class="text-center lh-1 mb-2">
                        <span class="fw-normal">--------------------------------------------</span>
                    </div>-->

                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col" rowspan="2">Salaire Brut</th>
                                <th  scope="col" colspan="2">Part Employé</th>
                                <th scope="col" colspan="2">Part Patronale</th>
                                <th scope="col"  rowspan="2">Masse Salariale</th>
                                <th scope="col"  rowspan="2">Salaire NET</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <th scope="row">CNSS</th>
                                <th scope="row">IPTS</th>
                                <th scope="row">CNSS</td>
                                <th scope="row">VPS</th>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th scope="row">{{ $fichepaie->salaire_brut}}</th>
                                <td>{{number_format($fichepaie->cnss_po, 2,",",".")}}</td>
                                <td>{{number_format($fichepaie->irpp_ts, 2,",",".")}}</td>
                                <td>{{number_format($fichepaie->cnss_pp, 2,",",".")}}</td>
                                <td>{{number_format($fichepaie->vps, 2,",",".")}}</td>
                                <td>{{number_format($fichepaie->mass_sal, 2,",",".")}}</td>
                                <th scope="row">{{number_format($fichepaie->salaire_net, 2,",",".")}}  FCFA</th>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!--<div class="row">
                    <div class="col-md-4"> <br> <span class="fw-bold">Net Pay : 24528.00</span> </div>
                    <div class="border col-md-8">
                        <div class="d-flex flex-column"> <span>In Words</span> <span>Twenty Five thousand nine hundred seventy only</span> </div>
                    </div>
                </div>-->
                <!--<div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-start">
                            <div class="d-flex flex-column mt-2"> <span class="fw-bolder">L’Employé</span> <span class="" style="font-weight: bold;">{{ $fichepaie->nom_prenoms }}</span> <span class="" style="font-weight: bold;"></span> </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex flex-column mt-2"> <span class="fw-bolder">L’Employeur</span> <span class="" style="font-weight: bold;">Jean KPETERE</span><span class="" style="font-weight: bold;"></span>  </div>
                        </div>
                    </div>
                
                
                </div>-->
                <table class="table table-bordered">
                    
                    <thead class="">
                        <tr>
                            <th scope="col"><div class="text-center lh-1 mb-2">
                                <span class="fw-bolder" style="">L’Employé</span>
                            </div></th>
                            <th scope="col"><div class="text-center lh-1 mb-2">
                                <span class="fw-bolder" style="">L’Employeur</span>
                            </div></th>
                            
                        </tr>
                        <tr>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan=""><div class="text-center lh-1 mb-2">
                                <span class="fw-bolder" style="color: white;">signature</span>
                            </div></td>
                            <td rowspan=""><div class="text-center lh-1 mb-2">
                                <span class="fw-bolder" style=""><div class="row justify-content-center" style="font-family: 'Dosis';
                                    font-weight: bold; color:black;"><img class="photocouv" alt="100x100" src="{{ asset($signat->profile_image) }}" data-holder-rendered="true" style="height:50px; width:125px; ;"></div></span>
                            </div></td>   
 
                        </tr>
                        <tr>
                            
                            <td> <div class="text-center lh-1 mb-2">
                                <span class="fw-bolder">{{ $fichepaie->nom_prenoms }}</span>
                            </div> </td>
                            <td><div class="text-center lh-1 mb-2">
                                <span class="fw-bolder">Jean KPETERE</span>
                            </div> </td>    
                        </tr>
                        
                        
                       
                    </tbody>
                </table>
                <!--<div>generate the {{ date('Y-m-d ') }}<div>-->
            </div>
        </div>
    </div>
    


</body>
</html>
