<! DOCTYPE html>
<html lang = "pt-br">

<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <link rel = "stylesheet" type = "text / css" href = "Css / calculadora.css" media = "screen" />
    <title> Calculadora </title>
</head>

<body>
    <img class = "fundo" src = "Css / fundo.png" alt = "fundo">
    <h1 class = "calcu"> Calculadora PHP </h1>
    <form action = "calculadora.php" method = "post">
        <div class = "form-goup">
            <input type = "number" class = "inp1 form-control" name = "num1" placeholder = "Digite o primeiro número">
        </div>
        <div class = "form-group">
            <select name = "opcao" class = "btnop form-control">
                <opção selecionada> Operação </option>
                <option value = "soma"> Adição </option>
                <option value = "sub"> subtração </option>
                <option value = "multi"> Multiplicação </option>
                <option value = "divi"> divisão </option>
            </select>
        </div>
        <div class = "form-goup">
            <input type = "number" class = "inp2 form-control" name = "num2" placeholder = "Digite o segundo número">
        </div>
        <button class = "btn btn-calcular">
            Calcular
        </button>
    </form>

</body>

</html>