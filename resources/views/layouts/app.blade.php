<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio CRUD Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            background-color: #FFFFFF;
            border-radius: 10px;
            padding: 15px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-weight: 700;
        }
        h2 {
            font-weight: 700;
        }
        h3 {
            font-weight: 700;
        }
        h4 {
            font-weight: 700;
        }
        h5 {
            font-weight: 700;
        }
        body {
            background-color: #FDFDFF;
        }
        label {
            font-weight: 600;   
        }
        p {
            color: #868688;
            font-weight: 500;
        }
        a {
            color: #FFFFFF;
            font-weight: 500;
        }
        .bold-button {
            font-weight: bold;
        }
        .light-button {
            font-weight: 300;
        }
        .normal-button {
            font-weight: normal;
        }
        .custom-button {
            height: 50px;
            line-height: 35px;
            background-color: #000000;
            color: "FFFFFF";
            font-weight: 500;
            font-size: 15px;
        }
        .custom-button:hover {
            background-color: #333333 
        }
        .custom-input { 
            padding: 12px 15px; 
            border: 1px solid rgba(0, 0, 0, 0.1); 
            background-color: #f8f9fa; 
        }
        .custom-input:focus {
            background-color: #ffffff; 
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.15); 
            outline: none; 
        }
        .custom-button-edit {
            font-weight: 500;
        }
        .custom-button-delete {
            font-weight: 500;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #FFFFFF;
            padding-top: 40px;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar a {
            color: #868688;
            font-weight: 650;
            text-decoration: none;
            display: block;
            padding: 10px 35px;
        }
        .sidebar a:hover {
            color: #000000;
        }
        .main-content {
            margin-top: 21.5px;
            margin-left: 220px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <h4 class="text-black text-center mb-4">Portfolio</h4>
                <nav>
                    <a href="{{ route('about-me.index') }}">About Me</a>
                    <a href="{{ route('projects.index') }}">Projects</a>
                    <a href="{{ route('skills.index') }}">Skills</a>
                    <a href="{{ route('contact.index') }}">Contact</a>
                </nav>
            </div>
            <div class="col-md-10 main-content">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>