@extends('layout')
@section('content')
 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
@include('sidebar')
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        @include('topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">EDIT CRIME REPORT!</h1>
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('crime.update', $crime) }}">
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                            <select class="custom-select form-control form-control-user round required" value="{{$crime->location_id }}" id="type" name="location" required>
                                                    <option value="" >Select location</option>
                                                    @foreach($locations as $location)
                                                        <option value="{{$location->id}}">{{$location->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('type')<p class="text-danger">{{$errors->first('type')}}</p>@enderror
                                                <div class="form-control-position">
                                                    <i class="ft-mail"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                            <select class="custom-select form-control form-control-user round required" value="{{ $crime->type }}" id="type" name="type" required>
                                                    <option value="" >Select type</option>
                                                    @foreach($types as $type)
                                                    <option value="{{$type}}">{{$type}}</option>
                                                    @endforeach
                                                </select>
                                                @error('type')<p class="text-danger">{{$errors->first('type')}}</p>@enderror
                                                <div class="form-control-position">
                                                    <i class="ft-mail"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <textarea id="description" value="{{ old('name') }}" name="description" rows="6" placeholder="Description" class="form-control required @error('description') 'text-danger' @enderror" value="{{ old('') }}" type="text" >{{$crime->description}}</textarea>
                                                            @error('description')<p class="text-danger">{{$errors->first('description')}}</p>@enderror
                                                <div class="form-control-position">
                                                    <i class="ft-lock"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                            </div>
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    @include('footer')
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->



@endsection
