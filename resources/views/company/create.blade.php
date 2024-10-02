@extends('layouts.app', [
    'namePage' => 'Companies Create',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])
@section('title','Companies Create')

@section('content')
<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <form id="RegisterValidation" action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                @csrf  <!-- CSRF Token -->
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Create Companies</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-body">
                                @include('layouts.flash_message')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group has-label">
                                            <label>Name</label>
                                            <input class="form-control" name="name" type="text" required="true" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-label">
                                            <label>Email Address</label>
                                            <input class="form-control" name="email" type="email" required="true" />
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-md-6">
                                            
                                            <label for="logo">Logo (minimum 100x100)</label>
                                            <input class="form-control" name="logo" type="file" accept="image/*" required="true" id="logo" />
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-label">
                                            <label>Website</label>
                                            <input class="form-control" name="website_link" type="text" required="true" />
                                        </div>
                                    </div>
                                </div>
                               
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
