<?php

include "./classes/conexion.php";
include "./classes/crud.php";

$crud = new Crud();

$id = $_POST['id'];
$data = $crud->obterDados($id);
$idMongo = $data->_id;


?>


<?php include './header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">

                        <a href="./index.php" class="btn btn-outline-info">
                            <i class="fa-solid fa-angles-left"></i> Voltar
                        </a> <br> <br>
                        <h2>Atualizar Usuario</h2>
                        
                        <form action="./processos/update.php" method="post">
                            <input type="text" hidden value="<?php echo $idMongo; ?>" name="id">
                            <label for="paterno">Nome do pai</label>
                            <input type="text" class="form-control" name="paterno" id="paterno" value="<?php echo $data->paterno; ?>">
                            <label for="materno">Nome da mãe</label>
                            <input type="text" class="form-control" name="materno" id="materno" value="<?php echo $data->materno; ?>">
                            <label for="nombre">Nome</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $data->nombre; ?>">
                            <label for="fecha_nacimiento">Data de nascimento</label>
                            <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="<?php echo $data->fecha_nacimiento; ?>">
                            <button class="btn btn-warning mt-3">
                                <i class="fa-solid fa-floppy-disk"></i> Atualizar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php include './script.php' ?>