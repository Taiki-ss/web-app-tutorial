<?php
// アプリのフロントエンド
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>web-app-tutorial</title>
	<style>
       body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 300px;
            text-align: center;
            color: #333;
        }
        .profile-card img {
            width: 100%;
            height: auto;
        }
        .profile-info {
            padding: 20px;
        }
        .profile-info h2 {
            margin: 10px 0;
            font-size: 24px;
        }
        .profile-info p {
            margin: 5px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
	<div class="container">
    	<h1>アプリのフロントエンドページ</h1>
    	<p>このテキストは<b>HTML</b>としてそのまま表示したものです。</p>
		<?php echo '<p>このテキストは<b>PHP</b>で出力したものです。</p>'; ?>
		<p>以下はAPIから取得したデータを元に表示しています。</p>
		<div class="profile-card">
        <img id="userImage" src="" alt="User Profile">
        <div class="profile-info">
            <h2 id="userName">User Name</h2>
            <p>Age: <span id="userAge">-</span></p>
            <p>Job: <span id="userJob">-</span></p>
            <p>Hobbies: <span id="userHobbies">-</span></p>
        </div>
    </div>
	</div>

	<script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('http://localhost/api/')
            .then(response => response.json())
            .then(data => {
                // 各要素にデータをセット
                document.getElementById('userName').textContent = data.name;
                document.getElementById('userImage').src = data.image;
                document.getElementById('userAge').textContent = data.age;
                document.getElementById('userJob').textContent = data.job;
                document.getElementById('userHobbies').textContent = data.hobbies.join(', ');
            })
            .catch(error => {
                console.error('Error fetching data: ', error);
            });
        });
    </script>
</body>
</html>