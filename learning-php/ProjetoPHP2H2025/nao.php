<?php
    $opcao = 2;
   
    switch ($opcao){
        case 1:
            print("Banana<br/>");
            break;
        case 2:
            print("Maça<br/>");
            break;
        case 3:
            print("Melancia<br/>");
            break;
        case 4:
            print("Uva<br/>");
            break;
        default:
            print("Sair<br/>");
            break;
    }


    function Menu(){
        print("<br/>===Menu de opções===<br/>");
        print("1 - Opção 1 <br/>");
        print("2 - Opção 2 <br/>");
        print("3 - Opção 3 <br/>");
        print("4 - Opção 4 <br/>");
        print("5 - Sair <br/>");
    }

    Menu();
?>