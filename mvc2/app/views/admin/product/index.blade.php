
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->cate_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>