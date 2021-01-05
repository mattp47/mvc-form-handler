<!-- The view (presentation) is responsible for the displaying the markup -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add people</title>
    </head>
    <body>
		 <form method="POST" action="">
		    <table>
		        <tr>
		            <th>First name</th>
		            <th>Last name</th>
		        </tr>
		        <tr>
		            <td><input type="text" name="people[][firstname]" value="Jeff" /></td>
		            <td><input type="text" name="people[][surname]" value="Stelling" /></td>
		        </tr>
		        <tr>
		            <td><input type="text" name="people[][firstname]" value="Chris" /></td>
		            <td><input type="text" name="people[][surname]" value="Kamara" /></td>
		        </tr>
		        <tr>
		            <td><input type="text" name="people[][firstname]" value="Alex" /></td>
		            <td><input type="text" name="people[][surname]" value="Hammond" /></td>
		        </tr>
		        <tr>
		            <td><input type="text" name="people[][firstname]" value="Jim" /></td>
		            <td><input type="text" name="people[][surname]" value="White" /></td>
		        </tr>
		        <tr>
		            <td><input type="text" name="people[][firstname]" value="Natalie" /></td>
		            <td><input type="text" name="people[][surname]" value="Sawyer" /></td>
		        </tr>
		    </table>
		    <input type="submit" value="OK" />
		</form>  
    </body>
</html>
