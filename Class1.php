<?php
    class class1{
        private $font_color;
        private $font_text;
        function __construct($f,$fs,$s){
            $this->font_color=$f;
            $this->font_size=$fs;
            $this->font_text=$s;
            $this->print_msg();
        }
        function print_msg(){
            echo "<p style=color:".$this->font_color.";"."font-size:".$this->font_size.";>".$this->font_text."</p>";
        }
    }
?>