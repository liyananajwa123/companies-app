@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])
@section('title','Dashboard')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Companies</h4>
            </div>
            <div class="card-body">
                <div class="text-right">
                    {{-- <a href="{{ route('kakitangan.create') }}" class="btn">Tambah Kakitangan </a> --}}
                </div>
               
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>No. </th>
                                <th>Name</th>
                                <th>Emel</th>
                                <th>Website</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                            {{-- @if ($results->count() != 0)
                                @foreach ($results as $key => $res)
                                    <tr>
                                        <td>{{ $key + $results->firstItem() }}.</td>
                                        <td>{{ $res->user_firstName }}</td>
                                        <td>{{ $res->login_ref->login_icNo ?? '' }}</td>
                                        <td>{{ $res->work_ref->jabatan_ref->jabatan_name ?? '' }}</td>
                                        <td>{{ $res->login_ref->access_ref->access_name ?? '' }}</td>
                                        <td>
                                            <a href="{{ route('kakitangan.create', [$res->hash_id]) }}">
                                                <i class="fas fa-edit text-primary"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            {{-- @else
                                <tr>
                                    <td colspan="6" class="text-center">Tiada rekod ditemui</td>
                                </tr>
                            @endif --}}
                        </tbody>
                    </table>
                    {{-- {{ $results->appends($filters)->links() }} --}}
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection

@push('js')

@endpush