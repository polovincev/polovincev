<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 21/11/2016
 * Time: 01:59
 */

$filelist = array_diff(scandir("photos"), array('..', '.'));

echo '<table border="1" style="border-collapse: collapse;" cellpadding="7">';
foreach($filelist as $filename){
    echo "<tr>
                <td>$filename</td>
                <td><a href='rename.php?name={$filename}'>Переименовать</a></td>
                <td><a href='deletefiles.php?name={$filename}'>Удалить</a></td>
            </tr>";
}
echo '</table>';