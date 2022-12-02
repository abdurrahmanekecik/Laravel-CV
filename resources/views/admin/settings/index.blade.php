@extends('admin.app')
@section('tittle', 'Settings')
@section('content')

    <div class="content p-4">

        <h2 class="mb-4">Settings</h2>

        <div class="card mb-4">
            <div class="card-body">
                <table id="example" class="table table-hover" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th class="actions">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        @foreach($settings as $setting)


                        <td>{{ $setting->name }}</td>
                        <td>{{ $setting->description }}</td>


                        <td>
                            <a href="{{ route('settings.edit',$setting->id) }}" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip"
                               title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                            <a href="{{ route('settings.show',$setting->id) }}" class="btn btn-icon btn-pill btn-primary" data-toggle="tooltip"
                               title="Show"><i class="fa fa-fw fa-eye"></i></a>

                        </td>
                        @endforeach
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>



@endsection
@section('js')
@endsection
@section('css')
@endsection
