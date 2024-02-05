<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Car;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Usere;
use App\Models\Message;
use App\Models\Contact;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View{

        return view('index');
  
        //
    
    }
    public function about(): View{
        
        return view('about');
    }
    public function blog(): View {
        
        return view('blog');
    }
    public function listing(): View{
        return view('listing');
    }

    public function main(): View{
       
        return view('main');
    }

    public function single(): View{
        return view('single');
    }
    public function testimonial(): View{
        
        return view('testimonial');
  
        //
    }
    public function contact(): View{
        return view('contact');
   
        //
    }
    public function  massages(): View{
        return view('admin.massages');
   
        //
    }
    public function cars(): View{
        return view('admin.cars');
   
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
