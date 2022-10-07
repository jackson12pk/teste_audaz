<?php include_once 'inc/header.php'; ?>
        
    <div class="container">

        <h3 class="text-center mb-4">Cadastro de Operadora</h3>

        <div class="card-form">
            <form action="/app/controllers/OperatorController.php" method="POST">
                
                <div class="mb-3">
                    <label for="NOME">NOME:</label>
                    <input class="form-control" type="text" name="NOME" id="NOME" required>
                </div>

                <button class="btn btn-success w-100" type="submit" name="CreateOperator">Cadastrar</button>
                
            </form>
        </div>
    </div>

    <div class="container mt-5 w-50">
        
        <?php if(!empty($_SESSION['OP'])): ?>

            <table class="table table-striped table-bordered table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach ($_SESSION['OP'] as $Key =>$Operator): ?>
                        
                        <tr class="">
                            <td><?=$Key;?></td>
                            <td><?=$Operator['Name'];?></td>
                        </tr>
                        
                    <?php endforeach; ?>
                
                </tbody>
            </table>

        <?php else: ?>
            <div class="bg-secondary p-4 mt-4 rounded fw-bold text-center text-white">Nenhum cadastro encontrado!</div>
        <?php endif; ?>

    </div>

<?php include_once 'inc/footer.php'; ?>
        