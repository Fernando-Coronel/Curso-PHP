<?php
//27. Metodos Estaticos

class unaClase{

    public static function unMetodo(){
        echo "Hola soy un metodo estatico"."<br/>";
    }

}

$obj=new unaClase();
$obj->unMetodo();//accediendo al metodo y asi se manda a llamar.

unaClase::unMetodo();//accediendo al metodo y es igual que la instancia de un objeto y asi se manda a llamar.


?>