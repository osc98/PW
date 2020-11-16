<?php
  session_start();
if (!isset($_SESSION['nombre'])) {
  header("location: ../index.php?m=100");
}
 ?>

 <h1>ようこそ<?php echo $_SESSION['nombre']; ?></h1>
<a href="../index.php">ログアウト</a>
