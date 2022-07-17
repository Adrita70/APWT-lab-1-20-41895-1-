@extends('layout.main')
@section('content')
<h1> Product Information</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Copy</th>
        </tr>
        @foreach($product as $p)
            <tr>
                <td><a href="{{route('product.details',['id'=>$p->id,'name'=>$p->name])}}">{{$p->name}}</a></td>
                <td>{{$p->id}}</td>
                <td>{{$p->copy}}</td>
            </tr>
        @endforeach
    </table>
@endsection