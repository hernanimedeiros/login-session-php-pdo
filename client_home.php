<?php require_once("./login_session.php");?>
<?php include("./includes/config.php");?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <?php include("./includes/head_tags.php");?>
    <?php include("./includes/link_top.php");?>
</head>
<body>
  <?php include("./includes/navigation.php");?>
  <?php include("./includes/design_top.php");?>
  <section>
    <div class="container " id="clientMenu">    
        <div class="menu-home">
          <div class="card mx-auto">
            <div class="card-header">
              Menu do usuário
            </div>
            <div class="card-body">
              <div class="row text-center">
                <div class="col-md-3 mb-3 justify-content-center">
                  <a href="">
                  <i class="material-icons">admin_panel_settings</i></br>
                  </a>
                  Alterar dados do utilizador
                </div>
                <div class="col-md-3 mb-3 justify-content-center">
                  <a href="">
                    <i class="material-icons">calendar_today</i></br>
                  </a>
                  Agendar uma viagem
                </div>
                <div class="col-md-3 mb-3 justify-content-center">
                  <a href=""> 
                    <i class="material-icons">add_comment</i></br>
                  </a>
                  Deixar um comentário
                </div>

                <div class="col-md-3 mb-3 justify-content-center">
                  <a href=""> 
                    <i class="material-icons">star_half</i></br>
                  </a>
                  Pontuar uma viagem
                </div>
              </div>
            </div>
          </div>
        </div>
      
    </div>
  </section>
  <?php include("./includes/footer.php");?>
  <?php include("./includes/link_bottom.php");?>
</body>
</html>