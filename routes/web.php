<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PageController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\RegisterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OrangeController1;
use App\Http\Controllers\OrangeController;

use App\Http\Controllers\Admin\FranchiseController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DemoController;
use App\Http\Controllers\Admin\ScoController;
use App\Http\Controllers\Machine\MachineController;
use App\Http\Controllers\Admin\MachineController1;
use App\Http\Controllers\Enterprice\EnterpriceController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SitemapController;


// use App\Http\Controllers\Admin\Website;
// use App\Http\Controllers\web\Website;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [OrangeController::class, 'product']);
Route::get('/about', [OrangeController::class, 'product1']);

Route::get('/portfolio', [OrangeController::class, 'product3']);
Route::get('/blog', [OrangeController::class, 'product4']);

Route::get('/career', [OrangeController::class, 'product6']);
Route::get('/faq', [OrangeController::class, 'product7']);
Route::get('/contact', [OrangeController::class, 'product8']);
Route::get('/Blog/{id}', [OrangeController::class, 'product9'])->name('Blog');
Route::get('/webdesign', [OrangeController::class, 'product10']);
Route::get('/webdevelopment', [OrangeController::class, 'product11']);
Route::get('/ecommerce', [OrangeController::class, 'product12']);
Route::get('/mobapp', [OrangeController::class, 'product13']);
Route::get('/digitalmarketing', [OrangeController::class, 'product14']);
Route::get('/quality', [OrangeController::class, 'product15']);
Route::get('/affordable', [OrangeController::class, 'product16']);
Route::get('/corporate', [OrangeController::class, 'product17']);
Route::get('/content', [OrangeController::class, 'product18']);
Route::get('/creative', [OrangeController::class, 'product19']);
Route::get('/html5', [OrangeController::class, 'product20']);
Route::get('/responsive', [OrangeController::class, 'product21']);
Route::get('/website', [OrangeController::class, 'product22']);
Route::get('/phpweb', [OrangeController::class, 'product23']);
Route::get('/react', [OrangeController::class, 'product24']);
Route::get('/net', [OrangeController::class, 'product25']);
Route::get('/realtime', [OrangeController::class, 'product26']);
Route::get('/framework', [OrangeController::class, 'product27']);
Route::get('/magento', [OrangeController::class, 'product28']);
Route::get('/prestaShop', [OrangeController::class, 'product29']);
Route::get('/startecomm', [OrangeController::class, 'product30']);
Route::get('/premium', [OrangeController::class, 'product31']);
Route::get('/magentoHosting', [OrangeController::class, 'product32']);
Route::get('/prestaShopHosting', [OrangeController::class, 'product33']);
Route::get('/android', [OrangeController::class, 'product34']);
Route::get('/ios', [OrangeController::class, 'product35']);
Route::get('/hybrid', [OrangeController::class, 'product36']);
Route::get('/angular', [OrangeController::class, 'product37']);
Route::get('/reactnative', [OrangeController::class, 'product38']);
Route::get('/location', [OrangeController::class, 'product39']);
Route::get('/nutrition', [OrangeController::class, 'product40']);
Route::get('/flutter', [OrangeController::class, 'product41']);
Route::get('/search', [OrangeController::class, 'product42']);
Route::get('/off', [OrangeController::class, 'product43']);
Route::get('/on', [OrangeController::class, 'product44']);
Route::get('/global', [OrangeController::class, 'product45']);
Route::get('/ebook', [OrangeController::class, 'product46']);
Route::get('/contentMarketing', [OrangeController::class, 'product47']);
Route::get('/trends', [OrangeController::class, 'product48']);
Route::get('/testing', [OrangeController::class, 'product49']);
Route::get('/audits', [OrangeController::class, 'product50']);
Route::get('/control', [OrangeController::class, 'product51']);
Route::get('/root', [OrangeController::class, 'product52']);
Route::get('/supplier', [OrangeController::class, 'product53']);
Route::get('/productHospital', [OrangeController::class, 'product54']);
Route::get('/school', [OrangeController::class, 'product55']);
Route::get('/restaurant', [OrangeController::class, 'product56']);
Route::get('/car ', [OrangeController::class, 'product57']);
Route::get('/facility ', [OrangeController::class, 'product58']);
Route::get('/university ', [OrangeController::class, 'product59']);
Route::get('/mobile ', [OrangeController::class, 'product60']);
Route::get('/grocery ', [OrangeController::class, 'product61']);
Route::get('/learning ', [OrangeController::class, 'product62']);
Route::get('/online ', [OrangeController::class, 'product63']);
Route::get('/update ', [OrangeController::class, 'product64']);
Route::post('/contacts', [OrangeController::class, 'store'])->name('contacts');
Route::post('/care', [OrangeController::class, 'care'])->name('care');
Route::get('/update1 ', [OrangeController::class, 'update']);

// Route::get('/singleevent/{id}', [OrangeController::class, 'product9'])->name('singleevent');

Route::middleware('SuperAdmin')->group(function(){
    //  Route::get('admin/brand/mail1', function () {Mail::to('@gmail.com')->send(new SendMail($data));});
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
//admin
Route::get('admin/admin/list', [AdminController::class, 'admin_list']);
Route::get('admin/admin/add', [AdminController::class, 'admin_add']);
Route::post('admin/admin/add', [AdminController::class, 'add_admin_insert']);
Route::get('admin/admin/edit/{id}', [AdminController::class, 'add_admin_edit']);
Route::post('admin/admin/edit/{id}', [AdminController::class, 'admin_add_update']);
Route::get('admin/admin/delete/{id}', [AdminController::class, 'admin_add_delete']);



    Route::get('admin/category/list', [CategoryController::class, 'category_list']);
    Route::get('admin/category/add', [CategoryController::class, 'category_add']);
    Route::post('admin/category/add', [CategoryController::class, 'category_insert']);
    Route::get('admin/category/edit/{id}', [CategoryController::class, 'category_edit']);
    Route::post('admin/category/edit/{id}', [CategoryController::class, 'category_update']);
    Route::get('admin/category/delete/{id}', [CategoryController::class, 'category_delete']);


    Route::get('admin/brand/add', [MailController::class, 'brand_add'])->name('add-new');
    Route::post('admin/brand/add', [MailController::class, 'store']);
    Route::get('admin/brand/list', [MailController::class, 'list'])->name('brand-list');
    Route::get('admin/brand/edit/{id}', [MailController::class, 'brand_edit'])->name('edit-brand');
    Route::post('admin/brand/edit/{id}', [MailController::class, 'brand_update']);
    Route::get('admin/brand/delete/{id}', [MailController::class, 'brand_delete'])->name('delete-brand');
 
    Route::get('admin/franchiselist', [FranchiseController::class, 'list'])->name('franchiselist');
    Route::get('admin/franchise/delete/{id}', [FranchiseController::class, 'delete']);



    // Route::get('admin/brand/mail/{arg1}/{arg2}', [BrandController::class, 'mail']);




    Route::resource('admin/products', ProductController::class);

    Route::get('admin/allOrders', [OrdersController::class, 'listOrders'])->name('list-orders');
    Route::patch('/orders/{orderId}/update-status', [OrdersController::class, 'updateStatus'])->name('orders.updateStatus');
    Route::delete('/orders/{orderId}', [OrdersController::class, 'destroy'])->name('orders.destroy');
    Route::get('admin/orders/{orderId}/invoice', [OrdersController::class, 'generateInvoice'])->name('orders.generateInvoice');
    Route::resource('admin/gallery', GalleryController::class);
    // Route::get('mail1', [Website::class, 'mail']);
    
    Route::post('/upload-images', [DemoController::class, 'upload'])->name('upload.images');
    Route::post('image/upload/store', [DemoController::class, 'fileStore']);
    Route::post('/image/remove', 'DemoController@fileRemove')->name('file.remove');
    // routes/web.php or routes/web/web.php (depending on your Laravel version)


    Route::post('upload-multiple', [BlogController::class, 'uploadMultiple']);
    Route::get('fetch-images', [BlogController::class, 'fetchImages'])->name('fetch.images');
    //   Route::delete('delete-image/{filename}', [BlogController::class, 'deleteImage'])->name('delete.image');
    Route::delete('/delete-image/{id}', [BlogController::class, 'deleteimage']);
    //   SCO link
    Route::get('admin/seo/seolist', [ScoController::class, 'scolist'])->name('sco-list');
    Route::post('admin/seo/addlink', [ScoController::class, 'create_link'])->name('create-link');
    Route::get('admin/seo/delete/{id}', [ScoController::class, 'link_delete']);
    Route::get('admin/link/edit/{id}', [ScoController::class, 'link_edit']);
    Route::post('admin/link/edit/{id}', [ScoController::class, 'link_update'])->name('update-link');
    //   SCO home
    Route::get('admin/home/homelist', [ScoController::class, 'homelist'])->name('home-list');
    Route::post('admin/home/addhome', [ScoController::class, 'create_home'])->name('create-home');
    Route::get('admin/home/delete/{id}', [ScoController::class, 'home_delete']);
    Route::get('admin/home/edit/{id}', [ScoController::class, 'home_edit']);
    Route::post('admin/home/edit/{id}', [ScoController::class, 'home_update'])->name('home-update');
    //   SCO About
    Route::get('admin/about/aboutlist', [ScoController::class, 'aboutlist'])->name('about-list');
    Route::post('admin/about/addabout', [ScoController::class, 'create_about'])->name('create-about');
    Route::get('admin/about/delete/{id}', [ScoController::class, 'about_delete']);
    Route::get('admin/about/edit/{id}', [ScoController::class, 'about_edit']);
    Route::post('admin/about/edit/{id}', [ScoController::class, 'about_update'])->name('about-update');
    //   SCO service
    Route::get('admin/service/servicelist', [ScoController::class, 'servicelist'])->name('service-list');
    Route::post('admin/service/addservice', [ScoController::class, 'create_service'])->name('create-service');
    Route::get('admin/service/delete/{id}', [ScoController::class, 'service_delete']);
    Route::get('admin/service/edit/{id}', [ScoController::class, 'service_edit']);
    Route::post('admin/service/edit/{id}', [ScoController::class, 'service_update'])->name('service-update');
    //   SCO contact
    Route::get('admin/contact/contactlist', [ScoController::class, 'contactlist'])->name('contact-list');
    Route::post('admin/contact/addcontact', [ScoController::class, 'create_contact'])->name('create-contact');
    Route::get('admin/contact/delete/{id}', [ScoController::class, 'contact_delete']);
    Route::get('admin/contact/edit/{id}', [ScoController::class, 'contact_edit']);
    Route::post('admin/contact/edit/{id}', [ScoController::class, 'contact_update'])->name('contact-update');

  
    //   SCO work
    Route::get('admin/work/worklist', [ScoController::class, 'worklist'])->name('work-list');
    Route::post('admin/work/addwork', [ScoController::class, 'create_work'])->name('create-work');
    Route::get('admin/work/delete/{id}', [ScoController::class, 'work_delete']);
    Route::get('admin/work/edit/{id}', [ScoController::class, 'work_edit']);
    Route::post('admin/work/edit/{id}', [ScoController::class, 'work_update'])->name('work-update');
    //SCO work find id page
    // Route::get('admin/solo/solowork', [ScoController::class, 'soloworklist'])->name('solowork-list');
    // Route::post('admin/solo/solowork', [ScoController::class, 'solowork_work'])->name('create-solowork');
    // Route::get('admin/solowork/delete/{id}', [ScoController::class, 'solowork_delete']);
    // Route::get('admin/solowork/edit/{id}', [ScoController::class, 'solowork_edit']);
    // Route::post('admin/solowork/edit/{id}', [ScoController::class, 'solowork_update'])->name('solowork-update');
    //SCO blog page find id page
    Route::get('admin/oneblog/onebloglist', [ScoController::class, 'onebloglist'])->name('oneblog-list');
    Route::post('admin/oneblog/onebloglist', [ScoController::class, 'create_oneblog'])->name('create-oneblog');
    Route::get('admin/oneblog/delete/{id}', [ScoController::class, 'oneblog_delete']);
    Route::get('admin/oneblog/edit/{id}', [ScoController::class, 'oneblog_edit']);
    Route::post('admin/oneblog/edit/{id}', [ScoController::class, 'oneblog_update'])->name('oneblog-update');
    Route::post('/check-slug-availability', [ScoController::class, 'checkSlugAvailability']);
    Route::post('/validate-slug', 'ScoController@validateSlug')->name('validate-slug');
  //   SCO false ceiling
  Route::get('admin/false/falselist', [ScoController::class, 'falselist'])->name('false-list');
  Route::post('admin/false/addfalse', [ScoController::class, 'create_false'])->name('createceiling');
  Route::get('admin/false/delete/{id}', [ScoController::class, 'false_delete']);
  Route::get('admin/false/edit/{id}', [ScoController::class, 'false_edit']);
  Route::post('admin/false/edit/{id}', [ScoController::class, 'false_update'])->name('false-update');
//   SCO product
Route::get('admin/productseo/productseolist', [ScoController::class, 'productseolist'])->name('productseo-list');
Route::post('admin/productseo/productseo', [ScoController::class, 'create_productseo'])->name('create-productseo');
Route::get('admin/productseo/delete/{id}', [ScoController::class, 'productseo_delete']);
Route::get('admin/productseo/edit/{id}', [ScoController::class, 'productseo_edit']);
Route::post('admin/productseo/edit/{id}', [ScoController::class, 'productseo_update'])->name('productseo-update');
  //   SCO port
  Route::get('admin/scoblog/scobloglist', [ScoController::class, 'scobloglist'])->name('scoblog-list');
  Route::post('admin/scoblog/addscoblog', [ScoController::class, 'create_scoblog'])->name('create-scoblog');
  Route::get('admin/scoblog/delete/{id}', [ScoController::class, 'scoblog_delete']);
  Route::get('admin/scoblog/edit/{id}', [ScoController::class, 'edit_scoblog']);
  Route::post('admin/scoblog/edit/{id}', [ScoController::class, 'scoblog_update'])->name('scoblog-update');
//   blog sco update
Route::post('admin/sco/edit/{id}', [ScoController::class, 'sco_update'])->name('sco-update');
});


Route::post('logout', [LoginController::class, 'logout'])->name('logout');
//  Route::get('/', [EnterpriceController::class, 'index']);
//  Route::get('/about', [EnterpriceController::class, 'about']);
//  Route::get('/service', [EnterpriceController::class, 'service']);
//  Route::get('/ceiling', [EnterpriceController::class, 'ceiling']);
//  Route::get('/product', [EnterpriceController::class, 'product']);
//  Route::get('/port', [EnterpriceController::class, 'port']);
//  Route::get('/blog', [EnterpriceController::class, 'blog']);
//  Route::get('/contact', [EnterpriceController::class, 'contact']);
//  Route::get('/singleblog/{id}/{slug}', [EnterpriceController::class, 'singleblog'])->name('singleblog');
//  Route::post('/contacts', [EnterpriceController::class, 'store'])->name('contacts');
//  Route::get('/header', [EnterpriceController::class, 'get_logo1']);
//  Route::get('/getservice', [EnterpriceController::class, 'getservice']);
//  Route::get('/profile', [EnterpriceController::class, 'get_profile']);








 Route::get('admin', [AuthController::class, 'login']);
 Route::post('admin', [AuthController::class, 'auth_login_admin']);
 Route::get('admin/logout', [AuthController::class, 'logout_admin']);

 Route::get('sitemap.xml', [SitemapController::class, 'index']);



    Route::middleware('auth')->group(function () {
            // service
    Route::get('admin/service1/list', [MachineController1::class, 'client_list'])->name('ser-list');
    Route::post('admin/service1/add', [MachineController1::class, 'client_add'])->name('add-client');
    Route::post('admin/client/test', [MachineController1::class, 'test_add'])->name('add-test');
    Route::get('admin/client/edit/{id}', [MachineController1::class, 'clientedit']);
    Route::post('admin/client/update/{id}', [MachineController1::class, 'client_update'])->name('updateclient');
    Route::post('admin/service1/update/{id}', [MachineController1::class, 'client_update1'])->name('updateclient1');
    Route::get('admin/service1/edit/{id}', [MachineController1::class, 'serviceedit']);
    Route::post('admin/service2/add', [MachineController1::class, 'service_add'])->name('add-service');
    Route::get('admin/addclient/deleteclient/{id}', [MachineController1::class, 'deleteclient']);
    
    Route::get('admin/test/delete/{id}', [MachineController1::class, 'testdelete']);
    //ceiling
    Route::get('admin/ceiling/list', [MachineController1::class, 'ceilinglist'])->name('ceiling-list');
    Route::post('admin/ceiling/add', [MachineController1::class, 'ceilingadd'])->name('add-ceiling');
    Route::get('admin/ceiling/delete/{id}', [MachineController1::class, 'ceilingdelete']);

//product
Route::get('admin/product/list', [MachineController1::class, 'product_list'])->name('product-list');
Route::post('admin/product/add', [MachineController1::class, 'product_add'])->name('add-product');
Route::get('admin/product/delete/{id}', [MachineController1::class, 'productdelete']);
Route::get('admin/product/edit/{id}', [MachineController1::class, 'productedit']);
Route::post('admin/product/update/{id}', [MachineController1::class, 'product_update'])->name('updateproduct');
   //portfolio
   Route::get('admin/port/list', [MachineController1::class, 'portlist'])->name('port-list');
   Route::post('admin/port/add', [MachineController1::class, 'portadd'])->name('add-port');
   Route::get('admin/port/delete/{id}', [MachineController1::class, 'portdelete']);
//Banner
Route::post('/upload-images',[MachineController1::class, 'uploadImages'] )->name('upload.images');

    Route::get('admin/blog/bloglist', [MachineController1::class, 'Bannerlist'])->name('Banner-list');
    Route::post('admin/banner/add', [MachineController1::class, 'create_banner'])->name('create-banner');
    Route::get('admin/blog5/delete/{id}', [MachineController1::class, 'banner_delete']);
    Route::get('admin/blog3/edit/{id}', [MachineController1::class, 'banner_edit']);
    Route::post('admin/blog1/update/{id}', [MachineController1::class, 'banner_update'])->name('blog-update');
    //details
    Route::get('admin/detail/list', [MachineController1::class, 'detail_list'])->name('detail-list');
     Route::post('admin/detail/add', [MachineController1::class, 'detail_add'])->name('add-detail');

     Route::post('admin/detail/update/{id}', [MachineController1::class, 'detail_update'])->name('updatedetail');
     Route::get('admin/detail/edit/{id}', [MachineController1::class, 'detailedit']);
    
     Route::get('admin/detail/delete/{id}', [MachineController1::class, 'detaildelete']);   

      Route::get('admin/admin1/list', [AdminController::class, 'admin_list1']);

    //link and Query
    Route::get('admin/social/list', [MachineController1::class, 'social_list'])->name('social-list');
    Route::post('admin/social/add', [MachineController1::class, 'social_add'])->name('add-social');
    // Route::post('admin/client/test', [MachineController1::class, 'test_add'])->name('add-test');
      Route::get('admin/social/edit/{id}', [MachineController1::class, 'socialedit']);
    Route::post('admin/social/update/{id}', [MachineController1::class, 'social_update'])->name('updatesocial');

     Route::post('admin/query/update/{id}', [MachineController1::class, 'query_update'])->name('updatequery');
     Route::get('admin/query/edit/{id}', [MachineController1::class, 'queryedit']);
     Route::post('admin/query/add', [MachineController1::class, 'query_add'])->name('add-query');

     Route::get('admin/social/delete/{id}', [MachineController1::class, 'socialclient']);
    
    Route::get('admin/query/delete/{id}', [MachineController1::class, 'querydelete']);
    //message
    Route::get('admin/message', [MailController::class, 'maillist']);
    Route::get('admin/brand/deletemail/{id}', [MailController::class, 'deletemail']);
        //   SCO blog no sco
        // Route::get('admin/blogseo/bloglist', [ScoController::class, 'bloglist'])->name('blogsco-list');
        // Route::post('admin/blogseo/addblog', [ScoController::class, 'create_blogsco'])->name('create-blogsco');
        // Route::get('admin/blogseo/delete/{id}', [ScoController::class, 'blogsco_delete']);
        // Route::get('admin/blogseo/edit/{id}', [ScoController::class, 'blogsco_edit']);
        // Route::post('admin/blogseo/edit/{id}', [ScoController::class, 'blogsco_update'])->name('blogsco-update');
    
        // // Route::post('admin/sco/edit/{id}', [ScoController::class, 'sco_update'])->name('sco-update');
        // Route::get('view_blogcontent/{id}', [ScoController::class, 'content_view'])->name('view_blogcontent');
        //logo
        Route::get('admin/logo/logo', [BlogController::class, 'logo'])->name('blog-logo');
        Route::post('admin/addlogo/logo', [BlogController::class, 'create_logo'])->name('create-logo');
        Route::get('admin/logo/delete/{id}', [BlogController::class, 'gallery_delete'])->name('delete-brand');
        //doubt
        Route::get('admin/blog/list', [BlogController::class, 'list'])->name('blog-list');

    Route::get('admin/addblog/add', [BlogController::class, 'blog_add'])->name('add-blog');
    Route::post('admin/addblog/add', [BlogController::class, 'create_blog'])->name('create-blog');
  
    Route::get('admin/brand/delete/{id}', [BlogController::class, 'delete'])->name('delete-brand');
    Route::get('admin/blog/edit/{id}', [BlogController::class, 'blog_edit']);
    Route::post('admin/blog/edit/{id}', [BlogController::class, 'blog_update'])->name('update-brand');
    Route::get('add-blogcontent/{id}', [BlogController::class, 'content_add'])->name('add-blogcontent');
    Route::post('admin/addcontentblog/add', [BlogController::class, 'create_content_blog'])->name('create-content-blog');
    Route::get('view-blogcontent/{id}', [BlogController::class, 'content_view'])->name('view-blogcontent');
    Route::get('admin/blog/delete/{id}', [BlogController::class, 'delete_blog'])->name('delete-blog');
    // routes/web.php or routes/api.php
    Route::post('/upload-image', [BlogController::class, 'uploadImage'])->name('upload.image.route');
    Route::get('/content_add1', function () {
        return view('editor');
    });
    Route::get('/editor', [BlogController::class, 'content_add1']);
    // routes/web.php
    Route::post('ckeditor/upload', [BlogController::class, 'upload'])->name('ckeditor.upload');
    Route::get('admin/contentblog/edit/{id}', [BlogController::class, 'content_edit']);
    Route::post('admin/updateblog/edit/{id}', [BlogController::class, 'create_content_update_blog'])->name('update-content');
    Route::get('admin/alex', [BlogController::class, 'demo']);





        Route::get('admin/blogseo/bloglist', [OrangeController1::class, 'bloglist'])->name('blogsco-list');
        Route::post('admin/blogseo/addblog', [OrangeController1::class, 'create_blogsco'])->name('create-blogsco');
        Route::get('admin/blogseo/delete/{id}', [OrangeController1::class, 'blogsco_delete']);
        Route::get('admin/blogseo/edit/{id}', [OrangeController1::class, 'blogsco_edit']);
        Route::post('admin/blogseo/edit/{id}', [OrangeController1::class, 'blogsco_update'])->name('blogsco-update');
        Route::get('view_blogcontent/{id}', [OrangeController1::class, 'content_view'])->name('view_blogcontent');

        Route::get('admin/care', [OrangeController1::class, 'maillist']);
        Route::get('admin/frans/deletemail/{id}', [OrangeController1::class, 'deletemail']);
    });
    