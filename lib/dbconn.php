<?
    $connect=mysql_connect( "localhost", "dbuser164127", "ce1234") or
        die( "SQL server에 연결할 수 없습니다.");

    mysql_select_db("db164127",$connect);
?>
