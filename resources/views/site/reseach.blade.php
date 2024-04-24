<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Paper Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
        }

        header {
            background-color: #1a1a1a;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        article {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease;
        }

        article:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        p {
            color: #555;
            margin-bottom: 15px;
            font-size: 1em;
        }

        a {
            display: inline-block;
            color: #fff;
            background-color: #007BFF;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
<header class="bg-primary text-white text-center py-5">
        <h1 class="display-4">Welcome to Research Hub</h1>
        <p class="lead">Explore the latest research findings and scholarly articles.</p>
    </header>
    
      <br><br>
    <section>
        <!-- Research Paper Entries -->
        @foreach($Reseach as $Reseaches)
        <article>
            <h2>{{ $Reseaches->title }}</h2>
            <p><strong>Authors:</strong> {{ $Reseaches->author_name }}</p>
            <p><strong>Abstract:</strong> {{ $Reseaches->abstract }}</p>
            <p><strong>Published in:</strong> {{ $Reseaches->publication }}</p>
            <a href="{{ asset('/storage/auth/posts/pdf/'.$Reseaches->Pdf_file) }}" target="_blank">Read More</a>
            <a href="{{ $Reseaches->publication_link }}" target="_blank">Link to Publication</a>
        </article>
        @endforeach
    </section>

</body>
</html>


