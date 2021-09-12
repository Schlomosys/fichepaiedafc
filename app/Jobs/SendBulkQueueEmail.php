<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use DB;
use Hash;
use App\Models\Fichepaie;
use App\Models\User;
use PDF;
use Mail;

class SendBulkQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    public $timeout = 7200;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        
        set_time_limit(0);
        $fichepaies=Fichepaie::all();
        foreach($fichepaies as $key => $fichepaie)
         {
        //$user_details = Users::where('id',$invoice->user_id)->first();
           $html = '';
           $signat=User::findOrFail(auth()->user()->id);
           $view = view('fiche_paie')->with(compact('fichepaie', 'signat'));
           $html .= $view->render();
           #set_time_limit(0);
           #$pdf = PDF::loadHTML($html)->setPaper('a4', 'landscape')->save(public_path().'/uploads/'.$fichepaie->num_mat.'.pdf');


           #$pdf = App::make('snappy.pdf.wrapper');setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0)
           #$pdf = PDF::loadHTML($html)->save(public_path().'/uploads/'.$fichepaie->created_at.'.pdf');
           $pdf = PDF::loadHTML($html)->setPaper('a4');
  

           $data["email"] = $fichepaie->email;
           $data["title"] = "Direction des affaires financières de DEDRAS -ONG";
           $data["body"] = "Vous avez en pièces-jointes votre bulletin de paie du mois. Repondez à cet e-mail par 'BIEN REÇU'";
  
           #$pdf = PDF::loadView('emails.myTestMail', $data);
  
           Mail::send('bullpaiemail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "fichedepaie.pdf");
           });
        //$this->uploadOne($image, $folder, 'public', $name);
         }
    }
}
