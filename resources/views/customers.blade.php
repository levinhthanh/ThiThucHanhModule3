<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="{{ asset('libs/node_modules/bootstrap/dist/css/bootstrap.css') }}">

</head>

<body>
    <div class="container h1 mt-5 mb-5">DANH SÁCH KHÁCH HÀNG :</div>
    <div class="container">
        <a href="{{ route('customersActive') }}" class="btn btn-success mb-3">Kích hoạt</a>
        <a href="{{ route('customersNonActive') }}" class="btn btn-success mb-3">Chưa kích hoạt</a>
    </div>
    <div class="container">
        <a href="{{ route('createCustomer') }}" class="btn btn-success mb-3">Tạo mới</a>
    </div>

    <table class="container table table-striped table-bordered ">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Công ty</th>
                <th scope="col">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            @if ($customers == '')
                <tr>
                    <td colspan="4">Không có dữ liệu</td>
                </tr>
            @else
                @foreach ($customers as $key => $customer)
                    <tr>
                        <td scope="row">{{ ++$key }}</td>
                        <td scope="row">{{ $customer->name }}</td>
                        <td scope="row">{{ $customer->email }}</td>
                        <td scope="row">{{ $customer->phone }}</td>
                        <td scope="row">
                            @php
                                if($customer->company_id){
                                    echo $customer->company->title;
                                }else {
                                    echo "unknow";
                                }
                            @endphp
                        </td>
                        <td scope="row">
                            <a href="/customer/{{ $customer->id }}" class="btn btn-success">Sửa</a>
                        </td>
                    </tr>
                @endforeach
            @endif


        </tbody>
    </table>




    <script src="{{ asset('libs/node_modules/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('libs/node_modules/jquery/dist/jquery.js') }}"></script>
</body>

</html>
