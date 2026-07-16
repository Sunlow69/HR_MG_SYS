<h1>Careers - Job Openings</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Careers - Job Openings</title>
</head>
<body>
    <h1>Careers - Current Job Openings</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @forelse ($jobOpenings as $job)
        <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
            <h3>{{ $job->title }}</h3>
            <p>{{ $job->description }}</p>
            <a href="{{ route('careers.apply', $job->id) }}">Apply Now</a>
        </div>
    @empty
        <p>No open positions right now.</p>
    @endforelse
</body>
</html>