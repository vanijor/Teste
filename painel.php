<?
session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Basic Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style1.css">
  
</head>

<body>
  <section>
  <header>
    <nav class="rad-navigation">
      <div class="rad-logo-container">
        <a href="#" class="rad-logo">Painel ADM</a>
        
      </div>
      <div class="rad-top-nav-container">
        <ul class="links">
          <li>
            <a class="rad-menu-item" href="#"><i class="fa fa-comment-o"></i></a>
          </li>
          <li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-envelope-o"><span class="rad-menu-badge">3</span></i></a>
            <ul class="rad-dropmenu-item">
              <li class="rad-dropmenu-header"><a href="#">Notificações</a></li>
              <li class="rad-notification-item">
                <a class="rad-notification-content" href="#">

                </a>
              </li>
              <li class="rad-dropmenu-footer"><a href="#">Veja todoas notificações</a></li>
            </ul>
          </li>
          <li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge">49</span></i></a>
            <ul class="rad-dropmenu-item">
              <li class="rad-dropmenu-header"><a href="#">Alertas</a></li>
              <li class="rad-notification-item">
                <a class="rad-notification-content" href="#">

                </a>
              </li>
              <li class="rad-dropmenu-footer"><a href="#">Veja todos alertas</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
</section>
<aside>
  <nav class="rad-sidebar">
    <?php
      include('menu.php');
    ?>
  </nav>
</aside>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="col-xs-4"></div>
    <div class="col-xs-8">
    <?php
           include("usermodal/create_user.php");
           include("fornmodal/create_forn.php");
    ?>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>

    <script src="js/index.js"></script>
    <script language="javascript" type="text/javascript">
// Exibe confirmação delete
    function confirmarDelete(id) {
    var verificar = confirm('Você realmente deseja excluir este usuário?');
    if (verificar){
        location.href = 'deletar.php?cd_pessoa='+ id;
        } else {
        alert('Quase deletou o usuário errado mané.');
        }    
    }

    // Envia dado pro modal
    function alterar(id) {
        location.href = 'deletar.php?cd_pessoa='+ id;
    }

    </script>
</body>
</html>
