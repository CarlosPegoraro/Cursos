<?php

    interface Publicacao {

        //metodos
        public function abrir();
        public function fechar();
        public function folhear($pag);
        public function avancarPagina();
        public function voltarpagina();

    }

?>