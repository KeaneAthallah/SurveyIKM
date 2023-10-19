@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6>Profile Information</h6>
                    <small class="">Update your account's profile information and email address.</small>
                    <form method="POST" action="{{ route('admin.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 mt-4">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name', $profile->name) }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 mt-4">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ old('username', $profile->username) }}">
                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 mt-4">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email"
                                    value="{{ old('name', $profile->email) }}" disabled>
                            </div>
                        </div>
                        <div class="row mb-3 mt-4">
                            <label for="file" class="col-sm-2 col-form-label">Picture</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="oldimage" value="{{ $profile->image }}">
                                <input type="file" class="form-control" id="image" name="image"
                                    value="{{ old('image', $profile->image) }}">
                            </div>
                        </div>
                        <div class="row mb-3 mt-4">
                            <div class="col-sm-10">
                                <img id="showImage"class="rounded-square" style="width: 250px;height:250px"
                                    src="{{ !empty($profile->image) ? url('storage/' . $profile->image) : url('upload/no_image.jpg') }}"
                                    alt="">

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Update Password</h6>
                    <form method="POST" action="{{ route('admin.updatepass') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="oldpass" class="col-sm-2 col-form-label">Current Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control @error('oldPass') is-invalid @enderror"
                                    id="oldpass" name="oldpass">
                                @error('oldpass')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input name="newpass" type="password"
                                    class="form-control @error('newpass') is-invalid @enderror" id="inputPassword3">
                                @error('newpass')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input name="newpass_confirmation" type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
