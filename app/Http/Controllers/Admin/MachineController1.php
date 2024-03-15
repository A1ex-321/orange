<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Admin;


use App\Models\BrandModel;
use App\Models\Detail;
use App\Models\Mailstores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Addservice;
use App\Models\Banner;
use App\Models\social;
use App\Models\Ceiling;
use App\Models\Gallery;
use App\Models\Machineservice;
use App\Models\Product;
use App\Models\Port;
use Intervention\Image\Facades\Image;



use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use App\Models\Blogimage;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Log;
use App\Models\Contentblog;
use App\Models\Team;

class MachineController1 extends Controller
{

    public function client_list()
    {
        $data['getRecord1'] = Machineservice::where('is_service', 1)->get();

        $data['header_title'] = "Admin List";

        return view('admin.machine.service', $data);
    }
    public function ceilinglist()
    {
        $data['getRecord1'] = Ceiling::get();


        $data['header_title'] = "Admin List";

        return view('admin.machine.ceiling', $data);
    }
    public function ceilingadd(Request $request)
    {
        // Validate the request data
        $request->validate([
            'machineimage' => 'required|max:1500', // Adjust max file size as needed
        ]);
    
        // Check if the request contains the 'machineimage' file
        if ($request->hasFile('machineimage')) {
            // Get the 'machineimage' file from the request
            $image = $request->file('machineimage');
    
            // Generate a unique filename for the image
            $filename = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($image)->fit(500, 500)->save(public_path('images') . '/' . $filename);
        }
    
        // Create a new Machineservice record with the uploaded image and other data
        Ceiling::create([
            'image' => $filename,
         
        ]);
    
        // Redirect back with a success message
        return redirect('admin/ceiling/list')->with('success', 'Uploaded successfully.');
    }
    public function ceilingdelete($id)
    {
        $user = Ceiling::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function service_add(Request $request)
    {
        // Validate the request data
        $request->validate([
            'machineimage' => 'required|max:1500', // Adjust max file size as needed
        ]);
    
        // Check if the request contains the 'machineimage' file
        if ($request->hasFile('machineimage')) {
            // Get the 'machineimage' file from the request
            $image = $request->file('machineimage');
    
            // Generate a unique filename for the image
            $filename = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($image)->fit(510, 300)->save(public_path('images') . '/' . $filename);
        }
    
        // Create a new Machineservice record with the uploaded image and other data
        Machineservice::create([
            'machineimage' => $filename,
            'machinetitle' => $request->machinetitle,
            'description' => $request->description,
            'is_service' => 1,
        ]);
    
        // Redirect back with a success message
        return redirect('admin/service1/list')->with('success', 'Uploaded successfully.');
    }
    

    public function client_update(Request $request, $id)
    {
        $user = Machineservice::find($id);

        $request->validate([
            'machineimage' => 'image|max:1500', // Adjust max file size as needed
        ]);
    
        // Check if the request contains the 'machineimage' file
        if ($request->hasFile('machineimage')) {
            // Get the 'machineimage' file from the request
            $image = $request->file('machineimage');
    
            // Generate a unique filename for the image
            $filename = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($image)->fit(510, 300)->save(public_path('images') . '/' . $filename);
        }else {
            $user->machineimage = $user->machineimage;
        }
        $user->description = $request->description;
        $user->machinetitle = $request->machinetitle;
        $user->save();
        return redirect('admin/service1/list')->with('success', 'updated successfully.');
    }
    public function serviceedit($id)
    {
        $record = Machineservice::find($id);
        return response()->json($record);
    }
    public function deleteclient($id)
    {
        $user = Machineservice::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function testdelete($id)
    {
        $user = Machineservice::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function clientedit($id)
    {
        $record = Machineservice::find($id);
        return response()->json($record);
    }
//product
public function product_list()
{
    // $data['getRecord1'] = Machineservice::where('is_service', 1)->get();
    $data['getRecord1'] = Product::all();

    $data['header_title'] = "Admin List";

    return view('admin.machine.product', $data);
}
public function product_add(Request $request)
    {
        // Validate the request data
        $request->validate([
            'machineimage' => 'required|max:1500', // Adjust max file size as needed
        ]);
    
        // Check if the request contains the 'machineimage' file
        if ($request->hasFile('machineimage')) {
            // Get the 'machineimage' file from the request
            $image = $request->file('machineimage');
    
            // Generate a unique filename for the image
            $filename = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($image)->fit(420, 344)->save(public_path('images') . '/' . $filename);
        }
    
        // Create a new Machineservice record with the uploaded image and other data
        product::create([
            'machineimage' => $filename,
            'machinetitle' => $request->machinetitle,
            'description' => $request->description,
        ]);
    
        // Redirect back with a success message
        return redirect('admin/product/list')->with('success', 'Uploaded successfully.');
    }
    public function productdelete($id)
    {
        $user = Product::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function productedit($id)
    {
        $record = Product::find($id);
        return response()->json($record);
    }
    public function product_update(Request $request, $id)
    {
        $user = Product::find($id);

        $request->validate([
            'machineimage' => 'image|max:1500', // Adjust max file size as needed
        ]);
    
        // Check if the request contains the 'machineimage' file
        if ($request->hasFile('machineimage')) {
            // Get the 'machineimage' file from the request
            $image = $request->file('machineimage');
    
            // Generate a unique filename for the image
            $filename = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($image)->fit(420, 344)->save(public_path('images') . '/' . $filename);
            $user->machineimage=$filename;
        }else {
            $user->machineimage = $user->machineimage;
        }
        $user->description = $request->description;
        $user->machinetitle = $request->machinetitle;
        $user->save();
        return redirect('admin/product/list')->with('success', 'updated successfully.');
    }
//port
public function portlist()
{
    $data['getRecord1'] = port::get();


    $data['header_title'] = "Admin List";

    return view('admin.machine.port', $data);
}
public function portadd(Request $request)
    {
        // dd($request->all());
        // Validate the request data
        $request->validate([
            'machineimage' => 'required|max:1500', // Adjust max file size as needed
        ]);
    
        // Check if the request contains the 'machineimage' file
        if ($request->hasFile('machineimage')) {
            // Get the 'machineimage' file from the request
            $image = $request->file('machineimage');
    
            // Generate a unique filename for the image
            $filename = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($image)->fit(500, 500)->save(public_path('images') . '/' . $filename);
        }
    
        // Create a new Machineservice record with the uploaded image and other data
        Port::create([
            'machineimage' => $filename,
         
        ]);
    
        // Redirect back with a success message
        return redirect('admin/port/list')->with('success', 'Uploaded successfully.');
    }
    public function portdelete($id)
    {
        $user = Port::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }




    public function Bannerlist(Request $request)
    {
        $data['getRecord'] = Banner::all();

        return view('admin.machine.banner', $data);
    }
    public function uploadImages(Request $request)
    {
        $paths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Check if the image file has an original name
                if ($image->getClientOriginalName()) {
                    // Generate a unique filename for each image
                    $filename = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
    
                    // Resize and save each image with fixed width and height
                    $resizedImage = Image::make($image)->fit(640, 360)->save(public_path('images') . '/' . $filename);
    
                    // Store the path to the resized image
                    $paths[] = asset('public/images/' . $filename);
                }
            }
        }
    
        return response()->json($paths);
    }
    
    public function create_banner(Request $request)
    {
        //   dd($request->all());
        $data = new Banner();       
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        if ($request->hasFile('singleimage')) {
            $images = $request->file('singleimage');
            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($images)->fit(640, 360)->save(public_path('images') . '/' . $filename);
        }
        $data->singleimage = $filename;
        $data->metatitle = $request->input('title');

        $data->metadescription = $request->input('description');
        $data->ogimage = $filename;
        $data->slug = $request->input('title');

        $data->image_data = $request->input('image-data');
        $data->save();
        return redirect('admin/blog/bloglist')->with('success', ' Added successfully.');
    }
    public function banner_delete($id, Request $request)
    {
        $image = Banner::find($id);
        $image->delete();
        return redirect('admin/blog/bloglist')->with('success', ' Deleted successful');
    }
    public function banner_edit($id, Request $request)
    {
        $data['getRecord'] = Banner::find($id);
        // dd($data['getRecord']);
        return view('admin.machine.edit_banner', $data);
    }
    public function banner_update($id, Request $request)
    {
        //    dd($request->all());


        $data = Banner::find($id);
        
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        if ($request->hasFile('singleimage')) {
            $images = $request->file('singleimage');
            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($images)->fit(640, 360)->save(public_path('images') . '/' . $filename);
            $data->singleimage = $filename;
        } else {
            $data->singleimage = $data->singleimage;
        }
        $data->image_data = $request->input('image-data');

        $data->save();
        return redirect('admin/blog/bloglist')->with('success', ' updated');
    }








    public function detail_list()
    {
        $data['getRecord'] = Detail::get();
        //  $data['getRecord1'] = Machineservice::where('is_service', 1)->get();

        $data['header_title'] = "Admin List";

        return view('admin.machine.detail', $data);
    }
    public function detail_add(Request $request)
    {

        Detail::create([
            'dnumber' => $request->dnumber,
            'wnumber' => $request->wnumber,
            'mail' => $request->mail,
            'address' =>  $request->address,
            'header' =>  $request->header,
            'footer' =>  $request->footer,


        ]);
        return redirect('admin/detail/list')->with('success', 'uploaded successfully.');
    }
    public function detail_update(Request $request, $id)
    {
        $user = Detail::find($id);

        // $user->image=$filename;
        $user->dnumber = $request->dnumber;
        $user->wnumber = $request->wnumber;
        $user->address = $request->address;
        $user->mail = $request->mail;
        $user->header = $request->header;
        $user->footer = $request->footer;

        $user->save();
        return redirect('admin/detail/list')->with('success', 'updated successfully.');
    }
    public function detailedit($id)
    {
        $record = Detail::find($id);
        return response()->json($record);
    }
    public function detaildelete($id)
    {
        $user = Detail::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }

    public function social_list()
    {
        $data['getRecord'] = social::where('is_social', 0)->get();
        $data['getRecord1'] = social::where('is_social', 1)->get();

        $data['header_title'] = "Admin List";

        return view('admin.machine.social', $data);
    }
    public function social_add(Request $request)
    {

        social::create([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'google' =>  $request->google,
            'instagram' =>  $request->instagram,

            'is_social' => 0,

        ]);
        return redirect('admin/social/list')->with('success', 'uploaded successfully.');
    }
    public function social_update(Request $request, $id)
    {
        $user = social::find($id);


        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->google = $request->google;
        $user->instagram = $request->instagram;

        $user->save();
        return redirect('admin/social/list')->with('success', 'updated successfully.');
    }
    public function socialedit($id)
    {
        $record = social::find($id);
        // dd($record);
        return response()->json($record);
    }
    public function socialclient($id)
    {
        $user = social::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
    public function query_add(Request $request)
    {
        social::create([
            'contact' => $request->contact,
            'description' => $request->description,
            'is_social' => 1,

        ]);
        return redirect('admin/social/list')->with('success', 'uploaded successfully.');
    }
    public function query_update(Request $request, $id)
    {
        $user = social::find($id);


        // $user->image=$filename;
        $user->contact = $request->contact;
        $user->description = $request->description;


        $user->save();
        return redirect('admin/social/list')->with('success', 'updated successfully.');
    }
    public function queryedit($id)
    {
        $record = social::find($id);
        return response()->json($record);
    }
    public function querydelete($id)
    {
        $user = social::find($id);
        $user->delete();
        return redirect()->back()->with('success', 'Deleted');
    }
}
