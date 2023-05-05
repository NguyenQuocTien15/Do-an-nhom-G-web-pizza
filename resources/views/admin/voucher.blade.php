<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Voucher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>

    </style>
</head>

<body>


    {{-- Modal thêm voucher --}}
    <div class="modal fade" id="modalThem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm Voucher</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('them-voucher') }}" method="post">
                    <div class="modal-body">
                        

                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Mã code</strong>
                                    <input type="text" name="code" class="form-control" placeholder="Mã voucher">
                                    <span class="text-danger">
                                        @error('code')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <strong>Giảm giá</strong>
                                    <input type="text" name="discount" class="form-control"
                                        placeholder="Số tiền giảm">
                                    <span class="text-danger">
                                        @error('discount')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group">
                                    <strong>Hạn sử dụng</strong>
                                    <input type="date" name="expiry" class="form-control">
                                    <span class="text-danger">
                                        @error('expiry')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> --}}
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    {{-- body --}}
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card org-card-base border-none border-md-solid priority-class">
                    <form action="{{ route('admin-voucher-timkiem') }}" method="POST">
                        @csrf
                        <div class="card-body px-0 px-md-5">
                            <h4 class="mb-4 text-grey-darker d-inline-block">Quản lý Vouchers</h4>
                            {{-- <button type="button" class="btn btn-primary" style="float: right; padding: 10px 20px;">Thêm</button> --}}

                            {{-- Thêm voucher mới --}}
                            <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" style="float: right; padding: 10px 20px;">
                                Thêm
                            </button> --}}
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalThem" style="float: right; padding: 10px 20px;">
                                Thêm
                            </button>
                            <p class="text-grey-darker nomal mb-0">Nhập mã Voucher tìm kiếm</p>
                            <div class="py-5 pb-3 bg-img-sm-none">
                                <div class="row">
                                    <div class="col-12 col-md-10">
                                        <div class="input-group input-group-coke">
                                            <input name="voucher" id="voucher" class="form-control"
                                                placeholder="Nhập mã Voucher tìm kiếm" value="{{ old('voucher') }}">


                                            <button type="submit" class="btn"
                                                style="background: #0078ae; color: #fff;">
                                                <span style="font-weight: bold"><i class="fa fa-search"></i></span>
                                            </button>

                                        </div>
                                        {{-- bắt lỗi --}}
                                        <div>
                                            <span class="text-danger">
                                                @error('voucher')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            {{-- Kết quả trả về = 0 --}}
                                            @isset($result)
                                                @if ($result->count() <= 0)
                                                    <span class="text-danger">
                                                        "Mã voucher không tồn tại."
                                                    </span>
                                                @endif
                                            @endisset




                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>

                            </div>
                        </div>
                    </form>
                </div>
                {{-- Thông báo thêm voucher thành công --}}
                @if (Session::has('thongbaothem'))
                    <div class="alert alert-success">
                        {{ Session::get('thongbaothem') }}
                    </div>
                @endif

                {{-- Thông báo xoá voucher thành công --}}
                @if (Session::has('thongbaoxoa'))
                    <div class="alert alert-success">
                        {{ Session::get('thongbaoxoa') }}
                    </div>
                @endif
                {{-- Thông báo sửa voucher thành công --}}
                @if (Session::has('thongbaosua'))
                    <div class="alert alert-success">
                        {{ Session::get('thongbaosua') }}
                    </div>
                @endif


                {{-- Trang admin: Mới vào sẽ xuất tất cả voucher trong db --}}
                @isset($list_vouchers)
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Giảm giá</th>
                                <th scope="col">Sử dụng</th>
                                <th scope="col">Hạn sử dụng</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>



                            @foreach ($list_vouchers as $item)
                                {{-- Nội dung html hiển thị --}}
                                <tr>
                                    <td>{{ $item->code }}</td>
                                    {{-- <td>{{ $item->discount }}</td> --}}
                                    <td>{{ number_format($item->discount, 0, ',', '.') }} đ</td>

                                    <td>
                                        @if ($item->used == 0)
                                            Chưa dùng
                                        @else
                                            Đã dùng
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($item->expiry)->format('d/m/Y') }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#modalSua{{ $item->id }}">
                                            Sửa
                                        </button>

                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#modalXoa{{ $item->id }}">
                                            Xoá
                                        </button>


                                    </td>
                                </tr>
                                {{-- Modal sửa voucher --}}
                                <div class="modal fade" id="modalSua{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sửa Voucher</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('sua-voucher', ['id_voucher' => $item->id]) }}"
                                                method="post">
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <strong>Mã code</strong>
                                                                <input type="text" name="code" class="form-control"
                                                                    placeholder="Mã voucher" value="{{ $item->code }}">
                                                                <span class="text-danger">
                                                                    @error('code')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <strong>Giảm giá</strong>
                                                                <input type="text" name="discount"
                                                                    class="form-control" placeholder="Số tiền giảm"
                                                                    value="{{ $item->discount }}">
                                                                <span class="text-danger">
                                                                    @error('discount')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <strong>Sử dụng</strong>
                                                                <input type="checkbox" name="used" id="used"
                                                                    {{ $item->used == 1 ? 'checked' : '' }}>
                                                            </div>
                                                            <div class="form-group">
                                                                <strong>Hạn sử dụng</strong>
                                                                <input type="date" name="expiry" class="form-control"
                                                                    value="{{ $item->expiry }}">
                                                                <span class="text-danger">
                                                                    @error('expiry')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="modal-footer">
                                                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> --}}
                                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal Xoá voucher --}}
                                <form action="{{ route('xoa-voucher', ['id_voucher' => $item->id]) }}" method="post">
                                    @csrf
                                    <div class="modal fade" id="modalXoa{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Xoá voucher</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Bạn có chắc chắn xoá không?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Huỷ</button>

                                                    {{-- <button type="submit" class="btn btn-primary">Xoá</button> --}}
                                                    <button type="submit" class="btn btn-primary">Xoá</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            @endforeach

                        </tbody>
                    </table>



                    {{ $list_vouchers->links() }}
                @endisset

                {{-- Khi admin search code voucher --}}
                @isset($result)
                    @if ($result->count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Giảm giá</th>
                                    <th scope="col">Sử dụng</th>
                                    <th scope="col">Hạn sử dụng</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $item)
                                {{-- Modal sửa voucher tìm kiếm --}}
                                <div class="modal fade" id="modalSua{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sửa Voucher</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('sua-voucher', ['id_voucher' => $item->id]) }}"
                                                method="post">
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <strong>Mã code</strong>
                                                                <input type="text" name="code" class="form-control"
                                                                    placeholder="Mã voucher" value="{{ $item->code }}">
                                                                <span class="text-danger">
                                                                    @error('code')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <strong>Giảm giá</strong>
                                                                <input type="text" name="discount"
                                                                    class="form-control" placeholder="Số tiền giảm"
                                                                    value="{{ $item->discount }}">
                                                                <span class="text-danger">
                                                                    @error('discount')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <strong>Sử dụng</strong>
                                                                <input type="checkbox" name="used" id="used"
                                                                    {{ $item->used == 1 ? 'checked' : '' }}>
                                                            </div>
                                                            <div class="form-group">
                                                                <strong>Hạn sử dụng</strong>
                                                                <input type="date" name="expiry" class="form-control"
                                                                    value="{{ $item->expiry }}">
                                                                <span class="text-danger">
                                                                    @error('expiry')
                                                                        {{ $message }}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="modal-footer">
                                                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> --}}
                                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- Modal Xoá voucher tìm kiếm --}}
                                <form action="{{ route('xoa-voucher', ['id_voucher' => $item->id]) }}" method="post">
                                    @csrf
                                    <div class="modal fade" id="modalXoa{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Xoá voucher</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Bạn có chắc chắn xoá không?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Huỷ</button>

                                                    {{-- <button type="submit" class="btn btn-primary">Xoá</button> --}}
                                                    <button type="submit" class="btn btn-primary">Xoá</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                    <tr>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->discount }}</td>
                                        <td>{{ $item->used == 0 ? 'Chưa dùng' : 'Đã dùng' }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->expiry)->format('d/m/Y') }}</td>
                                        <td>
                                            {{-- Tìm kiếm và sửa --}}
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#modalSua{{ $item->id }}">
                                                Sửa
                                            </button>

                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#modalXoa{{ $item->id }}">
                                                Xoá
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @endif
                @endisset


            </div>
        </div>

    </div>




    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
</body>

</html>
