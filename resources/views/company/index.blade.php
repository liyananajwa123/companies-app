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
                @include('layouts.flash_message')
                <h4 class="card-title"> Companies</h4>
            </div>
            <div class="card-body">
                <div class="text-right">
                    <a href="{{ route('companies.create') }}" class="btn">Add Companies</a>
                </div>
               
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>No. </th>
                                <th>Name</th>
                                <th>Emel</th>
                                <th>Website</th>
                                <th colspan="3">Action</th>
                            </tr>
                            @if ($company->count() != 0)
                                @foreach ($company as $key => $res)
                                    <tr>
                                        <td>{{ $key + $company->firstItem() }}.</td>
                                        <td><img src="{{ asset($res->logo) }}" alt="Company Logo" width="100" height="100">
                                            {{ $res->name }}</td>
                                        <td>{{ $res->email ?? '' }}</td>
                                        <td>{{ $res->website_link ?? '' }}</td>
                                        <td>{{ $res->login_ref->access_ref->access_name ?? '' }}</td>
                                        <td>
                                            <a href="{{ route('companies.edit', [$res->id]) }}">
                                                <i class="fas fa-edit text-primary"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('companies.destroy', $res->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this company?');" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0" style="color: red;">
                                                    <i class="fas fa-trash-alt"></i> <!-- Font Awesome Trash Icon -->
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach 
                             @else
                                <tr>
                                    <td colspan="6" class="text-center">Tiada rekod ditemui</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $company->links() }}
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection

@push('js')

@endpush