<!DOCTYPE html>
    <head>
        <title>11.7. Практика</title>
        <meta http-equiv="content-type" content="text/html"; charset="UTF-8">
        <meta name="author" content="Vlad">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <?php include 'test.php'; ?>
            <h2>Таблица истинности PHP</h2>
        <table border = "1">
            <tr>
             <th>A</th>
             <th>B</th>
             <th>!A</th>
             <th>A || B</th>
             <th>A & b</th>
             <th>A xor B</th>
            </tr>
            <tr>
             <td><?php echo $a1; ?></td>
             <td><?php echo $b1; ?></td>
             <td><?php echo $c1; ?></td>
             <td><?php echo $d1; ?></td>
             <td><?php echo $e1; ?></td>
             <td><?php echo $f1; ?></td>
           </tr>
           <tr>
            <td><?php echo $a2; ?></td>
            <td><?php echo $b2; ?></td>
            <td><?php echo $c2; ?></td>
            <td><?php echo $d2; ?></td>
            <td><?php echo $e2; ?></td>
            <td><?php echo $f2; ?></td>
          </tr>
          <tr>
            <td><?php echo $a3; ?></td>
            <td><?php echo $b3; ?></td>
            <td><?php echo $c3; ?></td>
            <td><?php echo $d3; ?></td>
            <td><?php echo $e3; ?></td>
            <td><?php echo $f3; ?></td>
          </tr>
          <tr>
            <td><?php echo $a4; ?></td>
            <td><?php echo $b4; ?></td>
            <td><?php echo $c4; ?></td>
            <td><?php echo $d4; ?></td>
            <td><?php echo $e4; ?></td>
            <td><?php echo $f4; ?></td>
          </tr>
        </table>
        <h2>Гибкое сравнение в PHP </h2>
        <table border = "1">
            <tr>
             <th></th>
             <th><?php echo var_export($b_line1); ?></th>
             <th><?php echo var_export($c_line1); ?></th>
             <th><?php echo $d_line1; ?></th>
             <th><?php echo $e_line1; ?></th>
             <th><?php echo $f_line1; ?></th>
             <th><?php echo var_export($g_line1); ?></th>
             <th><?php echo var_export($h_line1); ?></th>
             <th><?php echo var_export($i_line1); ?></th>
            </tr>
            <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column1); ?></strong></td>
             <td><?php echo var_export($b_flex2); ?></td>
             <td><?php echo var_export($c_flex2); ?></td>
             <td><?php echo var_export($d_flex2); ?></td>
             <td><?php echo var_export($e_flex2); ?></td>
             <td><?php echo var_export($f_flex2); ?></td>
             <td><?php echo var_export($g_flex2); ?></td>
             <td><?php echo var_export($h_flex2); ?></td>
             <td><?php echo var_export($i_flex2); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column2); ?></srong></td>
             <td><?php echo var_export($b_flex3); ?></td>
             <td><?php echo var_export($c_flex3); ?></td>
             <td><?php echo var_export($d_flex3); ?></td>
             <td><?php echo var_export($e_flex3); ?></td>
             <td><?php echo var_export($f_flex3); ?></td>
             <td><?php echo var_export($g_flex3); ?></td>
             <td><?php echo var_export($h_flex3); ?></td>
             <td><?php echo var_export($i_flex3); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo $a_column3; ?></srong></td>
             <td><?php echo var_export($b_flex4); ?></td>
             <td><?php echo var_export($c_flex4); ?></td>
             <td><?php echo var_export($d_flex4); ?></td>
             <td><?php echo var_export($e_flex4); ?></td>
             <td><?php echo var_export($f_flex4); ?></td>
             <td><?php echo var_export($g_flex4); ?></td>
             <td><?php echo var_export($h_flex4); ?></td>
             <td><?php echo var_export($i_flex4); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo $a_column4; ?></srong></td>
             <td><?php echo var_export($b_flex5); ?></td>
             <td><?php echo var_export($c_flex5); ?></td>
             <td><?php echo var_export($d_flex5); ?></td>
             <td><?php echo var_export($e_flex5); ?></td>
             <td><?php echo var_export($f_flex5); ?></td>
             <td><?php echo var_export($g_flex5); ?></td>
             <td><?php echo var_export($h_flex5); ?></td>
             <td><?php echo var_export($i_flex5); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo $a_column5; ?></srong></td>
             <td><?php echo var_export($b_flex6); ?></td>
             <td><?php echo var_export($c_flex6); ?></td>
             <td><?php echo var_export($d_flex6); ?></td>
             <td><?php echo var_export($e_flex6); ?></td>
             <td><?php echo var_export($f_flex6); ?></td>
             <td><?php echo var_export($g_flex6); ?></td>
             <td><?php echo var_export($h_flex6); ?></td>
             <td><?php echo var_export($i_flex6); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column6); ?></srong></td>
             <td><?php echo var_export($b_flex7); ?></td>
             <td><?php echo var_export($c_flex7); ?></td>
             <td><?php echo var_export($d_flex7); ?></td>
             <td><?php echo var_export($e_flex7); ?></td>
             <td><?php echo var_export($f_flex7); ?></td>
             <td><?php echo var_export($g_flex7); ?></td>
             <td><?php echo var_export($h_flex7); ?></td>
             <td><?php echo var_export($i_flex7); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column7); ?></srong></td>
             <td><?php echo var_export($b_flex8); ?></td>
             <td><?php echo var_export($c_flex8); ?></td>
             <td><?php echo var_export($d_flex8); ?></td>
             <td><?php echo var_export($e_flex8); ?></td>
             <td><?php echo var_export($f_flex8); ?></td>
             <td><?php echo var_export($g_flex8); ?></td>
             <td><?php echo var_export($h_flex8); ?></td>
             <td><?php echo var_export($i_flex8); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column8); ?></srong></td>
             <td><?php echo var_export($b_flex9); ?></td>
             <td><?php echo var_export($c_flex9); ?></td>
             <td><?php echo var_export($d_flex9); ?></td>
             <td><?php echo var_export($e_flex9); ?></td>
             <td><?php echo var_export($f_flex9); ?></td>
             <td><?php echo var_export($g_flex9); ?></td>
             <td><?php echo var_export($h_flex9); ?></td>
             <td><?php echo var_export($i_flex9); ?></td>
           </tr>
        </table>
        <h2>Жесткое сравнение в PHP </h2>
        <table border = "1">
            <tr>
             <th></th>
             <th><?php echo var_export($b_line1); ?></th>
             <th><?php echo var_export($c_line); ?></th>
             <th><?php echo $d_line1; ?></th>
             <th><?php echo $e_line1; ?></th>
             <th><?php echo $f_line1; ?></th>
             <th><?php echo var_export($g_line1); ?></th>
             <th><?php echo var_export($h_line1); ?></th>
             <th><?php echo var_export($i_line1); ?></th>
            </tr>
            <tr class = "column">
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column1); ?></srong></td>
             <td><?php echo var_export($b_hard2); ?></td>
             <td><?php echo var_export($c_hard2); ?></td>
             <td><?php echo var_export($d_hard2); ?></td>
             <td><?php echo var_export($e_hard2); ?></td>
             <td><?php echo var_export($f_hard2); ?></td>
             <td><?php echo var_export($g_hard2); ?></td>
             <td><?php echo var_export($h_hard2); ?></td>
             <td><?php echo var_export($i_hard2); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column2); ?></srong></td>
             <td><?php echo var_export($b_hard3); ?></td>
             <td><?php echo var_export($c_hard3); ?></td>
             <td><?php echo var_export($d_hard3); ?></td>
             <td><?php echo var_export($e_hard3); ?></td>
             <td><?php echo var_export($f_hard3); ?></td>
             <td><?php echo var_export($g_hard3); ?></td>
             <td><?php echo var_export($h_hard3); ?></td>
             <td><?php echo var_export($i_hard3); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo $a_column3; ?></srong></td>
             <td><?php echo var_export($b_hard4); ?></td>
             <td><?php echo var_export($c_hard4); ?></td>
             <td><?php echo var_export($d_hard4); ?></td>
             <td><?php echo var_export($e_hard4); ?></td>
             <td><?php echo var_export($f_hard4); ?></td>
             <td><?php echo var_export($g_hard4); ?></td>
             <td><?php echo var_export($h_hard4); ?></td>
             <td><?php echo var_export($i_hard4); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo $a_column4; ?></srong></td>
             <td><?php echo var_export($b_hard5); ?></td>
             <td><?php echo var_export($c_hard5); ?></td>
             <td><?php echo var_export($d_hard5); ?></td>
             <td><?php echo var_export($e_hard5); ?></td>
             <td><?php echo var_export($f_hard5); ?></td>
             <td><?php echo var_export($g_hard5); ?></td>
             <td><?php echo var_export($h_hard5); ?></td>
             <td><?php echo var_export($i_hard5); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo $a_column5; ?></srong></td>
             <td><?php echo var_export($b_hard6); ?></td>
             <td><?php echo var_export($c_hard6); ?></td>
             <td><?php echo var_export($d_hard6); ?></td>
             <td><?php echo var_export($e_hard6); ?></td>
             <td><?php echo var_export($f_hard6); ?></td>
             <td><?php echo var_export($g_hard6); ?></td>
             <td><?php echo var_export($h_hard6); ?></td>
             <td><?php echo var_export($i_hard6); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column6); ?></srong></td>
             <td><?php echo var_export($b_hard7); ?></td>
             <td><?php echo var_export($c_hard7); ?></td>
             <td><?php echo var_export($d_hard7); ?></td>
             <td><?php echo var_export($e_hard7); ?></td>
             <td><?php echo var_export($f_hard7); ?></td>
             <td><?php echo var_export($g_hard7); ?></td>
             <td><?php echo var_export($h_hard7); ?></td>
             <td><?php echo var_export($i_hard7); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column7); ?></srong></td>
             <td><?php echo var_export($b_hard8); ?></td>
             <td><?php echo var_export($c_hard8); ?></td>
             <td><?php echo var_export($d_hard8); ?></td>
             <td><?php echo var_export($e_hard8); ?></td>
             <td><?php echo var_export($f_hard8); ?></td>
             <td><?php echo var_export($g_hard8); ?></td>
             <td><?php echo var_export($h_hard8); ?></td>
             <td><?php echo var_export($i_hard8); ?></td>
           </tr>
           <tr>
             <td style = "background: whitesmoke"><strong><?php echo var_export($a_column8); ?></srong></td>
             <td><?php echo var_export($b_hard9); ?></td>
             <td><?php echo var_export($c_hard9); ?></td>
             <td><?php echo var_export($d_hard9); ?></td>
             <td><?php echo var_export($e_hard9); ?></td>
             <td><?php echo var_export($f_hard9); ?></td>
             <td><?php echo var_export($g_hard9); ?></td>
             <td><?php echo var_export($h_hard9); ?></td>
             <td><?php echo var_export($i_hard9); ?></td>
           </tr>
        </table>
        <h2>Вывод:</h2>
        <p>При жестком сравнении возвращается true, если переменные имеют одинаковый тип, без преобразования.</p>
    </body>
    
</html>