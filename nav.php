<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img width="30" height="30" src="https://images.unsplash.com/photo-1659952586072-b3cebadec6d2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Livros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informática
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Notebook</a></li>
            <li><a class="dropdown-item" href="#">Pc gamer</a></li>
            <li><a class="dropdown-item" href="#">All in one</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Tablet</a></li>
            <li><a class="dropdown-item" href="#">iPad</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tv e Aúdio
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">TV Smart</a></li>
            <li><a class="dropdown-item" href="#">TV 4k</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Fones de ouvido</a></li>
            <li><a class="dropdown-item" href="#">Dock Station</a></li>
          </ul>
        </li>

        <form class="d-flex" role="search">
            <input style="margin-left: 0.2rem;" class="form-control me-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="nav-link" href="#">Contato</a></li>
        <?php if(empty($_SESSION['id'])){ ?>
          <li><a href="formLogon.php" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                Logon
            </a>
          </li>
        <?php }else{ 
            if($_SESSION['adm']==0){
              $consulta = $conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]';");
              $exibeUser = $consulta->fetch(PDO::FETCH_ASSOC);  
        ?>
          <li><a href="#" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg>
                <?php echo $exibeUser['nome']; ?>
            </a>
          </li>
          <li><a class="nav-link" href="sair.php">Sair</a></li>
        <?php }else{ ?>
          <li><a href="#"><button class="btn btn-danger">adm</button></a></li>
          <li><a class="nav-link" href="sair.php">Sair</a></li>
        <?php }
        }?>

       </ul>
    </div>
  </div>
</nav>