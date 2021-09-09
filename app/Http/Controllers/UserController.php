<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Post;
use App\Models\Docdad;
use App\Models\Visibility;

use App\Models\Stat;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Notifications\DatabaseNotification;

//use Sagautam5\SocialShareCount\ShareCounter;

class UserController extends Controller
{
    use UploadTrait;
    //
    /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
/*public function index(Request $request)
{*/
/*$data = User::orderBy('id','DESC')->paginate(5);
return view('users.index',compact('data'))
->with('i', ($request->input('page', 1) - 1) * 5);*/

/*$users=User::orderBy('id', 'ASC')->paginate(10);*/
/*$users = User::where('id', '!=', auth()->user()->id)->get();
return view('users.index', compact('users'));
}*/
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
$roles = Role::pluck('name','name')->all();
return view('users.create',compact('roles'));
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$this->validate($request, [
'firstname'=> 'required',
'lastname'=> 'required',
'pays'=> 'required',
'numTel'=> 'required|string|min:8|max:11',
'email' => 'required|email|unique:users,email',
'password' => 'required|same:confirm-password',
'roles' => 'required'
]);
$input = $request->all();
$input['password'] = Hash::make($input['password']);
$user = User::create($input);
$user->assignRole($request->input('roles'));
return redirect()->route('users.index')
->with('success','User created successfully');
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$user = User::find($id);
return view('users.show',compact('user'));
}
/**
* Show the form for editing the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$user = User::find($id);
$roles = Role::pluck('name','name')->all();
$userRole = $user->roles->pluck('name','name')->all();
return view('users.edit',compact('user','roles','userRole'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$this->validate($request, [
'firstname'=> 'required',
'lastname'=> 'required',
'pays'=> 'required',
'numTel'=> 'required|string|min:8|max:11',
'email' => 'required|email|unique:users,email,'.$id,
'password' => 'same:confirm-password',
'roles' => 'required'
]);
$input = $request->all();
if(!empty($input['password'])){ 
$input['password'] = Hash::make($input['password']);
}else{
$input = Arr::except($input,array('password'));    
}
$user = User::find($id);
$user->update($input);
DB::table('model_has_roles')->where('model_id',$id)->delete();
$user->assignRole($request->input('roles'));
return redirect()->route('users.index')
->with('success','User updated successfully');
}

/**
* Store a newly created resource in storage.
* @return \Illuminate\Http\Response
*/

public function editer()
    {
        return view('users.updateUser');
    }


/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/

public function updateProfile(Request $request)
{
    // Form validation
    $request->validate([
        'firstname'=> 'required',
        'lastname'=> 'required',
        'profile_image'  =>'|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    // Get current user
    $user =User::findOrFail(auth()->user()->id);
    // Set user name
    $user->firstname = $request->input('firstname');
    $user->lastname = $request->input('lastname');
  

    // Check if a profile image has been uploaded
    if ($request->has('profile_image')) {
        // Get image file
        $image = $request->file('profile_image');
        // Make a image name based on user name and current timestamp
        $name = Str::slug($request->input('lastname')).'_'.time();
        // Define folder path
        $folder = '/uploads/images/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        // Upload image
        $this->uploadOne($image, $folder, 'public', $name);
        // Set user profile image path in database to filePath
        $user->profile_image = $filePath;
    }
    // Persist user record to database
    $user->save();

    // Return user back and show a flash message
    return redirect()->back()->with(['status' => 'Profile updated successfully.']);
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
 public function destroy($id)
  {
     User::find($id)->delete();
     return redirect()->back()->with(['success' => 'User deleted successfully']);
  }

/***
 * USER'S FILES MANAGEMENT
 */
public function filesIndex($id){
    // $profile = Profile::find($id);
    //$categories=Categorie::all();
    $user = User::findOrFail(auth()->user()->id);
    $files=File::where('user_id', "=", $user->id)->get();
     return view('file.index',compact('user', 'files'));
   }


public function saveFile(Request $request, $id){
    $request->validate([
    'name'=> 'required',
    'filer.*' => 'required|file|mimes:pdf|max:5000',
  

    ]);
   // 'filer.*' => 'required|file|mimes:csv,txt,xlx,xls,pdf|max:5000',

   // Check if a profile image has been uploaded
   $file= new File;
   $file->type = $request->input('name');
  
  
  // $file->slug=$request->input('name');

  
   if($request->has('description'))
   {
    $file->description=$request->input('description');
   }
   if ($request->has('filer')) {
    // Get image file
    $image = $request->file('filer');
    // Make a image name based on user name and current timestamp
    $name = Str::slug($request->input('name')).'_'.time();
    // Define folder path
    $folder = '/uploads/userfiles/';
    // Make a file path where image will be stored [ folder path + file name + file extension]
    $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
    // Upload image
    $this->uploadOne($image, $folder, 'public', $name);
    // Set user profile image path in database to filePath
    $file->name = $filePath;
  }
  $file->user_id=$id;
  /* $file->user_id=auth()->user()->id;*/
   $file->save();


// Return user back and show a flash message
return redirect()->back()->with(['success' => 'file saved successfully.']);
}

// voir un fichier telechargé 
public function voirfile($id){
    $filename = 'testa.pdf';
    
        $dir = '/';
        $recursive = false; // Get subdirectories also?
        $contents = collect(\Storage::cloud()->listContents($dir, $recursive));
    
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first();
        $filepath=$file['path'];    
    $user = User::findOrFail(auth()->user()->id);
    $file = File::find($id);
    return view('file.epubreadfile',compact('user', 'file', 'filepath'));
  }

//delete file
  public function deletefile($id){
    $userId= auth()->user()->id; 
    $file=File::find($id);
    $user_Id=$file->user_id;
    if($userId==$user_Id){
        File::find($id)->delete();
        return redirect()->route('file.index',$userId)
          ->with('success','File deleted successfully');

    }


    
    return redirect()->route('file.index',$userId)
    ->with('success','You can not delete this file');

   }
   /**POSTS */
   /***
 * 
 * TRAITEMENT DES POSTES|||
 * 
 * 
 */
public function ajoutPost(Request $request){
    // $profile = Profile::find($id);
    //$categories=Categorie::all();
    
    $user = User::findOrFail(auth()->user()->id);
    $docdads=Docdad::where([
        ['visibility_id',"<=",$user->visibility_id],
        ['title', '!=', null],
        [function ($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('title', 'ilike',"{$term}%")->orWhere('title', 'ilike',"%{$term}%")->orWhere('references', 'ilike',"%{$term}%")->get();

                }  
       }]
       ])
        ->orderBy("created_at", "desc")
         ->paginate(35);
     return view('post.addpost',compact('user','docdads'));
   }
   public function editUtil(Request $request){
    // $profile = Profile::find($id);
    //$categories=Categorie::all();
    $user = User::findOrFail(auth()->user()->id);
    $docdads=Docdad::where([
        ['visibility_id',"<=",$user->visibility_id],
        ['title', '!=', null],
        [function ($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('title', 'ilike',"{$term}%")->orWhere('title', 'ilike',"%{$term}%")->orWhere('references', 'ilike',"%{$term}%")->get();

                }  
       }]
       ])
        ->orderBy("created_at", "desc")
         ->paginate(35);
     return view('post.editprofile',compact('user','docdads'));
   }
   
   
   
   public function savePost(Request $request, $id){
    $user = User::findOrFail(auth()->user()->id);
     $request->validate([
     'title'=> 'required',
     'body'=>'required',
    
     //'slug'=> 'required',
     
   
     ]);
     //Poste::create($request->all());
     $poste = new Post;
     $poste->title = $request->input('title');
     $poste->body=$request->input('body');
    
     $poste->slug=Str::slug($request->input('title')).'_'.time();
 
     $poste->user_id=auth()->user()->id;
     $hashtag_set = [];
     $keywords=[];
     preg_match_all('/#([A-Za-z0-9_]{1,15}(?!\w))/',     $poste->body, $matches);
     if($matches!=null){
     foreach ($matches[1] as $match) {
         $keywords = $match;
     }
     $hashtag_set=(array) $keywords;
    }
     /*$array = explode('#', $poste->body);
 
     foreach ($array as $key => $row) {
     $hashtag = [];
     if (!empty($row)) {
         $hashtag =  explode(' ', $row);
         $hashtag_set[] = '#' . $hashtag[0];
     }
    }*/
 
     $poste->save();
     
     $poste->attachTags($hashtag_set);
     
     return redirect()->route('user.postLists',$user->pseudo)
     ->with(['success' => ' Votre post a été créée avec succès']);
   
     /*return redirect()->back()->with(['success' => ' Votre post a été créée avec succès']);*/
   }
   
   
    // voir les annonces du recruteur [liste]
    public function postLists($id, Request $request){
     //$profile = Profile::find($id);
     $user = User::findOrFail(auth()->user()->id);
     //postes
    /* $posts=Post::where('user_id', "=", $user->id)->get();*/
     $posts=Post::where([
         
        ['title', '!=', null],
         [function ($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('title', 'LIKE','%'.$term.'%')->get();

                }  
       }]
       ])
         ->orderBy("id", "desc")
         ->paginate(100);//, $profile->id)->get();
     return view('post.forum',compact('user', 'posts'));
   }
     // voir les annonces du recruteur [liste]
     public function favoritepost($id, Request $request){
        //$profile = Profile::find($id);
        $user = User::findOrFail(auth()->user()->id);
        //postes
       /* $posts=Post::where('user_id', "=", $user->id)->get();*/
        $posts=Post::where([
           ['title', '!=', null],
            [function ($query) use ($request){
                   if(($term =$request->term)){
                       $query->orWhere('title', 'LIKE','%'.$term.'%')->get();
   
                   }  
          }]
          ])
            ->orderBy("id", "desc")
            ->paginate(100);//, $profile->id)->get();
        return view('post.favorite',compact('user', 'posts'));
      }

   public function account($id, Request $request){
    //$profile = Profile::find($id);
    $user = User::findOrFail(auth()->user()->id);
    if($user->hasRole('Admin2')){
      
       $docdads=Docdad::where([
            ['visibility_id',"<=",$user->visibility_id],
            ['title', '!=', null],
            [function ($query) use ($request){
                    if(($term =$request->term)){
                        $query->orWhere('title', 'ilike',"{$term}%")->orWhere('title', 'ilike',"%{$term}%")->orWhere('references', 'ilike',"%{$term}%")->get();
    
                    }  
           }]
           ])
            ->orderBy("created_at", "desc")
             ->paginate(35);
          /* $docdads=Docdad::when($request->term, function ($query, $term) {
            return $query->where('title', 'ilike',"{$term}%");
        })->when($request->term, function ($query, $term) {
            return $query->where('title', 'ilike', "%{$term}%");
        })->orderBy("id", "desc")->paginate(15);*/
            
          
             return view('post.adminaccount',compact('user','docdads',))
            ->with('i', ($request->input('page', 1) - 1) * 1);//, $profile->id)->get();
    }
    else{
        $docdads=Docdad::where([
            ['visibility_id',"<=",$user->visibility_id],
            ['title', '!=', null],
             [function ($query) use ($request){
                    if(($term =$request->term)){
                        $query->orWhere('title', 'ilike',"{$term}%")->orWhere('title', 'ilike',"%{$term}%")->orWhere('references', 'ilike',"%{$term}%")->get();
    
                    }  
           }]
           ])
            ->orderBy("name", "desc")
             ->paginate(3);
          /* $docdads=Docdad::when($request->term, function ($query, $term) {
            return $query->where('title', 'ilike',"{$term}%");
        })->when($request->term, function ($query, $term) {
            return $query->where('title', 'ilike', "%{$term}%");
        })->orderBy("id", "desc")->paginate(15);*/
            
          
             return view('post.account',compact('user','docdads',))
            ->with('i', ($request->input('page', 1) - 1) * 1);

    }
    //postes
  
   
  }
  public function historique($id, Request $request){
    //$profile = Profile::find($id);
    $user = User::findOrFail(auth()->user()->id);
    //postes
    $docdads=Stat::where([
        ['user_id', '=', $user->id],
         [function ($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('title', 'LIKE','%'.$term.'%')->get();

                }  
       }]
       ])
         ->orderBy("id", "desc")
         ->paginate(10);
      
         return view('post.historique',compact('user','docdads',))
        ->with('i', ($request->input('page', 1) - 1) * 1);//, $profile->id)->get();
   
  }
   public function onepostshow(Post $post) {
     $user = User::findOrFail(auth()->user()->id);
    // $url="http://127.0.0.1:8080/dadedras/public/article/".$post->slug."";
     //$redditS= ShareCounter::getRedditShares($url);
     //$post->seo_title=$redditS;
     //$post->save();
     return view('post.postshow',compact('user','post',));
 
    }
   
    public function deletepost($id){
     $userId= auth()->user()->id;  
     Post::find($id)->delete();
     return redirect()->route('user.account',$userId)
     ->with('success','Post deleted successfully');
 
    }



/**NOTIFICATIONS */
   public function notifications()
    {
        $notifs=auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
        return response()->json(array('success' => true, 'notifs' => $notifs));
    }


    public function getNotifs($id)
    {
        $notifs=Poste::where('notifiable_id', "=", $id)->get();
        return response()->json(array('success' => true, 'notifs' => $notifs));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Notifications\DatabaseNotification $notification
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function updateNotifs(Request $request, DatabaseNotification $notification)
    {
        $notification->markAsRead();
        if($request->user()->unreadNotifications->isEmpty()) {
            return redirect()->route('myusers');
        }
        return back();
    }

    public function activation(Request $request)
    {

    $user = User::findOrFail($request->user_id);

    if($user->valid ==true){
        $user->valid = false;
        $user->save();
        return response()->json(['success'=>true]);
    } else {
        $user->valid = true;
        $user->save();
        return response()->json(['success'=>false]);
    }
    }


    
    public function accreditation (Request $request)
    {

    $user = User::findOrFail($request->user_id);
    $accredit=Visibility::where('name', "=", $request->niv)->get();
    $user->visibility_id=$accredit->id;
    $user->save();
    
    return redirect()->route('admin.userslist',)
    ->with('success','Accreditation level changed');

    /*if($user->valid ==true){
        $user->valid = false;
        $user->save();
        return response()->json(['success'=>true]);
    } else {
        $user->valid = true;
        $user->save();
        return response()->json(['success'=>false]);
    }*/

   /* return response()->json([
      'data' => [
        'success' => $user->save(),
      ]
    ]);*/
    }

    public function accountlire($id){
        $user = User::findOrFail(auth()->user()->id);
        $docdad=Docdad::find($id);
        /*$unstats=Stat::where('user_id', "=", $user->id)->where('docdad_id', "=", $docdad->id)->first()->get();*/
        if($docdad->visibility_id==$user->visibility_id){
            /*if((Stat::where('user_id', "=", $user->id)->where('docdad_id', "=", $docdad->id)->first()->get())!= null){
                $unstats=Stat::where('user_id', "=", $user->id)->where('docdad_id', "=", $docdad->id)->first()->get();
                foreach ($unstats as $unstat)
                      {
                        $unstat->datelecture=now();
                          $unstat->save();
                        }
                /*$unstat->datelecture=now();
                $unstat->save();*/
             /* $unstat->update(array("datelecture" => now()));

                return view('post.accountread',compact('user','docdad'));


            }
            else{*/
                $stat= new Stat;
            $stat->datelecture=now();
            $stat->user_id=$user->id;
            $stat->docdad_id=$docdad->id;
            $stat->save();
            /*return view('liredoc',compact('user', 'file', 'filepath'));*/
            return view('post.accountread',compact('user','docdad'));
           // }
            

        }
        else{
            return abort(404);
        }
        /*$filename = 'testa.pdf';
        
            $dir = '/';
            $recursive = false; // Get subdirectories also?
            $contents = collect(\Storage::cloud()->listContents($dir, $recursive));
        
            $file = $contents
                ->where('type', '=', 'file')
                ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
                ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
                ->first();
            $filepath=$file['path'];    
        $user = User::findOrFail(auth()->user()->id);
        $file = File::find($id);*/
     
       
      }
      public function parametres (Request $request){
        // $profile = Profile::find($id);
        //$categories=Categorie::all();
          //$profile = Profile::find($id);
    $user = User::findOrFail(auth()->user()->id);
    //postes
    $docdads=Docdad::where([
        ['title', '!=', null],
         [function ($query) use ($request){
                if(($term =$request->term)){
                    $query->orWhere('title', 'LIKE','%'.$term.'%')->get();

                }  
       }]
       ])
         ->orderBy("id", "desc")
         ->paginate(3);
      
         return view('post.parametres',compact('user','docdads',))
        ->with('i', ($request->input('page', 1) - 1) * 1);
     
       }
       public function aide (Request $request){
        // $profile = Profile::find($id);
        //$categories=Categorie::all();

        $user = User::findOrFail(auth()->user()->id);
        //postes
        $docdads=Docdad::where([
            ['title', '!=', null],
             [function ($query) use ($request){
                    if(($term =$request->term)){
                        $query->orWhere('title', 'LIKE','%'.$term.'%')->get();
    
                    }  
           }]
           ])
             ->orderBy("id", "desc")
             ->paginate(3);
          
             return view('post.aide',compact('user','docdads',))
            ->with('i', ($request->input('page', 1) - 1) * 1);
       }


}
