@extends('admin.layouts.master')

@section('content')
<style>
    .onhold {
        background-color: #FE5C5C;
    }

    .onhold td, .onhold a {
        color: #fff !important;
    }

    .onhold td {
        font-size: 16px;
    }
</style>
    @if(Auth::user()->role_id == 1)
        <div class="row">
            <div class="col-md-4" style="margin: 50px">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate('Make me into an QrCode!')) !!} ">

                    <br><br>
                QR CODE <br>
                {{-- Ovde bih ja prebacio da kada se udje na nekog usera ima mogucnost generisi QR CODE i onda da se prosledi njegov url npr:  https://kado.rs/pera-peric-2312321312321  --}}
                <img src="data:image/png;base64,{{ base64_encode(SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)->format('png')->merge(public_path('images/qrlogo.png'),.3, true)->generate(Request::url('https://stackoverflow.com')) ) }}">
            </div>
            <div class="wrapper col-md-8">
                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-sm-12">
                                {{-- @if(Session::has('successWorkingTime'))
                                    <div class="alert alert-success">
                                        {{Session::get('successWorkingTime')}}
                                    </div>
                                @endif --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="advanced_table" class="table" style="margin: 50px">
                                    <thead>
                                        <tr>
                                            <th class="nosort">#</th>
                                            <th>Ime</th>
                                            <th>Prezime</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Clan od</th>
                                            <th>Detaljnije</th>
                                            <th>Obriši</th>
                                            <th>Blokiraj</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}} </td>
                                                <td>{{$user->first_name}} </td>
                                                <td>{{$user->last_name}} </td>
                                                <td>{{$user->username}} </td>
                                                <td>{{$user->email}} </td>
                                                <td>{{$user->created_at}} </td>
                                                <td>OKO</td>
                                                <td>PISMO</td>
                                                <td>KORPA</td>
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
    @endif
@endsection
