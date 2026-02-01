<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Question - Career Launcher</title>

<style>
* {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Inter', sans-serif;
}

/* Body */
body {
    background: #e0f7ff;
    color: #1f2937;
    min-height: 100vh;
}

/* Navbar */
nav {
    width: 100%;
    background: #0f172a;
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #cbd5f5;
}
nav .logo {
    font-size: 1.8rem;
    font-weight: 600;
    color: #38bdf8;
}
nav .menu a {
    color: #cbd5f5;
    text-decoration: none;
    margin-left: 20px;
    font-weight: 500;
    transition: 0.3s;
}
nav .menu a:hover {
    color: #38bdf8;
}

/* Form Container */
.container {
    max-width: 600px;
    margin: 50px auto;
    background: #ffffff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(15,23,42,0.1);
}

/* Form Elements */
h2 {
    color: #0f172a;
    margin-bottom: 20px;
}
label {
    display:block;
    margin-bottom: 6px;
    font-weight:500;
}
input[type="text"],
textarea,
select {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 5px;
    border-radius: 8px;
    border: 1px solid #cbd5f5;
    font-size: 14px;
}
small {
    color: red;
    display: block;
    margin-bottom: 15px;
}
button {
    background: #38bdf8;
    color: #0f172a;
    padding: 10px 20px;
    border: none;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s;
}
button:hover {
    background: #0ea5e9;
    color: #fff;
}

/* Error box */
.error-box {
    background:#fee2e2;
    border:1px solid #fca5a5;
    color:#991b1b;
    padding:15px;
    border-radius:8px;
    margin-bottom:20px;
}
</style>
</head>
<body>

<!-- Navbar -->
<nav>
    <div class="logo">Elevate Careers</div>
    <div class="menu">
        <a href="{{ route('questions.index') }}">Tech Feed</a>
        <a href="{{ route('questions.create') }}">Add Question</a>
        <a href="{{ route('questions.layOut') }}">Courses</a>
        <a href="{{ route('questions.interview') }}">Career Advice</a>
    </div>
</nav>

<!-- Form Container -->
<div class="container">

    <h2>➕ Add Question</h2>

    {{-- Global Errors --}}
    @if ($errors->any())
        <div class="error-box">
            <ul style="margin-left:20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('questions.store') }}" method="POST">
        @csrf

        <!-- Title -->
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <!-- Answer -->
        <div>
            <label>Answer</label>
            <textarea name="answer" rows="5">{{ old('answer') }}</textarea>
            @error('answer')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <!-- Category -->
        <div>
            <label>Category</label>
            <select name="category">
                <option value="">Select category</option>
                <option value="html" {{ old('category')=='html' ? 'selected' : '' }}>HTML</option>
                <option value="java" {{ old('category')=='java' ? 'selected' : '' }}>Java</option>
                <option value="laravel" {{ old('category')=='laravel' ? 'selected' : '' }}>Laravel</option>
                <option value="php" {{ old('category')=='php' ? 'selected' : '' }}>PHP</option>
            </select>
            @error('category')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <button type="submit">Save Question</button>
    </form>
</div>

</body>
</html>
