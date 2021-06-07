@extends('dashboard.base')

@section('content')

<div class="container-fluid">
    <div class="fade-in">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">

            <div class="card-header d-flex justify-content-between align-items-center">
                <h4><b>Implementor Organizations</b></h4>
                <a class="btn btn-primary" href="{{ route('implementors.create') }}"> Add New Implementor Organization</a>
            </div>
            
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
            <div class="card-body">
              <table class="table table-responsive-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ministry</th>
                        <th>sub_ministry</th>
                        <th>sector</th>
                        <th>sub_sector</th>
                        <th>division</th>
                        <th>subdivision</th>
                        <th width="150px">Action</th>
                    </tr>
                </thead>
                @foreach ($implementors as $implementor)
                <tbody>
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $implementor->ministry }}</td>
                        <td>{{ $implementor->sub_ministry }}</td>
                        <td>{{ $implementor->sector }}</td>
                        <td>{{ $implementor->sub_sector }}</td>
                        <td>{{ $implementor->division }}</td>
                        <td>{{ $implementor->subdivision }}</td>
                        <td>
                            <form action="{{ route('implementors.destroy',$implementor->id) }}" method="POST">
            
                                <a class="badge badge-primery" href="{{ route('implementors.show',$implementor->id) }}">Show</a>
                
                                <a class="badge badge-success" href="{{ route('implementors.edit',$implementor->id) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="badge badge-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
              </table>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /.col-->
        
        <!-- /.col-->
      </div>
      <!-- /.row-->
    </div>
  </div>


@endsection

@section('javascript')
<script src="{{ asset('js/axios.min.js') }}"></script> 
<script src="{{ asset('js/menu-create.js') }}"></script>


@endsection