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
            <form action="{{ route('settings.update', $setting->id)}}" method="POST" enctype="multipart/form-data">
                @csrf @method('PATCH')
                <div class="form-group">
                    <label >Name</label>
                    <input name="name" type="text" class="form-control"
                           placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label >Description</label>
                    <input name="description" type="text" class="form-control"
                           placeholder="Enter Description">
                </div>


                <div class="form-group">
                    <label >Favicon</label>
                    <input name="favicon" type="file" class="form-control"
                           placeholder="Upload Favicon">
                </div>


                <div class="form-group">
                    <label >Logo</label>
                    <input name="logo" type="file" class="form-control"
                           placeholder="Upload Logo">
                </div>
                <div class="form-group">
                    <label >Smtp Server</label>
                    <input name="server" type="text" class="form-control"
                           placeholder="Enter Smtp Server">
                </div>
                <div class="form-group">
                    <label>Smtp Username</label>
                    <input name="user" type="text" class="form-control"
                           placeholder="Enter Smtp Username">
                </div>

                <div class="form-group">
                    <label >Smtp Password</label>
                    <input name="pass" type="password" class="form-control"
                           placeholder="Enter Smtp Password">
                </div>
                <div class="form-group">
                    <label >Smtp Port</label>
                    <input name="port" type="number" class="form-control"
                           placeholder="Enter Smtp Port">
                </div>
                <div class="form-group">
                    <label >Smtp SSL/TLS</label>
                    <select name="ssltls">
                        <option value="1">SSL</option>
                        <option value="0">TLS</option>
                    </select>
                </div>


            </form>
        </div>
        <div class="card-footer bg-white">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>

@endsection
@section('js')
@endsection
@section('css')
@endsection
