<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    
    <!--Sintaxis basica de PHP-->
    <!--Un script de php se puede colocar en cualquier parte del codigo-->
    <?php //Se indica que se va a agregar codigo de php

    //para imprimir un mensaje vamos a usar echo o print
    echo "<h1 style='text-align:center;'>Título</h1>"."<br>";
    //TODAS las declaraciones de PHP deben de terminar con ;

    //Creacion de variables, se hace con el signo $
    $dia="Viernes"; 
    echo "Hoy es ".$dia."<br>";
    echo "<p style='color:red;'>Hoy es $dia</p>";
    print "el valor de la variable dia es:".$dia."<br>";
    //echo y print sirven para mostrar informacion o enviar informacion 
    //a la pantalla, la difererncia es que echo no tiene limites de valores de retorno, mientras que print se limita a 1, echo tambien es mas rapido que print a la hora de mostrar 

    //Tipos de datos que se pueden almacenar en las variables:
    //Entero, real-flotante, cadena, array, booleano
    
    $entero=12;
    $decimal=3.14;
    $cadena="Hola";
    $booleano=true;
    var_dump($entero);//la funcion var_dump muestra el tipo de dato y el valor
    var_dump($decimal);
    var_dump($cadena);
    var_dump($booleano);
    //Operaciones con variables
    echo "<br>";
    //Si se opera con numeros enteros me devuelve un numero entero
    $num1=52;
    $num2= 34;
    $suma=$num1 + $num2;
    $resta=$num1 - $num2;
    $division= $num1 / $num2;
    $multiplicacion= $num2 * $num1;
    echo "La suma entre $num1 y $num2 es: $suma"."<br>"."La resta entre $num1 y $num2 es: $resta"."<br>"."La multiplicacion entre $num1 y $num2 es: $multiplicacion"."<br>"."La división entre $num1 y $num2 es: $division"."<br>";
    //PHP tiene un cojunto de funciones matematicas 
    echo ("El valor de pi es: ".pi())."<br>";
    //Para mostrar la raiz cuadrada de un numero se hace con sqrt
    echo("La raiz cuadrada de 4 es: ".sqrt(4))."<br>";
    //Si tengo varios numeros y quiero saber el valor minimo de esos numeros se hace con min() y para saber el numero maximo se hace con max()
    echo(min(1,2,8,-9,7,10,-2,0,-1))."<br>";
    echo(max(1,2,8,-9,7,10,-2,0,-1))."<br>";
    //Operadores
    //1.Operadores Aritmeticos:
    //suma +
    //resta -
    //multiplicacion *
    //division /
    //exponente **
    //modulo o residuo de una division %
    //2.Operadores Logicos
    //And: &&
    //Or: ||
    //Not: !
    //3.Operadores Relacionales
    //Mayor: >
    //Mayor o igual: >=
    //Menor:<
    //Menor o igual:<=
    //Comparacion-Igual: ==
    //Comparacion-identico: ===
    //Diferente: !=, <>
    //Signos de incremento: ++
    //Signos de decremento: --
    //Concatenar y asignar: .=
    //Decisiones logicas:
    //1.Condicionales 
    //if...else
    //if... else if
    $hora=date("H");
    //Vamos a mostrar un mensaje si la hora es menor que las 19- 7 de la noche
    if($hora < "19")
    {
        echo "Es de día";
    }
    else
    {
        echo "Es de noche";
    }
    //Se necesita saber si el dato almacenado en una variable es mayor o menor a 5
    echo "<br>";
    $numero1=29;
    if($numero1<5)
    {
        echo "El $numero1 es menor que 5";
    }
    else
    {
        echo "El $numero1 es mayor que 5";
    }
    //Ejemplo de condicional con un tipo de dato booleano
    echo "<br>";
    $galletas=true;
    if($galletas)//Siempre evalua un valor de verdad (Verdadero-Falso)
    {
        echo "Si hay galletas";
    }
    else
    {
        echo "No hay galletas";
    }
    //Se necesita saber si el dato almacenado en una variable es MAYOR que 40 o si es mayor de 35 o si es mayor de 30 o si por el contrario no es mayor de 40 ni de 35 ni de 30
    $numero2=78;
    echo "<br>";
    if($numero2 > 40 )
    {
        echo "Si, $numero2 es mayor que 40";
    }
    else 
    if($numero2 > 35)
    {
        echo "Si, $numero2 es mayor que 35";
    }
    else
    if($numero2 > 30)
    {
        echo "Si, $numero2 es mayor que 30";
    }
    else
    {
        echo "No, $numero2 es menor que 40, 35 y 30";
    }
    //Se necesita saber si el dato almacenado en una variable esta entre 8000 y 10500 imprimir un mensaje que diga "Estas en el rango correcto, de lo contrario imprimir "no cumples ningun rango"
    $rango=10000;
    echo "<br>";
    if($rango >= 8000 && $rango<=10500)
    {
        echo "Estas en el rango correcto";
    }
    else
    {
        echo "No estas en el rango correcto";
    }
    //Se necesita saber si el dato almacenado en una variable es igual a 0, si es igual a 1, si es igual a 2 o si no es igual a los anteriores numeros
    $numero3=3;
    echo "<br>";
    if($numero3==0)
    {
        echo "El numero es igual a 0";
    }
    else
    if($numero3==1)
    {
        echo "El numero es igual a 1";
    }
    else 
    if($numero3==2)
    {
        echo "El numero es igual a 2";
    }
    else
    {
        echo "El numero no es igual ni a 0 ni a 1 ni a 2";
    }
    //Crear una lista del 1 al 15 utilizando una estructura de control
    //El ciclo FOR-PARA, este ciclo se divide en 3 partes: Inicializacion, Condicion, Actualizacion(aumenta o disminuye)
    //Inicializacion:Es la zona en la que se establece los valores inciales del ciclo que contra la repetición
    //Condicion:Es el unico elemento que decide si continua o se detiene el ciclo
    //Actualizacion: Es el nuevo valor que se le asigna despues de cada repeticion a la variable que controla el ciclo
    echo "<br>";
    for($i=1;$i<=15;$i++)//Aqui tengo los numeros del 1 al 15
    {
        echo $i;
        echo "<br>";
        
    }
    echo "<br>";
    //Crear una lista del 10 al 1 utilizando una estructura de control
    for($a=10;$a>=1;$a--)
    {
        echo $a;
        echo "<br>";
    }
    //Crear la tabla de multiplicar del 5, entre 1 y 10
    $multiplo=5;
    echo "Tabla de multiplicar del 5"; 
    echo "<br>";
    for($t=1;$t<=10;$t++)//Aqui tenemos los numero del 1 al 10
    {
        $resultado= $multiplo * $t;//
        echo $multiplo . "x" . $t . "=". $resultado;
        echo "<br>";
    }
    //Crear una lista que muestre los numeros desde el 4 hasta el 12, pero solo los numeros que sean pares
    echo "Numeros Pares:";
    for($e=4;$e<=12;$e=$e+2)
    {
        echo $e;
        echo "<br>";
    }
    //Arreglos-Array
    //Es una variable que almacena varios datos a la vez
    //Conjunto de datos almacenados en una misma variable
    //Los indices me permiten identificar los valores de ese array, comienza en 0
    //para indicar que la variale será un arreglo se debe de escribir: $nombrevariable=array("");
    $marcaCarros=array("Mazda","Ford","BMW","Chevrolet","Toyota");
    //Indicies son los indicadores o identificadores de cada valor almacenado en esa variable 
    //"Mazda"[0],"Ford"[1],"BMW"[2],"Chevrolet"[3],"Toyota"[4]
    echo "<br>";
    echo "La marca de mi vehiculo es: ".$marcaCarros[0];
    $matricula=array('dia'=>'Lunes','color'=>'Negro','marca'=>'BMW');
    //Los datos de ese arreglo son: Lunes,Negro,BMW
    //Los datos son los que estan la lado derecho de la =>
    //NUNCA se puede llamar los inidices con el mismo nombre
    //Incluso las variables se llaman diferente
    //En este caso los indices son: dia,color, marca
    echo "El día que compre el vehiculo fue: ".$matricula['dia'];
    //Foreach es un bucle que si tiene un limite que permite recorrer un array y sus objetos de manera controlada
    $equipo=array('portero'=>'Mateo','defensa'=>'Juan','medio'=>'Luis','delantero'=>'Camilo');
    //Indices:portero,defensa,medio,delantero
    //Valores que almacena el arreglo:Mateo,Juan,Luis,Camilo
    //Crear un mensaje que me diga el nombre y la posicion en la que juegan
    //Foreach(expresion as $variable)
    //Foreach ($nombredelarreglo as $indice => $valor)
    //$indice y $valor pueden tener cualquier nombre
    //La variable $posicion me guarda todos los indices
    //La variable $jugador me guarda todos los valores
    foreach($equipo as $posicion=>$jugador)
    {
        echo "El ".$posicion." es ".$jugador;
        echo "<br>";
    }
    /**
     * ES LO MISMO
     * foreach($equipo as $indice=>$valor)
     * {
     *      echo "El ".$indice." es ".$valor;
     *      echo "<br>";
     * }
     */
    $idiomas=array('Alemania'=>'Alemán','Chile'=>'Chileno','Uganda'=>'Suajili','Somalia'=>'Somalí','Islandia'=>'Islandes');
    //Indice nunca es un valor, es un ID, valor lo que va despues del =>
    //Para crear un mensaje
    foreach($idiomas as $pais=>$idioma)
    {
        echo "En ".$pais." se habla ".$idioma;
        echo "<br>";
    }
    //Indico que voy a cerrar codigo de php ?>
</body>
</html>