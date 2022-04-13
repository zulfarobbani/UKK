<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <button id="print" class="btn">print</button>
    <h1>Hotel Hebat</h1>
    <h1>Invoice</h1>
    <table>
        @foreach($pesan as $item)
        <tr>
            <td><h4>ref : {{ $item->ref_pesan }}</h4></td>
            <tr>
                <td><h4>nama : {{ $item->nama_pemesan }}</h4></td>
            </tr><tr>
                <td><h4>email : {{ $item->email }}</h4></td>
            </tr>
            <tr>
                <td><h4>no hp : {{ $item->no_hp }}</h4></td>
            </tr>
            <tr>
                <td><h4>tipe kamar : {{ $item->nama_kamar }}</h4></td>
            </tr><tr>
                <td><h4>checkin : {{ $item->checkIn }}</h4></td>
            </tr>
            <tr>
                <td><h4>checkout : {{ $item->checkOut }}</h4></td>
            </tr>
            <tr>
                <td><h4>jumlah kamar : {{ $item->jmlh_kamar }}</h4></td>
            </tr>
            <tr>
                <td><h4>total harga : {{ $item->total }}</h4></td>
            </tr>
        </tr>
        @endforeach
    </table>
    
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
       
            $('document').ready(function() {
                // console.log('adwaduawid');
                // $('#print')
                document.getElementById("print").style.display = "none";
                window.print();
            })
        
    </script>
</body>

</html>