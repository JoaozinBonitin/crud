<?php session_start();
    require_once "./classes/conexion.php";
    require_once "./classes/crud.php";
    $crud = new Crud();
    $data = $crud->mostrarDados();

    $alert = '';

    if(isset($_SESSION['alert_crud'])){
        $alert = $crud->alertCrud($_SESSION['alert_crud']);
        unset($_SESSION['alert_crud']);
    }
?>


<?php include './header.php' ?>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Crud com mongodb e PHP</h2>
                        <a href="./adicionarUsuario.php" class="btn btn-primary">
                            <i class="fa-solid fa-user-plus"></i> Adicionar novo Usuário
                        </a>
                        <hr>
                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <th>Nome do Pai</th>
                                <th>Nome da Mãe</th>
                                <th>Nome</th>
                                <th>Data de nascimento</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </thead>
                            <tbody>
                            <?php 
                                foreach($data as $item){
                            ?>
                                <tr>
                                    <td><?php echo $item->paterno; ?></td>
                                    <td><?php echo $item->materno; ?></td>
                                    <td><?php echo $item->nombre; ?></td>
                                    <td><?php echo $item->fecha_nacimiento; ?></td>
                                    <td class="text-center">
                                        <form action="./update.php" method="post">
                                            <input type="text" hidden value="<?php echo $item->_id; ?>" name="id">
                                            <button class="btn btn-warning">
                                                <i class="fa-solid fa-user-pen"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="./excluir.php" method="post">
                                            <input type="text" hidden value="<?php echo $item->_id; ?>" name="id">
                                            <button class="btn btn-danger">
                                                <i class="fa-solid fa-user-xmark"></i> 
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


<?php include './script.php' ?>

<script>
    let alert = <?php echo $alert; ?>;
    console.log(alert);
</script>
