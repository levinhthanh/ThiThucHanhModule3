<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHỈNH SỬA KHÁCH HÀNG</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('libs/node_modules/bootstrap/dist/css/bootstrap.css') }}">


</head>

<body>
    <div class="container">
        <a href="{{ route('customersList') }}" class="btn btn-success ml-5 mt-3">Quay lại danh sách</a>
    </div>
    <div class="container h1 text-center mt-5 mb-5">CHỈNH SỬA KHÁCH HÀNG:</div>
    <div class="container text-center error-message">
        @if ($errors->any())
            @foreach ($errors->all() as $nameError)
                <p style="color:red">{{ $nameError }}</p>
            @endforeach
        @endif
        <p style='color:green'>{{ isset($success) ? $success : '' }}</p>
    </div>

    <form action="{{ route('updateCustomer') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$customer->id}}">
        <table class="container w-50 text-center table table-bordered">
            <tr>
                <td><label for="name">Tên</label></td>
                <td><input class="text-center " type="text" id="name" name="name" value="{{$customer->name}}"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input class="text-center " type="email" id="email" name="email" value="{{$customer->email}}"></td>
            </tr>
            <tr>
                <td><label for="phone">Điện thoại</label></td>
                <td><input class="text-center " type="text" id="phone" name="phone" value="{{$customer->phone}}"></td>
            </tr>
            <tr>
                <td><label for="phone">Công ty</label></td>
                <td>
                    <select name="company_id" id="">
                        <option value="1">Công ty 1</option>
                        <option value="2">Công ty 2</option>
                        <option value="3">Công ty 3</option>
                    </select>

                </td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-success text-center " type="submit" value="Cập nhật"></td>
            </tr>
        </table>
    </form>















</body>



{{-- Bootstrap --}}
<script src="{{ asset('libs/node_modules/bootstrap/dist/js/bootstrap.js') }}"></script>
{{-- jQuery --}}
<script src="{{ asset('libs/node_modules/jquery/dist/js/jquery.js') }}"></script>

</html>
