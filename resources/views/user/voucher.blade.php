<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voucher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    {{-- {{ $list_vouchers }} --}}
    {{-- {{ $result }} --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card org-card-base border-none border-md-solid priority-class">
                    <form action="{{ route('find-voucher-user') }}" method="POST">
                        @csrf
                        <div class="card-body px-0 px-md-5">
                            <h4 class="mb-4 text-grey-darker">Bạn có mã Voucher tại Tomato Pizza?</h4>
                            <p class="text-grey-darker nomal mb-0">Nhập mã Voucher của bạn ở khung dưới đây để được ưu
                                đãi</p>
                            <div class="py-5 pb-3 bg-img-sm-none">
                                <div class="row">
                                    <div class="col-12 col-md-10">
                                        <div class="input-group input-group-coke">
                                            <input name="voucher" id="voucher" class="form-control"
                                                placeholder="Nhập mã Voucher" value="{{ old('voucher') }}">


                                            <button type="submit" class="btn"
                                                style="background: #0078ae; color: #fff;">
                                                <span style="font-weight: bold">Áp dụng</span>
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
                {{-- kết quả trả về có --}}
                @isset($result)
                    @if ($result->count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Giảm giá</th>
                                    <th scope="col">Sử dụng</th>
                                    <th scope="col">Hạn sử dụng</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($result as $item)
                                    <tr>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ $item->discount }}</td>
                                        <td>
                                            @if ($item->used == 0)
                                                Chưa dùng
                                            @else
                                                Đã dùng
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($item->expiry)->format('d/m/Y') }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    @endif
                @endisset


            </div>
        </div>
    </div>


</body>

</html>
