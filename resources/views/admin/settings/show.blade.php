
@extends('admin.app')
@section('tittle', 'Settings')
@section('content')

    <div class="content p-12">
    <br>
    <h2 class="mb-4">Settings</h2>

    <div class="card mb-12">
        <div class="card-header bg-white font-weight-bold">
            Settings
        </div>
        <div class="card-body">


                <div class="form-group">
                    <label >Name</label>
                    <input  type="text" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <label >Description</label>
                    <input type="text" class="form-control" disabled>
                </div>


                <div class="form-group">
                    <label >Favicon</label>
                    <input  type="file" class="form-control" disabled>
                </div>


                <div class="form-group">
                    <label >Logo</label>
                    <input  type="file" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label >Smtp Server</label>
                    <input  type="text" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label>Smtp Username</label>
                    <input  type="text" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <label >Smtp Password</label>
                    <input  type="password" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label >Smtp Port</label>
                    <input  type="number" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <label >Smtp SSL/TLS</label>
                    <select disabled>
                        <option value="1">SSL</option>
                        <option value="0">TLS</option>
                    </select>
                </div>



        </div>

    </div>
</div>
@endsection
@section('js')
@endsection
@section('css')
@endsection

