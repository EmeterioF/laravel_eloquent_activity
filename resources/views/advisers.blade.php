<h2>All Advisers</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
    </tr>
    @foreach($advisers as $adviser)
    <tr>
        <td>{{ $adviser->id }}</td>
        <td>{{ $adviser->first_name }}</td>
        <td>{{ $adviser->last_name }}</td>
    </tr>
    @endforeach
</table>