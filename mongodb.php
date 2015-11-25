<?php

//================================
// 获取数据库连接
//================================
$connection = new MongoClient();

// 连接到远程服务器 （使用默认端口： 27017）
#$connection = new MongoClient("mongodb://127.0.0.1");

// 链接到远程服务器，使用自定义的端口
#$connection = new MongoClient("mongodb://127.0.0.1:27017");


//================================
// 获取数据库实例 
//================================
// 这个数据库不需要提前建好，当你使用它的时候，就会自动建立
$db = $connection->database_name;


//================================
// 获取集合实例 
//================================
//一个集合(collection)相当于一张表
$collection = $db->collection_name;


//================================
// 插入一个文档 
//================================
$doc = [
	    "name" => "MongoDB",
	    "type" => "database",
	    "count" => 1,
	    "info" => (object)array( "x" => 203, "y" => 102),
	    "versions" => array("0.9.7", "0.9.8", "0.9.9")
	    ];

#$collection->insert($doc);

// _id 字段就是集合的“主键”
// 如果插入文档的时候你没有手动指定，驱动就会自动帮你添加一个
#print_r($doc['_id']);

// 使用 MongoCollection::findOne() 方法从即合理获得一个简单的文档
$document = $collection->findOne();

//================================
// 添加多个文档
//================================
for($i = 0 ; $i < 100; $i++){
	$collection->insert(["i"=>$i, "filed[$i]" => $i * 2 ]);
}



//================================
// 计算文档数量
//================================
$count = $collection->count();
#print_r($count);

//================================
// 使用游标获取所有文档
//================================
// 要获得集合中的所有文档，我们需要 MongoCollection::find() 方法。 
// find() 方法返回一个 MongoCursor 对象，允许我们遍历整个结果集合来读取文档。
// 要查询所有的文档并显示它们
$cursor = $collection->find();
foreach ($cursor as $id => $value) {
	#echo $id ;
	#print_r($value);
}


//================================
//设置查询条件
//================================
$query = ['i' => 71];
$cursor = $collection->find($query);
while ($cursor->hasNext()) {
	print_r($cursor->getNext());
}

return;

//================================
// 建立索引
// MongoDB 支持索引，并且很容易给集合添加索引。
// 你需要指定字段名和排序方向： 升序（1）或降序（-1）
//================================
// create index on "i"
#$collection->ensureIndex(["i" => 1]); 

// index on "i" descending, "j" ascending
#$collection->ensureIndex(["i" => -1 , "j" => 1]); 













