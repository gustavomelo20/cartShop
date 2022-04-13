<?php

    namespace app\interfaces;

    interface CartInterface
    {
        public function add($product);
        public function remove($product);
        public function quanty($product, $quantity);
        public function clear();
        public function cart();
        public function dump();
    }