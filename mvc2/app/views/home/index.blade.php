@extends('client-layout.main')
@section('content')
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Biology</th>
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
                @isset($u['bio'])
                    {!! $u['bio'] !!}
                @endisset
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection