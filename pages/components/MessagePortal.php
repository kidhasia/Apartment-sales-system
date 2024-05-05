<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
   
</head>
<body>
    <h1>Update Record</h1>
    
    <form action="../../config/Delete-controller.php" method="post"> 
        
        <input type="hidden" name="id" value="12" > 
        
        
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Resolved">Resolved</option>
        </select>
        
     
        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes" rows="4" cols="50"></textarea>
        
        
        <button type="submit">Update Record</button>
    </form>

  
</body>
</html>
