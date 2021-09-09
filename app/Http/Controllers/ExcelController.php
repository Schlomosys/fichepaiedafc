<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Fichepaie;
use Illuminate\Http\Request;
use App\Exports\FichepaieExport;
use App\Imports\FichepaieImport;

class ExcelController extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExportView()
    {
       $bullpaies=Fichepaie::all();
       $user =User::findOrFail(auth()->user()->id);
       return view('excel.index',compact('user', 'bullpaies'));
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportExcel($type) 
    {
        return \Excel::download(new FichepaieExport, 'Fichepaies.'.$type);
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExcel(Request $request) 
    {
        $bullpaies=Fichepaie::all();
        foreach($bullpaies as $key => $bullpaie)
        {
           $bullpaie->delete();

        }
        \Excel::import(new FichepaieImport,$request->import_file);


        //Fichepaie::all()->first()->delete();
        \Session::put('success', 'Votre fichier excel a été importé avec succès.');


           
        //return back();
        
        //return back()->with('success','Document enregistrer avec succès.');
        //return redirect()->back()->with(['success' => 'Document enregistré avec succès.']);
        return redirect()->route('importExportView')
       ->with('success','Document enregistré avec succès');
    }
}