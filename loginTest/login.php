<?php

// 로그인 페이지를 로드합니다.
include 'login.php';

// 로그인 양식을 처리합니다.
if (isset($_POST['username']) && isset($_POST['password'])) {

  // 사용자 이름과 암호를 가져옵니다.
  $username = $_POST['username'];
  $password = $_POST['password'];

  // 사용자 이름과 암호가 데이터베이스에 있는지 확인합니다.
  $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
  $stmt = $db->prepare($sql);
  $stmt->execute([$username, $password]);

  // 사용자를 찾으면 로그인합니다.
  if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['user_id'] = $user['id'];
    header('Location: index.php');
    exit;
  }

  // 사용자를 찾지 못하면 에러 메시지를 표시합니다.
  else {
    echo '로그인 실패: 잘못된 사용자 이름 또는 암호입니다.';
  }
}

?>