<nav class="navbar navbar-expand-lg navbar-dark colorblue d-flex bd-highlight mb-3 p-0">
  <a class="pt-3 pb-3 pl-1 m-0 bd-highlight" href="index.php"><img src="img/logo.png" alt="Logo du site de ping pong PING PONG RIVALS"></a>
  <?php
  if (!empty($_SESSION['id'])) {
    // check if the id of the session (by connect) is on the bdd
    $account = $bdd->prepare('SELECT * FROM accounts WHERE id = :idtake');
    $account->execute(array(
      'idtake' => $_SESSION['id']
    ));
    $account = $account->fetch();
    // if user is connected check the user id and check is he's connected 1 = connected 0 = disconnect or no account
      echo '<a class="position-absolute alignright" href="disconnect.php">
          <div class="pt-3 pr-1">
          <p class="colorwhite">Se deconnecter</p>
          </div>
        </a>';
  } else {
      echo '<a class="position-absolute alignright" href="connect.php">
          <div class="pt-3 pr-2">
          <p class="colorwhite">Se connecter</p>
          </div>
        </a>';
    }
    // session_destroy();
  ?>
</nav>
