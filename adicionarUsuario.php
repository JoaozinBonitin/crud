<?php include './header.php' ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">

                        <a href="./index.php" class="btn btn-outline-info">
                            <i class="fa-solid fa-angles-left"></i> Voltar
                        </a> <br> <br>
                        <h2>Adicionar novo Usuario</h2>
                        
                        <form action="./processos/insert.php" method="post">
                            <label for="paterno">Nome do pai</label>
                            <input type="text" class="form-control" name="paterno" id="paterno" required>
                            <label for="materno">Nome da mãe</label>
                            <input type="text" class="form-control" name="materno" id="materno" required>
                            <label for="nombre">Nome</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                            <label for="fecha_nascimento">Data de nascimento</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nascimento" class="form-control" required>
                            <button class="btn btn-primary mt-3">
                                <i class="fa-solid fa-floppy-disk"></i> Adicionar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php include './script.php' ?>