@extends('master')

@section('container')
    <form action={{ url('do_login') }} method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="card">
                <div class="row" style="padding: 10px">
                    <div class="card-content black-text">
                        <span class="card-title">Registration Panel</span>
                    </div>
                    <div class="input-field col s12">
                        <input  id="username" type="text" class="validate" name="username">
                        <label for="username">UserName</label>
                    </div>

                    <div class="input-field col s12">
                        <input  id="full_name" type="text" class="validate" name="full_name">
                        <label for="full_name">FullName</label>
                    </div>

                    <div class="input-field col s12">
                        <input  id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>

                    <div class="input-field col s12">
                        <input  id="mobile_number" type="number" class="validate" name="mobile_number">
                        <label for="mobile_number">MObile Number</label>
                    </div>

                    <div class="col s12 right">
                        <button class="btn waves-effect waves-light" type="submit"
                                name="action" >Registration
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection