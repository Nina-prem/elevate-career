<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Java Questions - Tech Feed</title>
<style>
/* BODY */
body {
    font-family: 'Arial', sans-serif;
    background-color: #e0f7ff; /* light blue background */
    margin: 0;
    padding: 0;
    color: #1f2937;
    display: flex;
}

/* SIDEBAR */
.sidebar {
    width: 220px;
    background-color: #000; /* black sidebar */
    min-height: 100vh;
    padding: 20px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
}

.sidebar h1 {
    font-size: 1.5rem;
    color: #38bdf8;
    margin-bottom: 30px;
}

.sidebar a {
    /* color: #fff; */
    color:#cbd5f5;
    text-decoration: none;
    margin-bottom: 15px;
    font-weight: bold;
    transition: 0.3s;
}

.sidebar a:hover {
    color: #38bdf8;
}

/* MAIN CONTENT */
.main-content {
    flex: 1;
    padding: 30px;
}

/* FEED CARD */
.feed-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

/* CATEGORY TAG */
.category-tag {
    background: #2563eb;
    color: #fff;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}

/* DETAILS */
details summary {
    cursor: pointer;
    color: #1d4ed8;
    font-weight: 500;
    margin-top: 10px;
}

details p {
    margin-top: 10px;
    line-height: 1.6;
    color: #334155;
}
</style>
</head>
<body>

<!-- SIDE NAVBAR -->
<div class="sidebar">
    <h1>Elevate Careers</h1>
    <a href="{{route('questions.index')}}">📢TechFeed</a>
    <a href="{{route('questions.create')}}">➕Add Question</a>
    <a href="{{route('questions.layOut')}}">📚Courses</a>
    <a href="{{route('questions.interview')}}">>💼Career Advice</a>
    
</div>

<!-- MAIN CONTENT -->
<div class="main-content">
    <h2>Java Questions</h2>

    <!-- Question 1 -->
    <div class="feed-card">
        <span class="category-tag">Java</span>
        <h3>What is the difference between JDK and JVM?</h3>
        <details>
            <summary>View Answer</summary>
            <p>JVM runs Java bytecode, while JDK is a development kit containing JVM, compiler, and tools to create Java programs.</p>
        </details>
    </div>

    <!-- Question 2 -->
    <div class="feed-card">
        <span class="category-tag">Java</span>
        <h3>What are the main principles of OOP?</h3>
        <details>
            <summary>View Answer</summary>
            <p>The main principles are Encapsulation, Inheritance, Polymorphism, and Abstraction.</p>
        </details>
    </div>

    <!-- Question 3 -->
    <div class="feed-card">
        <span class="category-tag">Java</span>
        <h3>What is the difference between an abstract class and interface?</h3>
        <details>
            <summary>View Answer</summary>
            <p>An abstract class can have implemented methods and state, while an interface can only have abstract methods (Java 8+ allows default methods).</p>
        </details>
    </div>

    <!-- Question 4 -->
    <div class="feed-card">
        <span class="category-tag">Java</span>
        <h3>What is a constructor in Java?</h3>
        <details>
            <summary>View Answer</summary>
            <p>A constructor is a special method used to initialize objects of a class. It has the same name as the class and no return type.</p>
        </details>
    </div>

   

</div>

</body>
</html>
