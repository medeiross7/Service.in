<?php
     session_start();
   // print_r($_REQUEST);

   if(isset($_POST['submit']) && !empty($_POST['email'])&& !empty($_POST['senha'])){
        //acessa
        include_once('../conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: '. $email);
        //print_r('<br>');
        //print_r('Senha: '. $senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

        $result = $mysqli->query($sql);

        //print_r($sql);
       // print_r($result);
       if(mysqli_num_rows($result) < 1){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../View/login.php');
          }
       else{
               $_SESSION['email'] = $email;
               $_SESSION['senha'] = $senha;
               header('Location: ../View/sistema.php');
          }
   }
   else{
    //nao acessa
        header('Location: login.php');
   }
?>