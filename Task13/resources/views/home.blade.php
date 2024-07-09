<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Submission Form</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="form-container">
        <form action="{{url('upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h2>Project Submission Form</h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="designation">Designation:</label>
                <input type="text" id="designation" name="designation" required>
            </div>
            <div class="form-group">
                <label for="project">Project:</label>
                <input type="text" id="project" name="project" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

    
</body>
</html>
