<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Interview Preparation Guide</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #0a3661;
            line-height: 1.6;
            color: #333;
        }

        .hero {
            background-color: #1e3a5f;
            color: white;
            text-align: center;
            padding: 18px 10px;
        }

        .hero h1 {
            font-size: 26px;
        }

        .hero p {
            font-size: 14px;
            opacity: 0.85;
        }

        .container {
            margin: 20px auto;
            width: 95%;
            max-width: 1400px;
        }

        /* Outer container with colored border */
        .outer-container {
            border: 4px solid #c4504a; /* thick colored border */
            background: #9eb8ec;       /* light contrasting background */
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .columns {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .col {
            flex: 1;
            min-width: 300px;
        }

        .box {
            background: #f8fafc;
            padding: 18px 15px;
            border-radius: 8px;
            border-top: 4px solid #ff2d20;
            margin-bottom: 20px;
        }

        .box h3 {
            text-align: center;
            color: #0b2e5f;
            font-size: 19px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        ul {
            list-style-position: outside;
            list-style-type: disc;
            margin-left: 20px;
        }

        li {
            margin-bottom: 8px;
            font-size: 15px;
            font-weight: 600;
            color: #1a1a1a;
        }

        a {
            text-decoration: none;
            color: #1a1a1a;
        }

        a:hover {
            color: #0b2e5f;
            text-decoration: underline;
        }

        .level {
            background: #ffffff;
            border-left: 4px solid #ff2d20;
            padding: 12px;
            margin-top: 12px;
            border-radius: 6px;
        }

        .level h4 {
            font-size: 16px;
            color: #444;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .footer {
            background: #1e293b;
            color: #e5e7eb;
            text-align: center;
            padding: 5px;
            font-size: 13px;
            margin-top: 15px;
        }

        @media (max-width: 900px) {
            .columns {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

<header class="hero">
    <h1>Laravel Interview Preparation Guide</h1>
    <p>Job Search • HR • Machine Test • Technical</p>
</header>

<section class="container">

    <!-- Highlighted outer container -->
    <div class="outer-container">

        <div class="columns">

            <!-- Column 1: Job Search + HR -->
            <div class="col">

                <div class="box">
                    <h3>Job Search / Vacancy Sources</h3>
                    <ul>
                        <li><a href=" target="_blank">LinkedIn Jobs</a></li>
                        <li><a href="" target="_blank">Indeed</a></li>
                        <li><a href="" target="_blank">Instagram IT & HR Pages</a></li>
                        <li><a href="" target="_blank">Google Search for Companies</a></li>
                        <li><a href="#" target="_blank">Company Official Career Pages</a></li>
                    </ul>
                </div>

                <div class="box">
                    <h3>HR Interview</h3>
                    <ul>
                        <li>Self Introduction</li>
                        <li>Educational Background</li>
                        <li>Project Explanation</li>
                        <li>Company Knowledge</li>
                        <li>Salary Discussion</li>
                    </ul>
                </div>

            </div>

            <!-- Column 2: Machine Test -->
            <div class="col">
                <div class="box">
                    <h3>Machine Test</h3>

                    <div class="level">
                        <h4>Junior Level</h4>
                        <ul>
                            <li>CRUD – Product Inventory System</li>
                            <li>Fields: product_name, product_price, quantity</li>
                            <li>Linked table (Category / Brand)</li>
                            <li>Blade forms & table listing</li>
                            <li>Basic validation</li>
                        </ul>
                    </div>

                    <div class="level">
                        <h4>Senior Level</h4>
                        <ul>
                            <li>Advanced CRUD with UI forms & tables</li>
                            <li>API integration</li>
                            <li>Authentication & authorization</li>
                            <li>Role-based access</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Column 3: Technical -->
            <div class="col">
                <div class="box">
                    <h3>Technical Interview</h3>
                    <ul>
                        <li>What is MVC architecture?</li>
                        <li>Explain Laravel request lifecycle</li>
                        <li>Explain Eloquent relationships</li>
                        <li>Cache vs Cookies (what & how?)</li>
                        <li>What is Git and why used?</li>
                        <li>Difference: include() vs require()</li>
                        <li>GET vs POST methods</li>
                        <li>What is Composer and how is it used?</li>
                        <li>Explain Laravel Blade templating engine</li>
                        <li>What are Events and Listeners?</li>
                        <li>Explain Dependency Injection & Service Container</li>
                        <li>What are Laravel Queues?</li>
                        <li>What are Facades?</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

</section>

<footer class="footer">
    <p>© 2026 Laravel Interview Tips</p>
</footer>

</body>
</html>
