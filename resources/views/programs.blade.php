<h2>All Programs</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Program Name</th>
        <th>College</th>
    </tr>
    @foreach($programs as $program)
    <tr>
        <td>{{ $program->id }}</td>
        <td>{{ $program->program_name }}</td>
        <td>{{ $program->college->college_name }}</td>
    </tr>
    @endforeach
</table>