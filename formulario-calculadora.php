<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body style=" margin: 100px;">  
    
        <div class="card" style=" width: 18rem;">
            <img class= "card-img-top" src= "img/calculadora.png" style="widht: 30rem;">
                <div class="card-body">
                    <form action="calculadora.php" method="get">
                        <div class="form-group">
                    <label for="numero1"> Insira o primeiro numero</label>
                    <input type="number" class="form-control" name="numero1">
                        </div>
                <div class="form-group">
                    <label for="numero2"> Insira o segundo numero</label>
                    <input type= "number" class="form-control"  name= "numero2">
                </div>
                    
                    <button type="submit" class="btn btn-outline-info">Calcular</button>
                  
        </form>
</div>
</div>
        
    
</body>
</html>

