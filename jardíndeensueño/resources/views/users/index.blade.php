@extends('layouts.admin-master')

@section('content')

    <div class="row">
        <div class="col-lg-9">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                    <tr>
                        <th class="text-right">baslangic</th>
                        <th class="text-right">anayemek</th>
                        <th class="text-right">tatli</th>
                        <th class="text-right">Delete</th>
                        <th class="text-right">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($menu as $m)
                        <tr>

                            <td>{{$m->baslangic}}</td>
                            <td class="text-right">{{$m->anayemek}}</td>
                            <td class="text-right">{{$m->tatli}}</td>
                            <td class="text-right"><a href="/sil/{{$m->id}}">SİL</a></td>
                            <td class="text-right"><a href="/guncelle/{{$m->id}}">GÜNCELLE</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
