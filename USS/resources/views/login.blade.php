@extends('master')

@section('container')
    <form action={{ url('do_login') }} method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="card">
                @if($errors->count()>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row" style="padding: 10px">
                    <div class="card-content black-text">
                        <span class="card-title">Login Panel</span>
                    </div>
                    <div class="input-field col s12">
                        <input  id="username" type="text" class="validate" name="username">
                        <label for="username">UserName</label>
                    </div>

                    <div class="input-field col s12">
                        <input  id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>

                    <div class="col s12 right">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Login
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection