<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Questions</title>

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
        <h2>🐘 PHP Questions</h2>

        <div class="card">
            <span class="tag">PHP</span>
            <h3>What is PHP?</h3>
            <details>
                <summary>View Answer</summary>
                <p>PHP is a server-side scripting language used to create dynamic web pages.</p>
            </details>
        </div>

        <div class="card">
            <span class="tag">PHP</span>
            <h3>Difference between echo and print?</h3>
            <details>
                <summary>View Answer</summary>
                <p>echo has no return value and is faster; print returns 1.</p>
            </details>
        </div>
<div class="card">
    <span class="tag">PHP</span>
    <h3>What is the difference between GET and POST?</h3>
    <details>
        <summary>View Answer</summary>
        <p>GET sends data through the URL and is less secure, while POST sends data in the request body and is more secure.</p>
    </details>
</div>

<div class="card">
    <span class="tag">PHP</span>
    <h3>What are PHP sessions?</h3>
    <details>
        <summary>View Answer</summary>
        <p>Sessions are used to store user data on the server across multiple pages using a unique session ID.</p>
    </details>
</div>

    </div>
</div>
</body>
</html>
