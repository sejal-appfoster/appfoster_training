<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
    <link rel="stylesheet" href="display.css">
</head>
<body>
    <div class="table-container">
        <h2>Information of Employee</h2>

        <form align="center"  action="{{url('search')}}" method="get">
      
        <input type="search" name="search"> 
        <input type="submit" value="Search">
            </form>
            <br><br>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Designation</th>
                    <th>Project</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            @foreach($data as $employes)
            <tr>
                <td>{{$employes->name}}</td>
                <td>{{$employes->email}}</td>
                <td>{{$employes->phone}}</td>
                <td>{{$employes->designation}}</td>
                <td>{{$employes->project}}</td>
                
                <td><a href="{{url('delete',$employes->id)}}">Delete</a></td>

                <td><a href="{{url('update_view',$employes->id)}}">Update</a></td>
            </tr> 
            @endforeach   
            
        
        </table>
    </div>
</body>
</html>
