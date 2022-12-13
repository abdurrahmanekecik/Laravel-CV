@extends('admin.app')
@section('tittle', 'Settings')
@section('content')
    <div class="content p-12">
        <br>
        <h2 class="mb-4">Home Settings</h2>

        <div class="card mb-12">
            <div class="card-header bg-white font-weight-bold">
                Settings
            </div>
            <div class="card-body">
                <form >
                    @csrf @method('PATCH')
                    <div class="form-group">
                        <label >Name</label>
                        <input name="name" type="text" class="form-control"
                               >
                    </div>
                    <div class="form-group">
                        <label >Huge Title<label>
                                <input name="hugetitle" type="text" class="form-control"
                                       placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label >Description</label>
                        <input name="description" type="text" class="form-control"
                               placeholder="Enter Description">
                    </div>


                    <div class="form-group">
                        <label >İmage</label>
                        <input name="image" type="file" class="form-control"
                               placeholder="Upload Favicon">
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
