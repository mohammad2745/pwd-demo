@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4><b>প্রকল্পের তালিকা</b></h4>
                            <a class="btn btn-primary" href="{{ route('projects.create') }}">নতুন প্রকল্প যুক্ত করুন</a>
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
                                    <th>প্রজেক্টের নাম</th>
                                    <th>প্রজেক্ট শুরুর তারিখ</th>
                                    <th>প্রজেক্ট শেষের তারিখ</th>
                                    <th>মন্তব্য </th>
                                    <th>বিস্তারিত</th>
                                    <th width="150px">অ্যাকশন</th>
                                </tr>
                                </thead>
                                @foreach ($projects as $project)
                                    <tbody>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->startDate }}</td>
                                        <td>{{ $project->endDate }}</td>
                                        <td>{{ $project->comment }}</td>
                                        <td>{{ $project->details }}</td>
                                        <td>
                                            <form action="{{ route('projects.destroy',$project->id) }}" method="POST">

                                                <a class="badge badge-primery" href="{{ route('projects.show',$project->id) }}">Show</a>

                                                <a class="badge badge-success" href="{{ route('projects.edit',$project->id) }}">Edit</a>

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
