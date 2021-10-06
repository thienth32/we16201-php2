@extends('client-layout.main')
@section('content')
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Avatar</th>
    </thead>
    <tbody>
        @foreach($users as $u)
        <tr>
            <td>{{$u['id']}}</td>
            <td>{{$u['name']}}</td>
            <td>
                @if($u['gender'] == 1)
                Male
                @else
                Female
                @endif
            </td>
            <td>{{$u['age']}}</td>
            <td>
                @if(!empty($u['avatar']))
                <img src="{{PUBLIC_PATH . $u['avatar']}}" width="70">
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection