<?php

class Teclado{
    public function tecla($letra){
        $array = array();
        
        $array['1'] = 1;
        $array['A'] = 2;
        $array['B'] = 2;
        $array['C'] = 2;
        $array['D'] = 3;
        $array['E'] = 3;
        $array['F'] = 3;
        $array['G'] = 4;
        $array['H'] = 4;
        $array['I'] = 4;
        $array['J'] = 5;
        $array['K'] = 5;
        $array['L'] = 5;
        $array['M'] = 6;
        $array['N'] = 6;
        $array['O'] = 6;
        $array['P'] = 7;
        $array['Q'] = 7;
        $array['R'] = 7;
        $array['S'] = 7;

        return $array[$letra];
    }
    
}
