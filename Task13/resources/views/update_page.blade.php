<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    
</head>
<body>
    
    <h3>Update Page</h3> 


    <form action="{{url('update',$employes->id)}}" method="post" nctype="multipart/form-data" >
        
        @csrf

        <div>
            <label>Student</label>
            <input type="text" name="name" value="{{$employes->name}}">
        </div><br><br>

        <div>
            <label>Email</label>
            <input type="text" name="email" value="{{$employes->email}}">
        </div><br><br>

        <div>
            <label>Phone</label>
            <input type="text" name="phone" value="{{$employes->phone}}">
        </div><br><br>

        <div>
            <label>Designation</label>
            <input type="text" name="designation" value="{{$employes->designation}}">
        </div><br><br>

        <div>
            <label>Project</label>
            <input type="text" name="project" value="{{$employes->project}}">
        </div><br><br>

        <div>
            <input type="submit" value="Update"> 
        </div>
    </form>

</body>
</html>