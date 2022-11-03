<?php require_once("conexao.php"); 

$id = $_GET['id'];
$query = "SELECT * FROM tabela_cliente WHERE id_cliente = $id";
$resultado = mysqli_query($con, $query);
$select = mysqli_fetch_assoc($resultado);

//$mesAno = new DateTime($select['reserva_cliente']);
    
//$dt = $mesAno->format('d/m/Y H:i');

$dateStart = $select['data_reserva'];
date("Y-m-d\TH:i:s", strtotime($dateStart));

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Produtos - Forno & Lenha</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.php">Forno & Lenha</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
          
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
                    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Opções</div>
                                <a class="nav-link" href="dashboard_consulta_produtos.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="4" width="18" height="4" rx="2"></rect>
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                                    <line x1="10" y1="12" x2="14" y2="12"></line>
                                 </svg></i></div>
                                Produtos
                            </a>
                            <a class="nav-link" href="dashboard_consulta_reservas.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <rect x="8" y="15" width="2" height="2"></rect>
                                 </svg></i></div>
                                Reservas
                            </a>
                           
                            <a class="nav-link" href="categorias.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                    <line x1="12" y1="10" x2="12" y2="16"></line>
                                    <line x1="9" y1="13" x2="15" y2="13"></line>
                                 </svg></div>
                                Site
                                </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php
                        if(isset ($session)){
                            echo $_SESSION['name'];
                        }else{
                            echo "Developer";
                        }
                        ?>
                        
                    </div>
                </nav>
            </div>
            
        <div id="layoutSidenav_content">
        <main>
            
        <div class="container-fluid px-4">
        <h1 class="mt-4">Atualização da Reserva</h1>          
        <div class="card mb-4">
        
        </div>
        <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
    
            <form class="row gx-3 gy-2 align-items-center" action="func_inserir_reservas.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <label for="nome do cliente">
            Nome Do Cliente:<input type="text" class="form-control" value = "<?php echo $select['nome_cliente']?>" id="nome_cliente"  name ="nome_cliente"></label>
            <br>
            <label for="e-mail">E-Mail:
            <input type="text"  class="form-control" value = "<?php echo $select['email_cliente']?>" id="email_cliente" name ="email_cliente"></label>
            <br>
            <div class=>
            <label  for="telefone">Telefone</label>
            <input type="text"  class="form-control" value = "<?php echo $select['telefone_cliente']?>" maxlength="14" size="14" id="telefone" name ="telefone_cliente"></label>
            </div>
            <br>
            <label for="data">Data da Reserva:
            <input type="datetime-local" class="form-control" value="<?php echo $dateStart?>" id="data_reserva"  name ="data_reserva" required></label>
            <br>
            <label for="precaucoes">Quantidade de Pessoas:
            <input type="text" class="form-control" value = "<?php echo $select['quantidade_pessoas']?>" id="quantidade_pessoas" name ="quantidade_pessoas" required></label>
            <br>
            <div>
             <input class = "btn btn-outline-success" type = "submit" value="Salvar">
             <a href = "dashboard_consulta_reservas.php"class = "btn btn-outline-success">Voltar</a>
            </div>
            </form>
            
            </div>

            </main>
            </div>
        
            <script>
               





            const input = document.getElementById("telefone");

            input.addEventListener("keyup", formatarTelefone);

            function formatarTelefone(e){

            var v=e.target.value.replace(/\D/g,"");

            v=v.replace(/^(\d\d)(\d)/g,"($1)$2"); 

            v=v.replace(/(\d{5})(\d)/,"$1-$2");    

e.target.value = v;



}


    </script>
        
        
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
