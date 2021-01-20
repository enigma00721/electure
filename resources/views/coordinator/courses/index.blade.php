@foreach ($courses as $course)

<li>{{ $course->name }}</li>
<li>{{ $course->user_id }}</li>
@endforeach
