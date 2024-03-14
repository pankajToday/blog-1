<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\In;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * show Main page .
     * @return \Inertia\Response
     */
    function  mainPage(){
        return Inertia::render('Main');
    }

    function contactUs(){
        return view('zenBlog.contact');
    }

    function contactPost(Request $request)
    {
        $request->validate([
            'name'=>'required' ,
            'email'=>'required|email' ,
            'subject'=>'required|max:120' ,
            'message'=>'required|max:200|min:10'
        ]);


        try{
            ContactUs::create([
                'name'=>$request->name ,
                'email'=>$request->email ,
                'subject'=>$request->subject ,
                'message'=>$request->message ]);

            return response()->json(['message' =>"message send!"],200);
        }
        catch (\Exception $e){ return $e ;
            return response()->json(['message' =>"something went wrong!"],500);
        }
    }

    function aboutUs(){
        //return view('zenBlog.about');
        return Inertia::render('website/Main/about');
    }

    function AIShow(){
        return  Inertia::render('website/Main/AI/TextToVoiceRapidAPI');
    }

    function testCode(Request $request){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.collectapi.com/sms/sendSms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"from\" : \"Test User\",\"to\" : \"9031251290\",\"text\" : \"Merhaba, nasılsın?\"}",
            CURLOPT_HTTPHEADER => array(
                "authorization: apikey 71Br45fMErLMKUgkof7lt2:1j8hmtnWxUfmAdiZz5Rx1H",
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            return json_decode($response,true);
        }
    }

    function uploadFile(Request $request){
        $request->validate([
            'file_name' => 'required',
            'file' => 'required|mimes:jpeg,png,jpg,mp4,mp3,wav,mp4,mpeg,avi,mov,wnv,mkv|max:6048'
        ]);

        $url="project-assets/images/website/post-images";
        $fileName= $request->file_name.'.'.$request ->file('file')->extension();
        $type = $this->getFileType($request ->file('file')->extension());

        $path = public_path($url);
        /*!is_dir($path) &&
        mkdir($path, 0777, true);*/
        $request->file->move($path, $fileName);

        return response()->json([
            'status' => 'success','url'=>url($url.'/'.$fileName),
            'file_name'=>$fileName,'type'=>$type], 200);

    }

    function deleteUploadedFile(Request $request){
       // $fileURL = "http://127.0.0.1:8000/project-assets/images/website/post-images/1710433042656.jpg";

        $filePath = explode('/project-assets/',$request->fileURL);
        $filePath = @$filePath[1]? public_path('project-assets/'.$filePath[1]):'';
        if( File::exists( $filePath ) )
        {
            File::delete($filePath);
            return  response()->json(['status' =>'success' ,'message' =>'File removed.' ]);
        }
        return response()->json(['status' =>'error' ,'message' =>'Unable to removed file.' ]);


    }

    function getFileType( $media ){
        if( in_array($media , ['jpg','jpeg','png']) ) {
            return 'image';
        }
        elseif ( in_array($media , ['mp4','mpeg','avi','mov','wnv','mkv'])  ){
            return 'video';
        }
        elseif ( in_array($media , ['mp3','wav'])  ){
            return 'audio';
        }
        elseif ( in_array($media , ['pdf'])  ){
            return 'pdf';
        }
        elseif ( in_array($media , ['doc','elx','txt','xml','ppt','pptx','docx','csv'])  ){
            return 'document';
        }
    }

    public function store()
    {
        request()->validate([
            'file' => ['mimes:jpeg,png,jpg', 'max:100000']
        ], [
            'max' => 'File cannot be larger than 10MB.'
        ]);

        $file = request()->file('file');
        $filePath = request()->file_path . $file->getClientOriginalName();
        Storage::disk('s3')->put($filePath, file_get_contents($file));

        $url = env('AWS_URL').'/'.$filePath;
        $filename = preg_replace('/\.\w+$/', '', $file->getClientOriginalName());

        return [
            'url' => $url,
            'name' => $filename,
            'extension' => $file->getClientOriginalExtension(),
            'type' => in_array($file->getClientOriginalExtension() , ['mp4','avi','mpg','mov','flv','webm','mkv','wmv']) == true?'video':'image'
        ];
    }




}
