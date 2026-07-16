<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apply - {{ $job->title }}</title>
</head>
<body>
    <h1>Apply for: {{ $job->title }}</h1>

    <p><a href="{{ route('careers.index') }}">Back to Job Openings</a></p>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('careers.apply.store', $job->id) }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="phone">Phone (optional)</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}">
        </div>

        <div>
            <label for="cv">Upload CV (PDF/DOC/DOCX, max 5MB)</label>
            <input type="file" name="cv" id="cv" required>
        </div>

        <button type="submit">Submit Application</button>
    </form>
</body>
</html>