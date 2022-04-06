@extends('dashboard.layouts.app')
@section('styles')
@endsection
@section('contents')
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Send / Recieve Messages here</h4>

                <form class="forms-sample" action="{{ route('send.message') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Mobile Number</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" name="number" placeholder="Enter Mobile Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="exampleInputUsername2" name="message" placeholder="Enter Message">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>



@endsection
@section('javascript')


@endsection
