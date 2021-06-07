@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header"><b>নতুন প্রকল্প</b></div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('projects.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="project-name">প্রজেক্টের নাম</label>
                                    <input class="form-control" id="project-name" type="text" name="project-name" placeholder="প্রজেক্টের নাম...">
                                </div>
                                <div class="form-group">
                                    <label for="start-date">প্রজেক্ট শুরুর তারিখ</label>
                                    <input class="form-control" id="start-date" type="date" name="start-date" placeholder="Enter Password..">
                                </div>
                                <div class="form-group">
                                    <label for="end-date">প্রজেক্ট শেষের তারিখ</label>
                                    <input class="form-control" id="end-date" type="date" name="end-date" placeholder="Enter Password..">
                                </div>
                                <div class="form-group">
                                    <label for="project-comment">মন্তব্য</label>
                                    <input class="form-control" id="project-name" type="text" name="project-name" placeholder="মন্তব্য...">
                                </div>
                                <div class="form-group">
                                    <label for="project-details">বিবরণ</label>
                                    <input class="form-control" id="project-name" type="text" name="project-name" placeholder="প্রজেক্টের বিবরণ...">
                                </div>
{{--                                <div class="form-group">--}}
{{--                                    <label for="implementor-organization">বাস্তবায়নকারী</label>--}}
{{--                                    <input class="form-control" id="implementor-organization" type="text" name="implementor-organization" placeholder="বাস্তবায়নকারী সংস্থা...">--}}
{{--                                </div>--}}
                            </form>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary" type="submit"> সংরক্ষণ করুন</button>
                            <button class="btn btn-sm btn-danger" type="submit"><a href="{{ route('projects.index') }}" style="text-decoration: none" style="text-color: white">বাতিল করুন</a> </button>
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
