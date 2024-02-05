@extends('admin.layouts.index')
@section('title','index')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Manage Cars</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add Car</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="#">Settings 1</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form  method="post" action="{{route('ReciveCar')}}" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="title" name="title" value="{{ old('title') }}" required="required" class="form-control ">
                                    </div> 
                                    @error('name')
                                    <div class="alert alert-warning">
                                        {{ $message }}
                                    </div>
                                    @enderror 
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea id="content"  name="content" value="{{ old('content') }}"  required="required" class="form-control"></textarea>
                                    </div>
                                    @error('content')
                                    <div class="alert alert-warning">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="luggage" name="luggage" value="{{ old('luggage') }}" class="form-control" type="number"  required="required">
                                    </div>
                                    @error('luggage')
                                    <div class="alert alert-warning">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label for="door" class="col-form-label col-md-3 col-sm-3 label-align">door <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="door" class="form-control" type="number" name="door" value="{{ old('door') }}"  required="required">
                                    </div>  
                                    @error('door')
                                    <div class="alert alert-warning">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label for="passenger" class="col-form-label col-md-3 col-sm-3 label-align">passenger <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="passenger" class="form-control" type="number" name="passenger" value="{{ old('passenger') }}" required="required">
                                    </div>  
                                    @error('passengers')
                                    <div class="alert alert-warning">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label for="price" class="col-form-label col-md-3 col-sm-3 label-align">price <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input id="price" class="form-control" type="number" name="price" value="{{ old('price') }}"  required="required">
                                    </div>
                                    @error('price')
                                    <div class="alert alert-warning">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">active</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"  name="active" class="flat">
                                        </label>
                                    </div>
                        
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">image <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="file" id="image"value="{{ old('image') }}" name="image" required="required" class="form-control">
                                    </div>
                                    @error('image')
                                    <div class="alert alert-warning">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select name="category_id" id="">
                                            <option value="">Select Category</option>
    
                                              @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                              @endforeach
    
                                             </select>
                                    </div>
                                    @error('category')
                                    <div class="alert alert-warning">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-primary" type="button">Cancel</button>
                                        <button type="submit" class="btn btn-success">Add</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /page content -->
    @endsection