
<div class="card mb-3">
    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Phone</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>


            </tr>
            </thead>
            <tbody>
                @foreach($students as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->age}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->speciality}}</td>
                    <td>

                        <a href="{{url('/editData/'.$data->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{url('/deleteData/'.$data->id)}}" class="btn btn-sm btn-danger">Delet</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>






