<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 10/11/2016
 * Time: 00:03
 */

function xmltoPrint($file)
{
    $xml = simplexml_load_file($file);

    $attribute = $xml[0]->attributes();
    $data = 'Номер заказа:' . $attribute[0] . '<br>';
    $data .= 'Дата заказа:' . $attribute[1] . '<br>';
    echo $data;

    $tab = '<table border="1"><tr><td>Имя</td><td>Улица</td><td>Город</td><td>Штат</td><td>Индекс</td><td>Страна</td></tr>';

    foreach ($xml as $adress) {
        if (strlen($adress->Name) > 0) {
            $tab .= '<tr><td>' . $adress->Name . '</td>';
            $tab .= '<td>' . $adress->Street . '</td>';
            $tab .= '<td>' . $adress->City . '</td>';
            $tab .= '<td>' . $adress->State . '</td>';
            $tab .= '<td>' . $adress->Zip . '</td>';
            $tab .= '<td>' . $adress->Country . '</td></tr>';
        }
    }
    echo $tab . '</table><br>';

    foreach ($xml as $value) {
        echo $value;
    }

    echo '<br>';

    $tab2 = '<table border="1"><tr><td>Номер партии</td><td>Имя продука</td><td>Количество</td><td>Цена</td><td>Коментарий</td></tr>';

    foreach ($xml as $items){
        foreach ($items as $item) {
            if (strlen($item->ProductName) > 0){
                $tab2 .= '<tr><td>' . $item -> attributes() . '</td>';
                $tab2 .= '<td>' . $item->ProductName . '</td>';
                $tab2 .= '<td>' . $item->Quantity . '</td>';
                $tab2 .= '<td>' . $item->USPrice . '</td>';
                $tab2 .= '<td>' . $item->Comment. '</td></tr>';
            }
        }
    }
    echo $tab2 . '</table><br>';
}

xmltoPrint('data.xml');