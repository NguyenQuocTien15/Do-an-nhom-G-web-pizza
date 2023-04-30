@extends('dashboard')

@section('content')


<div class="container">
        <div class="card">
            <div class="card-body">
                    <table class="table table-bordered">
            
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
            
                        <tbody>
                        @foreach($users as $item)
                            @if($item->name == $nguoidung->name)
                            <tr>
                                
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
        </div>
        @endsection