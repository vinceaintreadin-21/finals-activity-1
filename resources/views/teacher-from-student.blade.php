@if ($teacher)
    <h1>Teacher: {{ $teacher->name }}</h1>

    <h3>Students of {{ $teacher->name }}:</h3>
    @if ($studentsOfTeacher->isNotEmpty())
        <ul>
            @foreach ($studentsOfTeacher as $student)
                <li>{{ $student->name }} (ID: {{ $student->id }})</li> {{-- Add ID for debugging --}}
            @endforeach
        </ul>
    @else
        <p>No students assigned to this teacher.</p>
    @endif
@else
    <p>No teacher found for this student.</p>
@endif
