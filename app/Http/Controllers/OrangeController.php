<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mailstores;
use App\Models\Blogsco;
use App\Models\franchise;

class OrangeController extends Controller
{
   public function product()
   {
      $data['getRecord'] = blogsco::where('is_blog', 0)->get();
      return view('screens.home',$data);
   }
   public function product1()
   {
      return view('screens.about');
   }
  public function product613()
       {
        return view('screens.term');
       }
        public function product6131()
       {
        return view('screens.condition');
       }
          public function product61311()
       {
        return view('screens.disclaimer');
       }
          public function refund()
       {
        return view('screens.refind');
       }
           public function gallery()
       {
        return view('screens.gallery');
       }
   public function product3()
   {
      return view('screens.portfolio');
   }
   public function product4()
   {
      $data['getRecord'] = blogsco::where('is_blog', 0)->get();
      $data['getRecord1'] = blogsco::where('is_blog', 0)->get();
      return view('screens.blog', $data);
   }

   public function product6()
   {
      return view('screens.career');
   }
   public function product7()
   {
      return view('screens.faq');
   }
   public function product8()
   {
      return view('screens.contact');
   }
   public function product9(Request $request,$id)
   {
       $data['getRecord'] = blogsco::find($id);
       $data['getRecord1'] = blogsco::where('is_blog', 0)->get();

      return view('screens.blogDetail',$data);
   }
//    public function singleevent(Request $request,$id){
//       $data['getRecord'] = blogsco::find($id);
//       //  dd($data['getRecord']);
//       $data['getRecordone'] = blogsco::where('id', '!=', $id)->get(); // Fetch all resources except the one with the given ID

//       return view('tech.singleevent',$data);
//   }
   public function product10()
   {
      return view('screens.webdesign');
   }
   public function product11()
   {
      return view('screens.webdevelopment');
   }
   public function product12()
   {
      return view('screens.ecommerce');
   }
   public function product13()
   {
      return view('screens.mobapp');
   }
   public function product14()
   {
      return view('screens.digitalmarketing');
   }
   public function product15()
   {
      return view('screens.quality');
   }
   public function product16()
   {
      return view('screens.affordable');
   }
   public function product17()
   {
      return view('screens.corporate');
   }
   public function product18()
   {
      return view('screens.content');
   }
   public function product19()
   {
      return view('screens.creative');
   }
   public function product20()
   {
      return view('screens.html5');
   }
   public function product21()
   {
      return view('screens.responsive');
   }
   public function product22()
   {
      return view('screens.website');
   }
   public function product23()
   {
      return view('screens.phpweb');
   }
   public function product24()
   {
      return view('screens.react');
   }
   public function product25()
   {
      return view('screens.net');
   }
   public function product26()
   {
      return view('screens.realtime');
   }
   public function product27()
   {
      return view('screens.framework');
   }
   public function product28()
   {
      return view('screens.magento');
   }
   public function product29()
   {
      return view('screens.prestaShop');
   }





   public function product30()
   {
      return view('screens.startecomm');
   }

   public function product31()
   {
      return view('screens.premium');
   }
   public function product32()
   {
      return view('screens.magentoHosting');
   }
   public function product33()
   {
      return view('screens.prestaShopHosting');
   }
   public function product34()
   {
      return view('screens.android');
   }
   public function product35()
   {
      return view('screens.ios');
   }
   public function product36()
   {
      return view('screens.hybrid');
   }
   public function product37()
   {
      return view('screens.angular');
   }
   public function product38()
   {
      return view('screens.reactnative');
   }
   public function product39()
   {
      return view('screens.location');
   }
   public function product40()
   {
      return view('screens.nutrition');
   }
   public function product41()
   {
      return view('screens.flutter');
   }
   public function product42()
   {
      return view('screens.search');
   }
   public function product43()
   {
      return view('screens.off');
   }
   public function product44()
   {
      return view('screens.on');
   }
   public function product45()
   {
      return view('screens.global');
   }
   public function product46()
   {
      return view('screens.ebook');
   }
   public function product47()
   {
      return view('screens.contentMarketing');
   }
   public function product48()
   {
      return view('screens.trends');
   }
   public function product49()
   {
      return view('screens.testing');
   }
   public function product50()
   {
      return view('screens.audits');
   }
   public function product51()
   {
      return view('screens.control');
   }
   public function product52()
   {
      return view('screens.root');
   }
   public function product53()
   {
      return view('screens.supplier');
   }
   public function product54()
   {
      return view('screens.productHospital');
   }
   public function product55()
   {
      return view('screens.school');
   }
   public function product56()
   {
      return view('screens.restaurant');
   }
   public function product57()
   {
      return view('screens.car');
   }
   public function product58()
   {
      return view('screens.facility');
   }
   public function product59()
   {
      return view('screens.university');
   }
   public function product60()
   {
      return view('screens.mobile');
   }
   public function product61()
   {
      return view('screens.grocery');
   }
   public function product62()
   {
      return view('screens.learning');
   }
   public function product63()
   {
      return view('screens.online');
   }
   public function product64()
   {
      return view('screens.online');
   }
   public function store(Request $request)
   {
      // Extract form data
      //   dd($request->all());
      $name = $request->input('name');
      $phone = $request->input('phone');
      $message = $request->input('msg');
      $mail = $request->input('mail');

      // Create a new record in the database
      Mailstores::create([
         'name' => $name,
         'phone' => $phone,
         'msg' => $message,
         'mail' => $mail,
      ]);

      // Redirect or return a response
      return redirect('/contact')->with('success', 'Message sent successfully');
   }
   public function care(Request $request)
   {
       // Validate the incoming request data
       $validatedData = $request->validate([
           'name' => 'required|string|max:255',
           'mail' => 'required|string|max:255',
           'number' => 'required|string|max:255',
           'location' => 'required|string|max:255',
           'position' => 'required|string|max:255',
           'file' => 'required|file|mimes:pdf|max:2048', // Validate that it's a PDF file with a maximum size of 2MB
           'message' => 'nullable|string',
       ]);
   
       // Extract validated form data
       $name = $validatedData['name'];
       $mail = $validatedData['mail'];
       $number = $validatedData['number'];
       $location = $validatedData['location'];
       $position = $validatedData['position'];
       $file = $validatedData['file'];
       $message = $validatedData['message'];
   
       // Store the uploaded file in the storage directory
       $filePath = $file->storeAs('public/pdf_files', $file->getClientOriginalName());
   
       // Create a new record in the database
       franchise::create([
           'name' => $name,
           'mail' => $mail,
           'number' => $number,
           'location' => $location,
           'position' => $position,
           'data' => $filePath,
           'message' => $message,
       ]);
   
       // Redirect or return a response
       return redirect('/contact')->with('success', 'Message sent successfully');
   }
   public function update()
   {
      $data['getRecord1'] = blogsco::where('is_blog', 1)->get();
      return view('screens.update',$data);
   }
   public function up_date(Request $request,$id)
   {
       $data['getRecord'] = blogsco::find($id);
       $data['getRecord1'] = blogsco::where('is_blog', 1)->get();

      return view('screens.updateDetails',$data);
   }
}
