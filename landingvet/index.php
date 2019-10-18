<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css"> 
    <link href="https://fonts.googleapis.com/css?family=Heebo|Libre+Franklin&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/10780d7f46.js" crossorigin="anonymous"></script>
</head>
<body >
    <header>
        <nav id="nav" classs="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <li class="fab fa-github-square"></li>
                </div>
                <div id="enlaces">
                    <a href="#">inicio</a>
                    <a href="#">inicio</a>
                    <a href="#">inicio</a>
                    <a href="#">inicio</a>
                </div>
                <div class="etiqueta">
                    <span>☰</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Veterinaria KorKy y Stich</h1>
        </div>
    </header>
<section>
    <div class="contenedor">
        <div class="conten-form1">
            <div class="form1">
                <form  method="POST"  >
                    <h2>contactanos</h2>
                        <div class="form-group">
                            <label class="text">Nombre:</label>
                            <input class="cuadro" type="text" name="t1" placeholder="Nombre" >
                        </div>
                        <div class="form-group">
                            <label class="text">Email:</label>
                            <input class="cuadro" type="email" name="t2" placeholder="Email ">
                        </div>
                        <div class="form-group">
                            <label class="text">Edad:</label >
                            <select class="cuadro" name="t3" id="selectorEdad"></select> 
                        </div>
                        <div class="form-group">
                            <label class="text">Sexo:</label> 
                                <select class="cuadro" name="t4"  >
                                        <option value="mujer">Mujer</option>
                                        <option value="hombre">Hombre</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <input class="cuadro" type="checkbox" name="test" id="test">
                            <label class="text"> He leido y acepto las </label>
                        </div>
                        <div class="form-group1">
                            <input class="enviar" type="submit" name="bt1" values="enviar">
                        </div>
                </form>
            </div>
        </div>
    </div>
        <div class="conten-form1">
            <div class="form2">
                <div class="botones1">
                    <div class="botones">
                    <li>mascotas</li>
                    <li>Instalaciones</li>
                    <li>Servicios</li>
                    <li>Conocenos</li>
                    <li>Ubicacion</li>
                    </div>
                    </div>
                    <div class="mascotas">
                    <img src="mascota1.jpg" alt="">
                    <img src="mascota2.jpg" alt="">
                    <img src="mascota3.jpg" alt="">
                    <img src="mascota4.jpg" alt="">
                    <img src="mascota5.jpg" alt="">
                    <img src="mascota6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>
<section>
    <div class="text-mayor">
        <div class="textos-m">
            <p>
            Los veterinarios diagnostican y tratan los animales enfermos y heridos. También previenen la enfermedad y la mala salud, por ejemplo, mediante vacunaciones y prestando asesoramiento a los propietarios. Algunos veterinarios se especializan, por ejemplo, en animales domésticos, ganado, caballos y animales de zoológico.
            </p> 
        </div> 
    </div>         
</section>   


<script>
    var Checkbox=document.getelementby('test');
 var checkbox = document.getElementById('test');
 checkbox.addeventlistener
checkbox.addEventListener("change", validaCheckbox, false);

function validaCheckbox(){
  var checked = checkbox.checked;
  if(checked){
    alert('checkbox esta seleccionado');
  }
}
</script>

<script>
 
    //selecciona el objeto por el id
    let selectorEdad  = document.getElementById("selectorEdad");
    //selecciona los objetos segun el nombre 
    let selectores = document.getElementsByTagName("select");
    //imprime en la consola 
    console.log(selectores);
//define un bucle for para dar opciones 
    for (let index = 1; index <= 115; index++) {
        //el let es igual a un dim 
        let opt = document.createElement("option"); // crear un option
        opt.value = index;
        //con el simbolo mas se separan y anidan caracteres
        opt.innerHTML =  index + "años";
        selectorEdad.appendChild(opt);
        
    }
</script>
<footer>
        <div class="hola" style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M530.19,-6.41 C149.99,150.00 572.51,-26.14 436.51,94.23 L512.69,158.38 L0.00,150.00 Z" >
                </path>
            </svg>
        </div>
</footer>
</body>


</html>