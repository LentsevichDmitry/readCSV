<?php
$file = 'config.csv';

if (($file = fopen($file, 'r')) !== false){
    fgetcsv($file);

    while(($row = fgetcsv($file)) !== false)
    {
        $parameter = $row[0];
        $value = $row[1];

        switch ($parameter)
        {
            case 'sitename':
                echo "\"Название сайта: $value\"<br>";
                break;
            case 'admin':
                echo "\"Email администратора: $value\"<br>";
                break;
            default:
                echo "Ничего не найдено в файле";
        }
    }
}
fclose($file);

