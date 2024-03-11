@extends('admin.layouts.layout')

@section('title')
    AdminHome
@endsection

@section('keywords')
    admin,panel
@endsection

@section('description')
    Admin Panel
@endsection


@section('content')
    <div class="page-wrapper">

        <div class="page-container">
            <div class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @if($tableName != 'images')
                                <form method="GET" action="{{ route($tableName.'.create') }}">
                                    @csrf
                                    @method('GET')
                                    <button style="width: 50%" type="submit" class="btn btn-primary">Insert</button>
                                </form>
                            @else
                                <form method="GET" action="{{route('images.index')}}">
                                    @csrf
                                    @method('GET')
                                    <button style="width: 50%" type="submit" class="btn btn-primary">Insert</button>
                                </form>
                            @endif


                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        @foreach($tableContent->first() as $key => $value)
                                            <th>{{ $key }}</th>
                                        @endforeach
                                        <th>Actions</th> <!-- Dodajemo zaglavlje za akcije -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tableContent as $item)
                                        <tr>
                                            @foreach($item as $value)
                                                <td>{{ $value }}</td>
                                            @endforeach
                                            <td>
                                                @if($tableName != 'images')
                                                    <form  action="{{ route($tableName.'.edit', [$item->id]) }}">
                                                        @csrf

                                                        <button style="width:100%" type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                @else
                                                    <form  action="{{ route($tableName.'.edit', [$item->id]) }}">
                                                        @csrf

                                                        <button disabled style="width:100%" type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                @endif

                                                <form method="POST" action="{{ route($tableName.'.destroy', [$item->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="width: 100%" type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>

@endsection
