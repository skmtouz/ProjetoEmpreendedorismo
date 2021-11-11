<?php
class layout
{

    public function index()
    {
        include 'menu.php';
        //include 'rodape.php';
    }


    public function pagina($conteudo)
    {
        $this->index();
        include "".$conteudo.".php";
    }

}