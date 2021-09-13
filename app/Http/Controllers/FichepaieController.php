<?php

namespace App\Http\Controllers;

use App\Models\Fichepaie;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Str;
use App\Traits\UploadTrait;
use App\Models\User;

use DB;
use Hash;
use Illuminate\Support\Arr;

use PDF;
use Mail;


class FichepaieController extends Controller
{

    use UploadTrait;
    //
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:role-list|role-create|role-edit|role-delete', ['only' => ['index','store', 'userindex','adminlire','edituser']]);
         $this->middleware('permission:role-create', ['only' => ['create','store',]]);
         $this->middleware('permission:role-edit', ['only' => ['edit','update', 'userindex','adminlire', 'edituser']]);
         $this->middleware('permission:role-delete', ['only' => ['destroy', 'userindex','adminlire','edituser']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fichepaie  $fichepaie
     * @return \Illuminate\Http\Response
     */
    public function show(fichepaie $fichepaie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fichepaie  $fichepaie
     * @return \Illuminate\Http\Response
     */
    public function edit(fichepaie $fichepaie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fichepaie  $fichepaie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fichepaie $fichepaie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fichepaie  $fichepaie
     * @return \Illuminate\Http\Response
     */
    public function destroy(fichepaie $fichepaie)
    {
        //
    }


        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function generatepdf(Request $request)
    {
      //  $fichepaie=Fichepaie::all();
        /*Fichepaie::chunk(100, function ($bullpaies) {
           
        });*/
        //Fichepaie::all()->first()->delete();

        //Fichepaie::chunk(100, function ($bullpaies) {

            set_time_limit(0);
        $fichepaies=Fichepaie::all();
        foreach($fichepaies as $key => $fichepaie)
         {
        //$user_details = Users::where('id',$invoice->user_id)->first();
           $html = '';
           $signat=User::findOrFail(auth()->user()->id);
           $view = view('fiche_paie')->with(compact('fichepaie', 'signat'));
           $html .= $view->render();
           set_time_limit(0);
           #$pdf = PDF::loadHTML($html)->setPaper('a4', 'landscape')->save(public_path().'/uploads/'.$fichepaie->num_mat.'.pdf');


           #$pdf = App::make('snappy.pdf.wrapper');setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0)
           #$pdf = PDF::loadHTML($html)->save(public_path().'/uploads/'.$fichepaie->created_at.'.pdf');
           $pdf = PDF::loadHTML($html)->setPaper('a4');
  

           $data["email"] = $fichepaie->email;
           $data["title"] = "Direction des affaires financières de DEDRAS -ONG";
           $data["body"] = "Vous avez en pièces-jointes votre bulletin de paie du mois.";
  
           #$pdf = PDF::loadView('emails.myTestMail', $data);
  
           Mail::send('bullpaiemail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "fichedepaie.pdf");
           });
        //$this->uploadOne($image, $folder, 'public', $name);
         }
           
        //});

        return redirect()->route('importExportView')
        ->with('success','Les fiches de paies on été envoyé avec succès');
    }
    public function sendBulkMail(Request $request)
    {
    	$details = [
    		'subject' => 'Weekly Notification'
    	];

    	// send all mail in the queue.
        $job = (new \App\Jobs\SendBulkQueueEmail())
            ->delay(
            	now()
            	->addSeconds(5)
            ); 

        dispatch($job);

        return redirect()->route('importExportView')
        ->with('success','Les fiches de paies on été envoyé avec succès');
    }
    
    public function visualiser($id)
    {
        //
        $signat=User::findOrFail(auth()->user()->id);;
        $fichepaie = Fichepaie::find($id);
        return view('fiche_paie', compact('fichepaie', 'signat'));


    }
    public function showfiche($id)
   {
     $user = User::find($id);
      return view('users.show',compact('user'));
    }

}
