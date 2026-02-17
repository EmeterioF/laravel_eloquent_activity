<h2>All Students</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Student Number</th>
        <th>Name</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->student_number }}</td>
        <td>{{ $student->first_name }} {{ $student->last_name }}</td>
    </tr>
    @endforeach
</table>