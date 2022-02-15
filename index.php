<?php 
# ainda vou melhorar
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5" style="width: 600px;">
        <h1 class="text-center">Conversor de Moedas</h1>
        <div class="row">
            <form class="row g-3" method="post">
                <div class="col bg-success p-2 text-dark bg-opacity-50 border">
                    <label>Moeda 1: </label>
                    <input name="from" class="form-control">  
                </div>
                <div class="col bg-success p-2 text-dark bg-opacity-50 border">
                    <label>Moeda 2: </label>
                    <input name="to" class="form-control">             
                </div>
                <div class="col bg-success p-2 text-dark bg-opacity-50 border">   
                    <label>quantia</label>
                    <input name="quantia" class="form-control">
                </div>
                
                <input type="submit" name="submit" class="btn btn-success" value="converter">
            </form>
        </div>
    
        <?php 
        
        include "mecanica.php";

        echo '
        <div class=" mt-2 d-grid gap-2 col-6 mx-auto">
            <div class="g-col-4 bg-success p-2 text-dark bg-opacity-50 border">'.
            $_POST['quantia'] .' '.$_POST['from'].' = '.$resultado.' '. $_POST['to'].           
            '</div>
        </div>'
        
        ?>
    </div>

</body>
</html>
