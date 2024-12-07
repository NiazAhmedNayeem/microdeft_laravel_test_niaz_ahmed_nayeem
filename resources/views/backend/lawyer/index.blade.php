<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyers Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .create-button {
            text-align: right;
            margin-bottom: 20px;
        }
        .create-button a {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .create-button a:hover {
            opacity: 0.8;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #f4f4f4;
        }
        img {
            max-width: 100px;
            border-radius: 4px;
        }
        .actions a, .actions button {
            margin-right: 5px;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
        }
        .actions a {
            background-color: #4caf50;
            color: white;
        }
        .actions button {
            background-color: #f44336;
            color: white;
        }
        .actions button:hover, .actions a:hover {
            opacity: 0.8;
        }
        form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manage Blogs</h1>
        <div class="create-button">
            <a href="{{ route('backend.lawyer-create') }}">Create New Lawyer</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Experience</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lawyers as $lawyer)
                <tr>
                    <td>{{ $lawyer->lawDepartment?->name }}</td>
                    <td>{{ $lawyer->name }}</td>
                    <td>{{ $lawyer->phone }}</td>
                    <td>{{ $lawyer->address }}</td>
                    <td>{{ $lawyer->years_of_experience }}</td>
                    <td class="actions">
                        <a href="{{ route('backend.lawyer-edit', $lawyer->id) }}" class="edit-btn">Edit</a>
                        <form action="{{ route('backend.lawyer-delete', $lawyer->id) }}" method="post">
                            @csrf
                            <button class="delete-btn" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</body>
</html>



