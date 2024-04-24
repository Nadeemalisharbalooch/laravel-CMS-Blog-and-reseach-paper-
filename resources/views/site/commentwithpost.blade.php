<!-- resources/views/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Show Post Comments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Comments for Post</h1>

    <h2>Post Details</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Content</th>
        </tr>
        <tr>
            <td>{{ $post->title }}</td>
            
            <td>{{ $post->created_at }}</td>
            <td>{{ $post->description }}</td>
        </tr>
    </table>

    <h2>Comments</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Comment</th>
            <th>category</th>
        </tr>
        @foreach($post->comments as $comment)
        <tr>
            <td>{{ $comment->name }}</td>
            <td>{{ $comment->email }}</td>
            <td>{{ $comment->comment }}</td>
        </tr>
        
        @endforeach
       
    </table>
</body>
</html>
