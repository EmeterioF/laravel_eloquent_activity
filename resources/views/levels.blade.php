<h2>All Levels</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Level Name</th>
    </tr>
    @foreach($levels as $level)
    <tr>
        <td>{{ $level->id }}</td>
        <td>{{ $level->level_name }}</td>
    </tr>
    @endforeach
</table>