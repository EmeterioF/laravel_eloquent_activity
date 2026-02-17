<h2>All Colleges</h2>
<table border="1" >
    <tr>
        <th>ID</th>
        <th>College Name</th>
    </tr>
    @foreach($colleges as $college)
    <tr>
        <td>{{ $college->id }}</td>
        <td>{{ $college->college_name }}</td>
    </tr>
    @endforeach
</table>