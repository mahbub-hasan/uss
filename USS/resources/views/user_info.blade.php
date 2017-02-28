@extends('master')

@section('container')
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col s12">
                    <a class="btn waves-effect waves-light" href={{ url('/add_new') }}>Add New User</a>
                </div>
                <?php
                // get all info from userinfo table
                ?>
                <table>
                    <tr>
                        <th>FullName</th>
                        <th>UserName</th>
                        <th>MobileNo</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection