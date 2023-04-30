{{-- dashboard --}}
@extends('dashboard')
{{-- Nội dung list of users --}}
@section('content')
<main class="listofusers">
    {{-- Tìm kiếm uesr --}}
    <div class="search m-2" style=" display: flex;
        justify-content: right;">
        <form action="#" method="get" class="d-flex">
            <input type="text" name="#" id="#" placeholder="Search Name" style="border: 1px solid black; margin-right: 5px;">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    {{-- <div class="container"> --}}


    <table class="table">
        <!-- Tieu de in dam -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Avatar</th>
                <!-- <th>Email_verified_at</th> -->
                <th>Password</th>
                <!-- <th>Remember_token</th> -->
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
            </tr>
        </thead>
        <!-- Liet ke danh sach -->
        <tbody>
            {{-- Kiểm tra nếu count(data)>0 --}}
            @if (!empty($data) && $data->count())
            {{-- vòng lặp --}}
            @foreach ($data as $i)
            <tr>
                <td>{{ $i->id }}</td>
                <td>{{ $i->name }}</td>
                <td>{{ $i->email }}</td>
                <td>{{ $i->phone }}</td>
                <td>{{ $i->avatar }}</td>
                <!-- <td>{{ $i->email_verified_at }}</td> -->
                <td style="overflow-x: scroll; max-width: 350px">{{ $i->password }}</td>
                <!-- <td>{{ $i->remember_token }}</td> -->
                <td>{{ $i->created_at }}</td>
                <td>{{ $i->updated_at }}</td>

                <td style="display: flex; justify-content: center; align-items: center;">
                    <button type="button" class="btn btn-info" style="display: inline-block;">Info</button>
                    <a href="{{route('users.edit', $i->id)}}" class="btn btn-warning ms-1" style="display: inline-block;">Edit</a>
                    

                    <form action="{{route('users.delete', $i->id)}}" method="POST" onclick="return confirm('ban co muon xoa {{$i->name}}')">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger ms-1" type="submit" value="delete">
                    </form>

                </td>


            </tr>
            @endforeach
            @else
            <tr>
                <td>chua co nguoi dang</td>
            </tr>
            @endif
        </tbody>
    </table>

    {{-- div container  --}}
    {{-- </div> --}}
    {{-- Phân trang --}}
    <div class="d-flex justify-content-center">{{ $data->links() }}</div>
</main>
@endsection