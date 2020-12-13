@extends('layouts.main')

@section('content')


<div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-color: rgb(170, 93, 58)">
    <div class="d-flex flex-column justify-content-between w-100">
        <div class="container d-flex h-100">
            <div class="row align-items-center w-100">
                <div class="col-md-7 col-lg-5 m-h-auto">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between m-b-30">
                                <img class="img-fluid" alt="" src="{{ asset('assets/image/logo-t.png') }}">
                                <h2 class="m-b-0">SIDPD 20202</h2>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="userName">Email:</label>
                                    <div class="input-affix">
                                        <i class="prefix-icon anticon anticon-user"></i>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="password">Password:</label>
                                    <div class="input-affix m-b-10">
                                        <i class="prefix-icon anticon anticon-lock"></i>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button class="btn btn-primary">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-md-flex p-h-40 justify-content-between">
            <span class="">© 2020 SIDPDP</span>
        </div>
    </div>
</div>

@endsection

@section('js')

@endsection

