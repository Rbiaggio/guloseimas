<?php
 
/**
    * Exibe os ícones de Twitter, Facebook e Google Plus
    * @author Rafael Wendel Pinheiro
    * @param String $twitter Conta do twitter que o conteúdo será vinculado
    * @param Array  $pagina Página que será curtida e marcada
    * @return void
*/
function icones_redes_sociais($twitter, $pagina){
    /* Twitter */
    echo "<a href=\"http://twitter.com/share\" class=\"twitter-share-button\" data-count=\"horizontal\" data-via=\"". $twitter ."\" rel=\"nofollow\">Tweet</a><script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>";
 
    
    /* Google+ */
    echo "<g:plusone width=\"56\" height=\"16\" href=\"". $pagina ."\"></g:plusone>";
}