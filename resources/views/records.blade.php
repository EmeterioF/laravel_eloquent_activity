<h2>Full Student Records</h2>
<table border="1">
    <tr>
        <th>Student Number</th>
        <th>Name</th>
        <th>Program</th>
        <th>College</th>
        <th>Level</th>
        <th>Adviser</th>
    </tr>

    @foreach($students as $student)
    <tr>
        <td>{{ $student->student_number }}</td>
        <td>{{ $student->first_name }} {{ $student->last_name }}</td>
        <td>{{ $student->record->program->program_name }}</td>
        <td>{{ $student->record->college->college_name }}</td>
        <td>{{ $student->record->level->level_name }}</td>
        <td>{{ $student->record->adviser->first_name }} {{ $student->record->adviser->last_name }}</td>
    </tr>
    @endforeach
</table>