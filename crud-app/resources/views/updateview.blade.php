@extends('welcome')
@section('content')

<div class="col-md-8 m-auto border p-5 border-info">  <h2 class="text-center text-warning pb-3">Update View Data</h2>
<form action="/updatedata" method = "POST" enctype="multipart/form-data">
          @csrf   
            <div class="mb-2">
                <input type="hidden" name="pid" id="" value="{{$id}}" placeholder="Enter Product Name" class="form-control" />
            </div>
            <div class="mb-2">
                <input type="text" name="pname" id="" value="{{$pname}}" placeholder="Enter Product Name" class="form-control" />
            </div>
            <div class="mb-2">
                <input type="text" name="ppice" id="" value="{{$ppice}}" placeholder="Enter Product price" class="form-control" />
            </div>
            <!-- <div class="mb-2">
                <input type="file" name="pimage" id="" class="form-control" />
            </div> -->
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <button type="Submit" name="submit" class="btn btn-outline-warning rounded-pill">Submit</button>
            </div>
        </form>
        <a href="/" type="Back" class="btn btn-outline-warning rounded-pill">Back</a>
</div>

@endsection