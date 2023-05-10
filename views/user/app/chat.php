<?php 
  @session_start();
  include_once "../../connection/config.php";
  if(!isset($_SESSION['userId'])){
    header("location: ../../auth/login.php");
  }
?>
<?php include_once "header.php"; ?>
<body class="bodypart">
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $id = mysqli_real_escape_string($conn, $_GET['id']);
          $sql = mysqli_query($conn, "SELECT * FROM user WHERE id = {$id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location:users.php");
          }
        ?>
        <a href="dashboard.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
       
        <div class="details">
          <span><?php echo $row['email'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="../../../assets/js/chat.js"></script>

</body>
</html>
