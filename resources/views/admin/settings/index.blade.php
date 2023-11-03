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
                <form action="{{ route('settingsPost')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label >Name</label>
                        <input name="name" type="text" class="form-control"
                               placeholder="Enter Name" value="{{ $data->name }}">
                    </div>

                    <div class="form-group">
                        <label >Description</label>
                        <input name="description" type="text" class="form-control"
                               placeholder="Enter Description" value="{{ $data->description }}">
                    </div>


                    <div class="form-group">
                        <label >Favicon</label>
                        <img src="{{ $data->favicon }}" style="width: 100px; height: 100px">
                        <input name="favicon" type="file" class="form-control"
                               placeholder="Upload Favicon" >
                    </div>


                    <div class="form-group">
                        <label >Logo</label>
                        <img src="{{ $data->logo }}" style="width: 100px; height: 100px">
                        <input name="logo" type="file" class="form-control"
                               placeholder="Upload Logo" >
                    </div>
                    <div class="form-group">
                        <label >Server</label>
                        <input name="server_link" type="text" class="form-control"
                               placeholder="Enter Server" value="{{ $data->server_link }}">
                    </div>
                    <div class="form-group">
                        <label>Smtp Username</label>
                        <input name="user" type="text" class="form-control"
                               placeholder="Enter Smtp Username" value="{{ $data->user }}">
                    </div>

                    <div class="form-group">
                        <label >Smtp Password</label>
                        <input name="pass" type="password" class="form-control"
                               placeholder="Enter Smtp Password" value="{{ $data->pass }}">
                    </div>
                    <div class="form-group">
                        <label >Smtp Port</label>
                        <input name="port" type="number" class="form-control"
                               placeholder="Enter Smtp Port" value="{{ $data->port }}">
                    </div>
                    <div class="form-group">
                        <label >Smtp SSL/TLS</label>
                        <select name="ssltls">
                            <option value="1">SSL</option>
                            <option value="0">TLS</option>
                        </select>
                    </div>

                    <div class="card-footer bg-white">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

