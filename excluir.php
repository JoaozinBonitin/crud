<?php



?>

<?php
 include './classes/conexion.php';
 include './classes/crud.php';
 include './header.php';

 $crud = new Crud();
 $id = $_POST['id'];

 $data = $crud->obterDados($id);
 echo $data->nombre;

?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4 background-card-delete">
                    <div class="card-body">

                        <a href="./index.php" class="btn btn-outline-info">
                            <i class="fa-solid fa-angles-left"></i> Voltar
                        </a> <br> <br>
                        <h2>Excluir Usuario</h2>
                        
                        <table class="table table-sm">
                            <thead>
                                <th>Nome do Pai</th>
                                <th>Nome da Mãe</th>
                                <th>Nome</th>
                                <th>Data de nascimento</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $data->paterno;?></td>
                                    <td><?php echo $data->materno;?></td>
                                    <td><?php echo $data->nombre;?></td>
                                    <td><?php echo $data->fecha_nacimiento;?></td>
                                </tr>
                            </tbody>
                        </table>

                        <hr>

                        <div class="alert alert-danger" role="alert">
                            <p>Tem certeza que deseja excluir este usuario?</p>
                            <p>Esta ação não poderá ser desfeita</p>
                        </div>

                        <form action="./processos/delete.php" method="post">
                            <input type="text" name="id" value="<?php echo $data->_id; ?>" hidden>
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-user-xmark"></i> Excluir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php include './script.php' ?>