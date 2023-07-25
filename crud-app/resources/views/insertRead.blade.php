@extends('welcome')
@section('content')

<!-- Button trigger modal -->
<center>
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill m-2" >
  Back
</button>
<button type="button" class="btn btn-outline-danger fw-bold fs-4 rounded-pill m-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Crud Data Insert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/insertData" method = "POST" enctype="multipart/form-data">
          @csrf   
        <div class="mb-2">
                <input type="text" name="pname" id="" placeholder="Enter Product Name" class="form-control" />
            </div>
            <div class="mb-2">
                <input type="text" name="ppice" id="" placeholder="Enter Product price" class="form-control" />
            </div>
            <div class="mb-2">
                <input type="file" name="pimage" id="" class="form-control" />
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
               <button type="Submit" name="submit" class="btn btn-outline-danger fw-bold fs-4 rounded-pill">Submit</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Data show -->

<table class="table table-striped mt-5 align-middle">
  <thead class="table-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Edit</th>
      <th scope="col">Product Delet</th>
    </tr>
  </thead>
  <tbody>
    @php 
    $i = 0;
    @endphp
  @foreach($viewData as $data)
    <tr>
      <form action="/updateDelete" method="get">
      <th scope="row"><input type="hidden" name="id" value="{{$data['Id']}}" >{{$data['Id']}}</th>
      <td><input type="hidden" name="pname" value="{{$data['Pname']}}" >{{$data['Pname']}}</td>
      <td><input type="hidden" name="ppice" value="{{$data['Pprice']}}" >{{$data['Pprice']}}</td>
      <td><img src="images/{{$data['Pimage']}}" width="80px" height="80px" /></td>
      <td><input type="submit" name="update" value="Update" class="btn btn-warning rounded-pill" ></td>
      <td><input type="submit" value="Delete" class="btn btn-danger rounded-pill" ></td>
      </form>
    </tr>
    @endforeach
   
  </tbody>
</table>

</center>
@endsection