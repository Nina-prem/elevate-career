{{-- resources/views/questions/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tech Feed - Career Launcher</title>
<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:'Inter', sans-serif; }
body { background:#e0f7ff; color:#1f2937; min-height:100vh; }


.container { display:flex; min-height:100vh; }

.sidebar { width:220px; background:#0f172a; color:#cbd5f5; padding:20px; display:flex; flex-direction:column; }
.sidebar h2 { color:#38bdf8; margin-bottom:30px; }
.sidebar a { display:block; color:#cbd5f5; text-decoration:none; margin-bottom:15px; font-weight:500; transition:0.3s; }
.sidebar a:hover { color:#38bdf8; }


.main-content { flex:1; padding:30px; }

.feed-card { background:#ffffff; border-radius:14px; padding:20px; margin-bottom:20px; box-shadow:0 10px 25px rgba(15,23,42,0.1); }
.category-tag { background:#38bdf8; color:#0f172a; padding:4px 12px; border-radius:20px; font-size:12px; font-weight:600; text-transform:uppercase; }
details summary { cursor:pointer; color:#2563eb; font-weight:500; margin-top:10px; }
details p { margin-top:10px; color:#334155; line-height:1.6; }

.actions { margin-top:15px; }
.actions a, .actions button { margin-right:15px; text-decoration:none; font-weight:500; cursor:pointer; }
.actions a { color:#2563eb; }
.actions button { background:none; border:none; color:#ef4444; }
</style>
</head>
<body>
<form action="{{route('questions.html')}}" method="post">
    @csrf
<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Elevate Careers</h2>
        <a href="{{ route('questions.index') }}">📢 Tech Feed</a>
        <a href="{{ route('questions.create') }}">➕ Add Question</a>
        <a href="{{route('questions.layOut')}}">📚 Courses</a>
        <a href="{{route('questions.interview')}}">💼 Career Advice</a>
    </aside>

    <!-- Main content -->
    <main class="main-content">
        <h2 style="margin-bottom:20px; color:#0f172a;">🚀 Tech Feed</h2>

        {{-- Sample HTML5 Questions and Answers --}}
        <div class="feed-card">
            <span class="category-tag">HTML</span>
            <h3>1. What is semantic HTML?</h3>
            <details>
                <summary>View Answer</summary>
                <p>Semantic HTML uses meaningful tags like &lt;header&gt;, &lt;article&gt;, &lt;footer&gt; to describe content purpose, improving accessibility and SEO.</p>
            </details>
        </div>

        <div class="feed-card">
            <span class="category-tag">HTML</span>
            <h3>2. Difference between &lt;div&gt; and &lt;section&gt;?</h3>
            <details>
                <summary>View Answer</summary>
                <p>&lt;div&gt; is a generic container; &lt;section&gt; represents a standalone section of content with thematic grouping.</p>
            </details>
        </div>

        <div class="feed-card">
            <span class="category-tag">HTML</span>
            <h3>3. What are data attributes in HTML5?</h3>
            <details>
                <summary>View Answer</summary>
                <p>Data attributes like <code>data-user="123"</code> allow storing custom data on HTML elements, which can be accessed via JavaScript.</p>
            </details>
        </div>

        <div class="feed-card">
            <span class="category-tag">HTML</span>
            <h3>4. Difference between &lt;strong&gt; and &lt;b&gt;?</h3>
            <details>
                <summary>View Answer</summary>
                <p>&lt;strong&gt; indicates important text (semantic), &lt;b&gt; just makes text bold (visual).</p>
            </details>
        </div>

        <div class="feed-card">
            <span class="category-tag">HTML</span>
            <h3>5. What is the purpose of the &lt;canvas&gt; element?</h3>
            <details>
                <summary>View Answer</summary>
                <p>The &lt;canvas&gt; element provides a drawable region in HTML5 for rendering graphics via JavaScript.</p>
            </details>
        </div>

    </main>
</div>

</body>
</html>
