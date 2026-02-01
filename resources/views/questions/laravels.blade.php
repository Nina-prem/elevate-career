<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laravel Questions</title>

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif}
body{background:#e0f7ff}
.container{display:flex;min-height:100vh}

/* Sidebar */
.sidebar{
    width:220px;
    background:#0f172a;
    color:#cbd5f5;
    padding:20px;
}
.sidebar h2{color:#38bdf8;margin-bottom:30px}
.sidebar a{
    display:block;
    color:#cbd5f5;
    text-decoration:none;
    margin-bottom:15px;
}
.sidebar a:hover{color:#38bdf8}

/* Content */
.main{
    flex:1;
    padding:30px;
}
.card{
    background:#fff;
    padding:20px;
    border-radius:12px;
    margin-bottom:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.1)
}
.tag{
    background:#38bdf8;
    padding:4px 10px;
    border-radius:20px;
    font-size:12px;
    font-weight:bold;
}
details summary{
    cursor:pointer;
    color:#2563eb;
    margin-top:10px;
}
</style>
</head>

<body>
<div class="container">

    <div class="sidebar">
        <h2>Elevate Careers</h2>

          <a href="{{route('questions.index')}}">📢TechFeed</a>
    <a href="{{route('questions.create')}}">➕Add Question</a>
    <a href="{{route('questions.layOut')}}">📚Courses</a>
    <a href="{{route('questions.interview')}}">>💼Career Advice</a>
    
      
    </div>

    <div class="main">
        <h2>🔥 Laravel Questions</h2>

        <div class="card">
            <span class="tag">Laravel</span>
            <h3>What is Laravel?</h3>
            <details>
                <summary>View Answer</summary>
                <p>Laravel is a PHP framework that follows MVC architecture.</p>
            </details>
        </div>

        <div class="card">
            <span class="tag">Laravel</span>
            <h3>What is Artisan?</h3>
            <details>
                <summary>View Answer</summary>
                <p>Artisan is Laravel’s command-line interface.</p>
            </details>
        </div>
<div class="card">
    <span class="tag">Laravel</span>
    <h3>What is Eloquent ORM?</h3>
    <details>
        <summary>View Answer</summary>
        <p>Eloquent is Laravel’s built-in ORM that allows you to interact with the database using models instead of writing SQL queries.</p>
    </details>
</div>

<div class="card">
    <span class="tag">Laravel</span>
    <h3>What are Laravel middleware?</h3>
    <details>
        <summary>View Answer</summary>
        <p>Middleware are filters that handle HTTP requests before they reach the controller, such as authentication and logging.</p>
    </details>
</div>

    </div>
</div>
</body>
</html>
