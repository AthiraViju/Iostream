@extends('dashboard.layouts.app')
@section('styles')
@endsection
@section('contents')
    <div class="col-12 grid-margin">
        @include('flash::message')
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload data here</h4>
                <form class="form-sample" action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
{{--                    <p class="card-description"> Personal info </p>--}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-3">
                                    <input type="file" name="file" class="btn btn-primary custom-file-input" id="customFile" >
{{--                                    <button class="file-upload-browse btn btn-primary" type="button">Upload Excel</button>--}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-sm-9">
                                    <button class="file-upload-browse btn btn-primary" type="submit">Import</button>
                                </div>
                            </div>
                        </div>

                    </div>



                </form>
            </div>
        </div>
    </div>



    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users List</h4>
                    <a class="btn btn-success" href="{{ route('file-export') }}">Download to Excel</a><br><br>

                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th style="color: whitesmoke"> Contact Number </th>
                            <th style="color: whitesmoke"> State </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td> {{ $user->number }} </td>
                            <td> {{ $user->state }} </td>
                        </tr>
                        @endforeach

                        </tbody>

                    </table>

                </div>

            </div>
        </div>
    </div>
 {!! $users->links() !!}
@endsection
@section('javascript')

    <script>
        $('#flash-overlay-modal').modal();
    </script>
@endsection
