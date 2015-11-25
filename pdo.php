<?php

$dsn = 'mysql:dbname=yii2test;host=192.168.0.69;post=3306';
$user = 'shou';
$password = 'shouadmin';

try{
    $db = new PDO($dsn, $user, $password);

    // 
    $sql = 'insert into user(username, password,password_hash, status) value (?, ?, ?, ?)';
    $stmt = $db->prepare($sql);
    $param = [];
    $param[] = 'admin'. date('YmdHis');
    $param[] = time();
    $param[] =  md5(time());
    $param[] = 10;
    if($stmt->execute($param)) {
    	echo "insert ok !" .PHP_EOL;
    } else {
		echo "insert ng !" .PHP_EOL;
    }

    // 
    echo PHP_EOL. "==> query" . PHP_EOL;
    $sql = "select * from user";
    $data = $db->query($sql);
    foreach($data as $row) {
      echo $row["username"] . "  " . $row["password"]. PHP_EOL;
    }

    // 
    echo PHP_EOL. "==> prepare 1" . PHP_EOL;
    $sql = 'select * from user where username like ?';
    $stmt = $db->prepare($sql);
    $stmt->execute(['admin%']);
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	print_r($result);
    }

    // 
    echo PHP_EOL. "==> prepare 2" . PHP_EOL;
    $sql = 'select * from user where username like :username';
    $stmt = $db->prepare($sql);
    $stmt->execute([':username' => 'admin%']);
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	print_r($result);
    }



}catch (PDOException $e){
    print('Error:'.$e->getMessage());
    die();
}


$db = null;

