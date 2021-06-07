@extends('dashboard.base')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Organization</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('implementors.index') }}"> Back</a>
            </div>
        </div>
    </div>

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

    <form action="{{ route('implementors.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ministry:</strong>
                    <input type="text" name="ministry" class="form-control" placeholder="ministry">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sub_ministry:</strong>
                    <input type="text" name="sub_ministry" class="form-control" placeholder="sub_ministry">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sector:</strong>
                    <input type="text" name="sector" class="form-control" placeholder="sector">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sub_sector:</strong>
                    <input type="text" name="sub_sector" class="form-control" placeholder="sub_sector">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>division:</strong>
                    <input type="text" name="division" class="form-control" placeholder="division">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>subdivision:</strong>
                    <input type="text" name="subdivision" class="form-control" placeholder="subdivision">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

@section('javascript')
<script src="{{ asset('js/axios.min.js') }}"></script>
<script src="{{ asset('js/menu-create.js') }}"></script>


@endsection
