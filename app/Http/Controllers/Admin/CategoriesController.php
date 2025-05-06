<?php 

namespace App\Http\Controllers\Admin;
use App\Models\Dress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class   CategoriesController extends Controller {
    public function showCategoriesPage(){
        return view('admin.categories');
    }
}