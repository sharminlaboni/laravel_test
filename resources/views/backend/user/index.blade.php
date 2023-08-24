@section('title')
Total Banners
@endsection
@extends('backend.layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show p-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>&emsp;
        <strong class="fs-5">{{ session('success') }}</strong>
        {{-- <button type="button" class="btn-close pt-1" data-bs-dismiss="alert"> --}}
        </button>
    </div>
@endif
    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-15">
                <div class="card-header">
                    <h5 class="card-title">user List </h5>

                </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-stripped text-center table-responsive">
                <tr class="">
                    <th>Sl No</th>
                    
                    <th>user name</th>
                    <th>user email</th>
                    
                    
                    <th>Action</th>
                </tr>
                @foreach ($users as $users)
                    <tr>
                    <td>{{ $users->id }}</td>


                

                <td>{{ $users->name }}</td>

                  <td>{{ $users->email }}</td>
                    
                        <td class="d-flex justify-content-center">
                        <form class="mx-1" action="{{ route('user.destroy', $users->id) }}" method="post" style="display:inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure want to Delete')">Delete</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>

      </div>
                </div>
            </div>
        </div>


    {{-- </div> <!-- End row --> --}}
    </div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
