<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Models\BrandModel;
use App\Models\blogseocontent;
use App\Models\Mailstores;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Contacts;
use App\Models\Blogsco;
use App\Models\Service;
use App\Models\Scolink;
use App\Models\Home;
use App\Models\About;
use App\Models\Scoblog;
use App\Models\Work;
use App\Models\solowork;
use App\Models\soloblog;
use App\Models\Banner;
use Intervention\Image\Facades\Image;

use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Log;
use App\Models\Contentblog;
use App\Models\franchise;

class OrangeController1 extends Controller
{
   
    // blog
    public function bloglist(Request $request)
    {
        $data['getRecord'] = blogsco::all();

        return view('admin.sco.blogsco', $data);
    }
    public function create_blogsco(Request $request)
    {
        //  dd($request->all());
        $data = new blogsco();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content = $request->content;
        if ($request->hasFile('image')) {
            $images = $request->file('image');
            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
    
            // Resize and save the image with fixed width and height
            $resizedImage = Image::make($images)->fit(640, 360)->save(public_path('images') . '/' . $filename);
        }
        $data->image = $filename;
        // if ($request->hasFile('image')) {
        //     $images = $request->file('image');

        //     $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
        //     $images->move(public_path('images'), $filename);
        // }
        // $data->image = $filename;
        $data->is_blog = $request->blog;
        $data->metatitle = $request->title;
        $data->metadescription = $request->description;
        $data->ogimage = $filename;
        $exists = blogsco::where('title', $request->title)->exists();
        if ($exists) {
            $randomNumber = rand(100, 999); // Generate a random three-digit number
            $data->slug = $request->title . $randomNumber;
        } else {
            $data->slug = $request->title;
        }
        $data->save();
        return redirect('admin/blogseo/bloglist')->with('success', ' Added successfully.');
    }
    public function blogsco_delete($id, Request $request)
    {
        $image = blogsco::find($id);
        $image->delete();
        return redirect('admin/blogseo/bloglist')->with('success', ' Deleted successful');
    }
    public function blogsco_edit($id, Request $request)
    {
        $data['getRecord'] = blogsco::find($id);
        return view('admin.sco.edit_blogsco', $data);
    }
    public function blogsco_update($id, Request $request)
    {

      
        $data = blogsco::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content = $request->content;
        $data->is_blog = $request->blog;
        if ($request->hasFile('image')) {
            $images = $request->file('image');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
            $data->image = $filename;
        } else {
            $data->image = $data->image;
        }
        $data->save();
        return redirect('admin/blogseo/bloglist')->with('success', ' updated');
    }
    public function sco_update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:Banner,slug,' . $id,
            // Add other validation rules as needed
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = Banner::find($id);
        $data->metatitle = $request->metatitle;
        $data->metadescription = $request->metadescription;
        $data->ogtitle = $request->ogtitle;
        $data->ogdescription = $request->ogtitle;
        $data->ogurl = $request->ogurl;
        $data->ogtype = $request->ogtype;

        if ($request->hasFile('ogimage')) {
            $images = $request->file('ogimage');

            $filename = time() . '_' . str_replace(' ', '_', $images->getClientOriginalName());
            $images->move(public_path('images'), $filename);
            $data->ogimage = $filename;
        } else {
            $data->ogimage = $data->ogimage;
        }
        $data->slug = $request->slug;
        $data->save();
        return redirect('admin/blog/bloglist')->with('success', ' updated');
    }
    public function checkSlugAvailability(Request $request)
    {
        $submittedSlug = $request->input('slug');

        // Check if the submitted slug already exists in the database
        $count = blogsco::where('slug', $submittedSlug)->count();

        // Respond with JSON indicating slug availability
        return response()->json(['available' => $count == 0]);
    }
    public function validateSlug(Request $request)
    {
        $slug = $request->input('slug');
        $id = $request->input('id'); // You may need to adjust this based on your actual form structure
    
        $isSlugExist = blogsco::where('slug', $slug)->where('id', '!=', $id)->exists();
    
        return response()->json(['exists' => $isSlugExist]);
    }

    public function content_view(Request $request, $id)
    {
        $content = blogsco::where('id', $id)->first();
        // $imageArray = $content->multiimage ? explode(',', $content->multiimage) : [];

        return view('admin.sco.view_blogcontent', compact('content'));
    }
        //
        public function maillist()
        {
            $data['getRecord'] = franchise::all();
            // $data['header_title'] = "Category List";
    
            return view('admin.list', $data);
        }
        public function deletemail($id, Request $request)
        {
            $mail = franchise::find($id);
            // dd($mail);
            $mail->delete();
            // return view('admin.category.list')->with('success', 'mail Successfully Deleted');
            return redirect()->back()->with('success', ' Successfully Deleted');
        }
}
