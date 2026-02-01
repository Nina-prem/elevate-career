{{-- resources/views/questions/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tech Feed - Career Launcher</title>
<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:'Inter',sans-serif; }
body { background:#e0f7ff; color:#1f2937; min-height:100vh; }
.container { display:flex; min-height:100vh; }

/* SIDEBAR */
.sidebar { width:220px; background:#0f172a; color:#cbd5f5; padding:20px; display:flex; flex-direction:column; }
.sidebar h2 { color:#38bdf8; margin-bottom:30px; }
.sidebar a { display:block; color:#cbd5f5; text-decoration:none; margin-bottom:15px; font-weight:500; transition:0.3s; }
.sidebar a:hover { color:#38bdf8; }

/* MAIN CONTENT */
.main-content { flex:1; padding:30px; }

/* FEED CARD */
.feed-card { background:#ffffff; border-radius:14px; padding:20px; margin-bottom:20px; box-shadow:0 10px 25px rgba(15,23,42,0.1); }
.category-tag { background:#38bdf8; color:#0f172a; padding:4px 12px; border-radius:20px; font-size:12px; font-weight:600; text-transform:uppercase; }
details summary { cursor:pointer; color:#2563eb; font-weight:500; margin-top:10px; }
details p { margin-top:10px; color:#334155; line-height:1.6; }

/* ADMIN ACTIONS */
.actions { margin-top:15px; }
.actions a, .actions button { margin-right:15px; text-decoration:none; font-weight:500; cursor:pointer; }
.actions a { color:#2563eb; }
.actions button { background:none; border:none; color:#ef4444; }
</style>
</head>
<body>
<div class="container">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <h2>Elevate Careers</h2>
        <a href="{{ route('questions.index') }}">📢 Tech Feed</a>
        <a href="{{ route('questions.create') }}">➕ Add Question</a>
        <a href="{{route('questions.layOut')}}">📚 Courses</a>
        <a href="#">💼 Career Advice</a>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <h2 style="margin-bottom:20px; color:#0f172a;">🚀 Tech Feed</h2>

        {{-- Loop through questions if database has data --}}
        @if(isset($questions) && $questions->count() > 0)
            @foreach($questions as $q)
            <div class="feed-card">
                <span class="category-tag">{{ ucfirst($q->category) }}</span>
                <h3 style="margin-top:12px;">{{ $q->title }}</h3>
                <details>
                    <summary>View Answer</summary>
                    <p>{{ $q->answer }}</p>
                </details>
                <div class="actions">
                    <a href="{{ route('questions.edit', $q->id) }}">✏️ Edit</a>
                    <form action="{{ route('questions.destroy', $q->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')">🗑 Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        @else
        {{-- Sample Feed Cards --}}
        <div class="feed-card">
            <span class="category-tag">HTML</span>
            <h3 style="margin-top:12px;">What is semantic HTML?</h3>
            <details>
                <summary>View Answer</summary>
                <p>Semantic HTML means using tags that clearly describe their meaning, like &lt;header&gt;, &lt;article&gt;, &lt;footer&gt;.</p>
            </details>
            <div class="actions">
                <a href="#">✏️ Edit</a>
                <button onclick="alert('Deleted!')">🗑 Delete</button>
            </div>
        </div>

     


        <p style="margin-top:20px;">No database questions yet. <a href="{{ route('questions.create') }}">Add one!</a></p>
        @endif

    </main>
</div>
</body>
</html>
