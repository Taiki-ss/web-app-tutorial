<?php
// アプリのバックエンドAPI
header("Content-Type: application/json; charset=utf-8");

$user_profile = [
	"name" => "Taiki",
	"image" => "https://avatars.githubusercontent.com/u/81791711?v=4",
	"age" => 35,
	"job" => "Webエンジニア",
	"hobbies" => ["アニメ", "映画", "ゲーム"]
];

echo json_encode($user_profile);


