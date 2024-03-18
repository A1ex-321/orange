<?php

namespace App\Http\Controllers\Enterprice;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\User;
use App\Models\Gallery;
use App\Models\Detail;
use App\Models\Ceiling;
use App\Models\Machineservice;
use App\Models\Scolink;
use App\Models\Home;
use App\Models\Service;
use App\Models\About;
use App\Models\Port;
use App\Models\Banner;
use App\Models\blogseocontent;
use App\Models\soloblog;
use App\Models\scoblog;

use App\Models\Work;
use Illuminate\Support\Facades\Log; // Don't forget to import the Log facade
use Illuminate\Support\Carbon;
use App\Models\Product;


use App\Models\contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mailstores;
use App\Models\Blogsco;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class EnterpriceController extends Controller
{

    public function index()
    {
        $data['index'] = home::get();
        $data['link'] = Scolink::get();
        $data['service'] = Machineservice::where('is_service', 1)->get();
        $data['ceiling'] = Ceiling::get();
        $data['product'] = Product::get();
        $data['port'] = Port::get();
        $data['blog'] = banner::get();

        return view('Enterprice.index', $data);
    }
    public function about()
    {
        $data['about'] = about::get();
        $data['link'] = Scolink::get();

        return view('Enterprice.about',$data);
    }
    public function service()
    {
        $data['service'] = Machineservice::where('is_service', 1)->get();
        $data['serviceseo'] = service::get();
        $data['link'] = Scolink::get();
        // dd($data['service']);
        return view('Enterprice.service', $data);
    }
    public function ceiling()
    {
        $data['ceilingseo'] = soloblog::get();
        $data['link'] = Scolink::get();
        $data['getRecord'] = Ceiling::get();

        return view('Enterprice.ceiling', $data);
    }
    public function product()
    {
        $data['productseo'] = blogseocontent::get();
        $data['link'] = Scolink::get();
        $data['getRecord'] = Product::get();

        return view('Enterprice.product', $data);
    }
    public function port()
    {
        $data['portseo'] = scoblog::get();
        $data['link'] = Scolink::get();
        $data['getRecord'] = Port::get();
        return view('Enterprice.port', $data);
    }
    public function blog()
    {
        $data['blogseo'] = Work::get();
        $data['link'] = Scolink::get();
        $data['getRecord'] = banner::get();
        return view('Enterprice.blog', $data);
    }
    public function contact()
    {
        $data['contact'] = contacts::get();
        $data['link'] = Scolink::get();
        return view('Enterprice.contact',$data);
    }
    public function singleblog(Request $request, $id)
    {
        try {
            // Attempt to find the record with the specified ID
        $user['link'] = Scolink::get();
        $user['singleseo'] = banner::findOrFail($id);
        $user['singleseo']->ogimage = asset('public/images/' . $user['singleseo']->ogimage);
// dd($user['singleseo']);
            $user['single'] = banner::findOrFail($id);

            // Get all blog records (if needed)
            $user['blog'] = banner::get();

            // Return the view with the data
            return view('Enterprice.singleblog', $user);
        } catch (ModelNotFoundException $e) {
            // Handle the case where the record with the specified ID is not found
            return response()->view('errors.404', [], 404);
        }
    }
    public function store(Request $request)
    {
        // Extract form data
        //   dd($request->all());
        $name = $request->input('name');
        $phone = $request->input('phone');
        $message = $request->input('msg');

        // Create a new record in the database
        Mailstores::create([
            'name' => $name,
            'phone' => $phone,
            'msg' => $message,
        ]);

        // Redirect or return a response
        return redirect('/contact')->with('success', 'Message sent successfully');
    }
    public function get_logo1()
    {
        try {
            $logo = Gallery::first();
            // dd($logo);
            if ($logo) {
                $image = asset('public/images/' . $logo->image);
                return response()->json(['image' => $image]);
                // dd($logo);

            } else {
                return response()->json(['error' => 'No record found in the Gallery table']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error']);
        }
    }
    public function getservice()
    {
        $services = Machineservice::where('is_service', 1)->get();
        return response()->json($services);
    }
    public function get_profile()
    {
        try {
            $profile = detail::first();
            // dd($logo);
            if ($profile) {
                //  $image = asset('public/images/' . $logo->image);
                return response()->json(['profile' => $profile]);
                // dd($logo);

            } else {
                return response()->json(['error' => 'No record found in the Gallery table']);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error']);
        }
    }
   }
