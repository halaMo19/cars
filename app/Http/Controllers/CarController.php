<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common; 
use Illuminate\Http\Request;


class CarController extends Controller
{
    use Common;
    public function index()
    {
        $cars = Car::get();

        return view('admin.cars', compact('cars'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'categoryName')->get();
    return view('admin.addCar', compact('categories'));
       
        
    }
    public function store(Request $request)
    {
        $messages= $this->messages();

        $data = $request->validate([
            'title'=>'required|string',
            'content'=>'required|string',
            'passenger'=>'required|integer',
            'luggage'=>'required|integer',
            'door'=>'required|integer',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'price'=>'required|integer',
            'category_id'=> 'required',
        ], $messages);

        $fileName = $this->uploadFile($request->image, 'assets/admin/images');
        $data['image']= $fileName;
        $data['active'] = isset($request->active);
        // Car::create($data);
       
        return 'done';
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
        $car = Car::findOrFail($id);
        $categories = Category::select('id', 'categoryName')->get();
        return view('admin.editCar',compact('car', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages= $this->messages();

        $data = $request->validate([
            'title'=>'required',
            'content'=>'required',
            'passenger'=>'required',
            'luggage'=>'required',
            'door'=>'required',
            'price'=>'required',
            'image' =>'sometimes|mimes:png,jpg,jpeg|max:2048',
            'category_id' => 'required',
        ], $messages);
       
        $data['active'] = isset($request->active);

        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/admin/images/');
            $data['image']= $fileName;
        }

        
        Car::where('id', $id)->update($data);
      
        return 'done';
    }
    public function messages(){
        return [
            'title.required'=>' required',
            'content.required'=> 'required',
            'passenger.required'=>'required',
            'luggage.required'=>'required',
            'door.required'=>'required',
            'price.required'=>'required',
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::findOrFail($id)->delete();

        return redirect('admin/index');
    }
}
