<?php

    //таблица истинности

    $a1 = 0; //значения столбец А
    $a2 = 0;
    $a3 = 1;
    $a4 = 1;
    $b1 = 0; //значени строка Б
    $b2 = 1;
    $b3 = 0;
    $b4 = 1;

    $c1 = !$a1; //столбец не А
    $c2 = !$a2;
    $c3 = (int)!$a3;
    $c4 = (int)!$a4;
    $d1 = (int)($a1 || $b1); //столбец А или Б
    $d2 = $a2 || $b2;
    $d3 = $a3 || $b3;
    $d4 = $a4 || $b4;
    $e1 = $a1 & $b1; // столбец А и Б
    $e2 = $a2 & $b2;
    $e3 = $a3 & $b3;
    $e4 = $a4 & $b4;
    $f1 = $a1 xor $b1; // столбец А или Б исключающее
    $f2 = $a2 xor $b2;
    $f3 = $a3 xor $b3;
    $f4 = $a4 xor $b4;

    //таблица гибкого сравнения

    $a_column1 = true; //значения первого столбца
    $a_column2 = false;
    $a_column3 = 1;
    $a_column4 = 0;
    $a_column5 = -1;
    $a_column6 = "1";
    $a_column7 = null;
    $a_column8 = "php";
    $b_line1 = true; // значения первой строки
    $c_line1 = false;
    $d_line1 = 1;
    $e_line1 = 0;
    $f_line1 = -1;
    $g_line1 = "1";
    $h_line1 = null;
    $i_line1 = "php";

    $b_flex2 = $a_column1 == $b_line1; //построчно сравниваем стоблик true
    $b_flex3 = $a_column2 == $b_line1;
    $b_flex4 = $a_column3 == $b_line1;
    $b_flex5 = $a_column4 == $b_line1;
    $b_flex6 = $a_column5 == $b_line1;
    $b_flex7 = $a_column6 == $b_line1;
    $b_flex8 = $a_column7 == $b_line1;
    $b_flex9 = $a_column8 == $b_line1;

    $c_flex2 = $a_column1 == $c_line1; //построчно сравниваем стоблик false
    $c_flex3 = $a_column2 == $c_line1;
    $c_flex4 = $a_column3 == $c_line1;
    $c_flex5 = $a_column4 == $c_line1;
    $c_flex6 = $a_column5 == $c_line1;
    $c_flex7 = $a_column6 == $c_line1;
    $c_flex8 = $a_column7 == $c_line1;
    $c_flex9 = $a_column8 == $c_line1;

    $d_flex2 = $a_column1 == $d_line1; //построчно сравниваем стоблик 1
    $d_flex3 = $a_column2 == $d_line1;
    $d_flex4 = $a_column3 == $d_line1;
    $d_flex5 = $a_column4 == $d_line1;
    $d_flex6 = $a_column5 == $d_line1;
    $d_flex7 = $a_column6 == $d_line1;
    $d_flex8 = $a_column7 == $d_line1;
    $d_flex9 = $a_column8 == $d_line1;

    $e_flex2 = $a_column1 == $e_line1; //построчно сравниваем стоблик 0
    $e_flex3 = $a_column2 == $e_line1;
    $e_flex4 = $a_column3 == $e_line1;
    $e_flex5 = $a_column4 == $e_line1;
    $e_flex6 = $a_column5 == $e_line1;
    $e_flex7 = $a_column6 == $e_line1;
    $e_flex8 = $a_column7 == $e_line1;
    $e_flex9 = $a_column8 == $e_line1;

    $f_flex2 = $a_column1 == $f_line1; //построчно сравниваем стоблик -1
    $f_flex3 = $a_column2 == $f_line1;
    $f_flex4 = $a_column3 == $f_line1;
    $f_flex5 = $a_column4 == $f_line1;
    $f_flex6 = $a_column5 == $f_line1;
    $f_flex7 = $a_column6 == $f_line1;
    $f_flex8 = $a_column7 == $f_line1;
    $f_flex9 = $a_column8 == $f_line1;

    $g_flex2 = $a_column1 == $g_line1; //построчно сравниваем стоблик "1"
    $g_flex3 = $a_column2 == $g_line1;
    $g_flex4 = $a_column3 == $g_line1;
    $g_flex5 = $a_column4 == $g_line1;
    $g_flex6 = $a_column5 == $g_line1;
    $g_flex7 = $a_column6 == $g_line1;
    $g_flex8 = $a_column7 == $g_line1;
    $g_flex9 = $a_column8 == $g_line1;

    $h_flex2 = $a_column1 == $h_line1; //построчно сравниваем стоблик NULL
    $h_flex3 = $a_column2 == $h_line1;
    $h_flex4 = $a_column3 == $h_line1;
    $h_flex5 = $a_column4 == $h_line1;
    $h_flex6 = $a_column5 == $h_line1;
    $h_flex7 = $a_column6 == $h_line1;
    $h_flex8 = $a_column7 == $h_line1;
    $h_flex9 = $a_column8 == $h_line1;

    $i_flex2 = $a_column1 == $i_line1; //построчно сравниваем стоблик "php"
    $i_flex3 = $a_column2 == $i_line1;
    $i_flex4 = $a_column3 == $i_line1;
    $i_flex5 = $a_column4 == $i_line1;
    $i_flex6 = $a_column5 == $i_line1;
    $i_flex7 = $a_column6 == $i_line1;
    $i_flex8 = $a_column7 == $i_line1;
    $i_flex9 = $a_column8 == $i_line1;

    //Таблица жесткого сравнения

    $b_hard2 = $a_column1 === $b_line1; //построчно сравниваем стоблик true
    $b_hard3 = $a_column2 === $b_line1;
    $b_hard4 = $a_column3 === $b_line1;
    $b_hard5 = $a_column4 === $b_line1;
    $b_hard6 = $a_column5 === $b_line1;
    $b_hard7 = $a_column6 === $b_line1;
    $b_hard8 = $a_column7 === $b_line1;
    $b_hard9 = $a_column8 === $b_line1;

    $c_hard2 = $a_column1 === $c_line1; //построчно сравниваем стоблик false
    $c_hard3 = $a_column2 === $c_line1;
    $c_hard4 = $a_column3 === $c_line1;
    $c_hard5 = $a_column4 === $c_line1;
    $c_hard6 = $a_column5 === $c_line1;
    $c_hard7 = $a_column6 === $c_line1;
    $c_hard8 = $a_column7 === $c_line1;
    $c_hard9 = $a_column8 === $c_line1;

    $d_hard2 = $a_column1 === $d_line1; //построчно сравниваем стоблик 1
    $d_hard3 = $a_column2 === $d_line1;
    $d_hard4 = $a_column3 === $d_line1;
    $d_hard5 = $a_column4 === $d_line1;
    $d_hard6 = $a_column5 === $d_line1;
    $d_hard7 = $a_column6 === $d_line1;
    $d_hard8 = $a_column7 === $d_line1;
    $d_hard9 = $a_column8 === $d_line1;

    $e_hard2 = $a_column1 === $e_line1; //построчно сравниваем стоблик 0
    $e_hard3 = $a_column2 === $e_line1;
    $e_hard4 = $a_column3 === $e_line1;
    $e_hard5 = $a_column4 === $e_line1;
    $e_hard6 = $a_column5 === $e_line1;
    $e_hard7 = $a_column6 === $e_line1;
    $e_hard8 = $a_column7 === $e_line1;
    $e_hard9 = $a_column8 === $e_line1;

    $f_hard2 = $a_column1 === $f_line1; //построчно сравниваем стоблик -1
    $f_hard3 = $a_column2 === $f_line1;
    $f_hard4 = $a_column3 === $f_line1;
    $f_hard5 = $a_column4 === $f_line1;
    $f_hard6 = $a_column5 === $f_line1;
    $f_hard7 = $a_column6 === $f_line1;
    $f_hard8 = $a_column7 === $f_line1;
    $f_hard9 = $a_column8 === $f_line1;

    $g_hard2 = $a_column1 === $g_line1; //построчно сравниваем стоблик "1"
    $g_hard3 = $a_column2 === $g_line1;
    $g_hard4 = $a_column3 === $g_line1;
    $g_hard5 = $a_column4 === $g_line1;
    $g_hard6 = $a_column5 === $g_line1;
    $g_hard7 = $a_column6 === $g_line1;
    $g_hard8 = $a_column7 === $g_line1;
    $g_hard9 = $a_column8 === $g_line1;

    $h_hard2 = $a_column1 === $h_line1; //построчно сравниваем стоблик NULL
    $h_hard3 = $a_column2 === $h_line1;
    $h_hard4 = $a_column3 === $h_line1;
    $h_hard5 = $a_column4 === $h_line1;
    $h_hard6 = $a_column5 === $h_line1;
    $h_hard7 = $a_column6 === $h_line1;
    $h_hard8 = $a_column7 === $h_line1;
    $h_hard9 = $a_column8 === $h_line1;

    $i_hard2 = $a_column1 === $i_line1; //построчно сравниваем стоблик "php"
    $i_hard3 = $a_column2 === $i_line1;
    $i_hard4 = $a_column3 === $i_line1;
    $i_hard5 = $a_column4 === $i_line1;
    $i_hard6 = $a_column5 === $i_line1;
    $i_hard7 = $a_column6 === $i_line1;
    $i_hard8 = $a_column7 === $i_line1;
    $i_hard9 = $a_column8 === $i_line1;

?>