<?php include("head.php");?>
<body>
    <form action="Add-contact.php" method="POST">
        <table class="table">
            <tr>
                <td>name</td>
                <td><input type="text" class="form-control" name="name"></td>
            </tr>
            <tr>
                <td>telephone</td>
                <td><input type="text" class="form-control" name="telephone"></td>
            </tr>    
            <tr>
                <td>email</td>
                <td><input type="email" class="form-control" name="email"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" class="btn btn-primary" value="Salvar">        
                </td>
            </tr>
            
        </table>
        
    </form>
        
        
</body>            
</html>