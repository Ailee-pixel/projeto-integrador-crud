<?php
session_start();
if (!isset($_SESSION[ 'loggedin' ])) {
	header( 'Location: dashboard.php' );
	exit;
}
 require_once("conexao.php");
$query = 'SELECT * FROM tabela_cliente' ;
$resultado = mysqli_query($con, $query);
$select = mysqli_fetch_assoc($resultado);
?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Forno & Lenha</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/embel.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.php">Forno & Lenha</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <div class="float-right">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        <li><a class="dropdown-item" href="acesso.php">Logout</a></li>
                    </ul>
                </li>

            </ul>
            </div>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <div class="sb-sidenav-menu-heading"></div>
                           
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
                            
                            <a class="nav-link" href="../index.php">
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
                        <div class="small">Logged in as :</div>
                       <?php if(isset ($session)){
                            echo $_SESSION[ 'name' ];
                        }else{
                            echo "Developer";
                        }
                        ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 row col">
                        <h1 class="mt-4">Painel de Controle:</h1>
                    <div>
                           
                        <a href="dashboard_consulta_produtos.php" id="anim-but" class="btn btn-outline-success btn-lg"><span>Produtos</span></a>
                  
                        <a href="dashboard_consulta_reservas.php" id="anim-but" class="btn btn-outline-warning btn-lg"><span>Reservas</span></a>
                 
                        <a href="../index.php" id="anim-but" class="btn btn-outline-danger btn-lg"><span>Site </span></a>
                    </div>


                        <div class="card-body">
                                <table class = "table table-hover">
                                <h1>Lista de Reservas:</h1>
                                <br>
                                <thead class="table-dark">
                                <tr class="text-center">
                                <th>Nome do Cliente:</th>
                                <th>E-Mail:</th>
                                <th>Telefone:</th>
                                <th>Data da Reserva:</th>
                                <th>Quantidade de Pessoas:</th>
                                </tr>
                                </thead>
                             
                            
                                <?php while($busca = $resultado->fetch_assoc()){ ?>
                                <tbody>
                                <tr class="text-center">
                                  

                                 
                                    <td>
                                    <?php echo $busca["nome_cliente"]?>
                                    </td>
                                    <td>
                                    <?php echo $busca["email_cliente"]?>
                                    </td>
                                    <td>
                                    <?php echo $busca["telefone_cliente"]?>
                                    </td>
                                    <td>
                                    <?php echo $busca["data_reserva"]?>
                                    </td>
                                    <td>
                                    <?php echo $busca["quantidade_pessoas"]?>
                                    </td>
                                </tr>



                                
                                </tbody>
                                </thead>
                                        <?php } ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Pizzaria Forno & Lenha</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
