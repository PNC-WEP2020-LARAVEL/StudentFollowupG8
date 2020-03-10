<a href="{{route('student.create')}}">Add</a>
<table>
    <tr>
        <th>ID</th>
        <th>FullName</th>
        <th>Gender</th>
        <th>Class</th>
        <th>Year</th>
        <th>Student-ID</th>
        <th>Province</th>
        <th>Status</th>
        <th>Picture</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->firstName." ".$student->lastName}}</td>
        <td>{{$student->gender}}</td>
        <td>{{$student->class}}</td>
        <td>{{$student->year}}</td>
        <td>{{$student->student_id}}</td>
        <td>{{$student->province}}</td>
        <td>{{$student->status}}</td>
        <td>{{$student->picture}}</td>
        <td>
            <a href="#">Edit</a>
            <a href="#">Delete</a>
        </td>
    </tr>
    @endforeach
</table>