<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="static/table.css">
    <title>Dashboard</title>
</head>
<body>
    <nav class="nav nav-tabs nav-stacked">
        <a class="nav-link active" href="?dashboard=true">Users List</a>
        <a class="nav-link" href="?register=true">Register Form</a>
    </nav>


    <div class="container">
        
    <div class="table-users">
   <div class="header">Users</div>
   <table cellspacing="0">
      <tr>
         <th>Picture</th>
         <th>Name</th>
         <th>Report Subject</th>
         <th>Email</th>
      </tr>

      <tr>
         <td><img src="images/default_user.png" alt="" /></td>
         <td>Vlad Demcenko</td>
         <td>Myself</td>
         <td>jane.doe@foo.com</td>
      </tr>
   </table>



</div>
</div>  


</body>
</html>