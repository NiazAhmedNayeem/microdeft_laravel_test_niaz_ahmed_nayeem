<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 20px 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .create-button {
            text-align: right;
            margin-bottom: 20px;
        }
        .create-button a {
            background-color: #0a68ea;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .create-button a:hover {
            opacity: 0.8;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        form input[type="text"],
        form input[type="file"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        form input[type="file"] {
            padding: 5px;
        }
        form textarea {
            resize: vertical;
            height: 100px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create Blog</h1>
        <div class="create-button">
            <a href="{{ route('backend.manage-lawyers') }}">Back to List</a>
        </div>
        <form action="{{ route('backend.lawyer-store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input type="text" id="title" name="name" placeholder="Enter name" required>
            <label for="title">Title</label>
            <input type="text" id="title" name="phone" placeholder="Enter phone" required>
            <label for="title">Title</label>
            <input type="text" id="title" name="address" placeholder="Enter address" required>
            <label for="title">Title</label>
            <input type="text" id="title" name="years_of_experience" placeholder="years_of_experience" required>


           
            <button type="submit">Create Blog</button>
        </form>
    </div>
</body>
</html>
