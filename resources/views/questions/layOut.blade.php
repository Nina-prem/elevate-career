<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Career Launcher</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

/* BODY */
body {
    background: #000;
    color: #fff;
    min-height: 100vh;
    position: relative;
    overflow-x: hidden;
}

/* NAVBAR */
nav {
    width: 100%;
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index: 2;
}

nav .logo {
    font-size: 2.4rem;
    font-weight: 400;
    color: #fad311;
}

nav .menu a {
    margin-left: 25px;
    color: #d53877;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
}

nav .menu a:hover {
    color: #fad311;
}

/* BIG ZIGZAG LINES */
body::before,
body::after {
    content: "";
    position: absolute;
    width: 120%;
    height: 120px;
    background: linear-gradient(
        135deg,
        transparent 25%,
        #d4af37 25%,
        #d4af37 50%,
        transparent 50%,
        transparent 75%,
        #d4af37 75%
    );
    background-size: 120px 120px;
    opacity: 0.85;
    z-index: 0;
}

body::before {
    top: 140px;
    left: -10%;
}

body::after {
    bottom: 150px;
    left: -10%;
}

.zigzag-middle {
    position: absolute;
    top: 80%;
    left: -10%;
    width: 120%;
    height: 120px;
    background: linear-gradient(
        135deg,
        transparent 25%,
        #d4af37 25%,
        #d4af37 50%,
        transparent 50%,
        transparent 75%,
        #d4af37 75%
    );
    background-size: 120px 120px;
    opacity: 0.7;
    z-index: 0;
}

/* CONTENT */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    position: relative;
    z-index: 2;
}

/* HEADER */
header {
    text-align: center;
    margin-bottom: 30px;
  
}

header h1 {
    color: #d53877;
   
}

header p {
    color: #8cc1de;
}

.courses {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
}

.course-card {
    background: #e48cb5;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(212,175,55,0.2);
    transition: 0.3s;
}

.course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(212,175,55,0.4);
}

.course-card h3 {
    color: #3c0a46;
    margin-bottom: 10px;
}

.course-card.java p {
    color: #6e2c80;
}

.course-card p {
    color: #6e2c80;
}
.courseDropdown{
    color:#6e2c80;
    background-color: #d53877;
}

footer {
    text-align: center;
    padding: 15px;
    margin-top: 200px;
    background: #111;
    color: #d4af37;
    position: relative;
    z-index: 2;
}
</style>
</head>

<body>

<script>
function goToCourse() {
    const dropdown = document.getElementById("courseDropdown");
    const url = dropdown.value;
    if(url) {
        window.location.href = url;
    }
}
</script>

<nav>
  
    <div class="logo">Elevate Careers</div>
    <div class="menu">
        <a href="{{route('questions.index')}}">📢TechFeed</a>
        <a href="{{route('questions.create')}}">➕Add Question</a>
          <a href="{{route('questions.interview')}}">💼Career Advice</a>

        
        <select id="courseDropdown" onchange="goToCourse()" style="color:#6e2c80; border-radius:5px; font-weight:500;">
            <option value="">📚 Courses</option>
            <option value="{{ route('questions.html') }}">HTML</option>
            <option value="{{ route('questions.java') }}">Java</option>
            <option value="{{ route('questions.laravels') }}">Laravel</option>
            <option value="{{ route('questions.php') }}">PHP</option>
            <option value="{{ route('questions.interview') }}">Interview Tips</option>
        </select>

      
    </div>
</nav>



<div class="zigzag-middle"></div>

<div class="container">
    <header>
         <h1>  Learn, Practice ,Launch your career</h1> 
       
    </header>
   
</section>

    <section class="courses">
        <div class="course-card">
      <h3>  <a href="{{ route('questions.html') }}">HTML</a></h3>
    
            <p>Learn HTML from basics to advanced concepts.</p>
        </div>

        <div class="course-card java">
    <h3><a href="{{ route('questions.java') }}">JAVA</a></h3>
    <p>Master Core Java & OOP programming concepts.</p>
</div>

        <div class="course-card">
           <h3>  <a href="{{route('questions.laravels')}}">LARAVEL</a> </h3>
            <p>Learn MVC, Blade templates & Eloquent ORM.</p>
        </div>
        <div class="course-card">
            <h3><a href="{{route('questions.php')}}">PHP</a></h3>
            <p>Build dynamic web applications with PHP.</p>
        </div> 
        <div class="course-card">
            <h3><a href="{{route('questions.interview')}}">Interview Tips</a></h3>
            <p>Prepare for technical interviews & coding tests.</p>
        </div>
    </section>
</div>

<footer>
  <b>  © 2026 Career Launcher</b>
</footer>

</body>
</html>
