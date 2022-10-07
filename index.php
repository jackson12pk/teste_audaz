<?php require_once 'vendor/autoload.php'; ?>
<?php include_once 'inc/header.php'; ?>

    <div class="container">

        <h3 class="text-center mb-4">Cadastro de Tarifa</h3>

        <div class="card-form">
            <form action="/app/controllers/FareController.php" method="POST">
                    
                <div class="mb-3">
                    
                    <?php if(!empty($_SESSION["OP"])): ?>
                        
                        <label for="OPERADORA">OPERADORA:</label>
                        <select class="form-control" name="OPERADORA" id="OPERADORA" required>
                            <option value="" disabled selected>Selecione uma Operadora</option>
                            <?php foreach($_SESSION["OP"] as $Key => $Operator): ?>
                                <option value="<?=$Key;?>"><?=$Operator['Name'];?></option>
                            <?php endforeach; ?>
                        </select>

                        <?php else: ?>
                            
                            <div class="text-center bg-secondary rounded p-3">
                                <label>Não há operadoras cadastradas!</label>
                                <a class="btn-create" href="/cadastroOperadora.php">Cadastre uma Operadora</a>
                            </div>

                        <?php endif; ?>
                        
                </div>
                
                <div class="mb-3">
                    <label for="VALOR">VALOR:</label>
                    <input class="form-control maskPercentual" type="text" name="VALOR" id="VALOR" required>
                </div>

                <div class="mb-3">
                    <label for="CRIADOEM">CRIADO EM:</label>
                    <input class="form-control" type="datetime-local" name="CRIADOEM" id="CRIADOEM" required>
                </div>
                
                <div class="mb-3">
                    <label for="STATUS">STATUS:</label>
                    <select class="form-control" name="STATUS" id="STATUS" required>
                        <option value="" disabled selected>Selecione um status</option>
                        <option value="1">Ativo</option>
                        <option value="0">Inativo</option>
                    </select>
                </div>
                
                <button class="btn btn-primary w-100" type="submit" name="CreateFare">Cadastrar</button>
                
            </form>
        </div>
    </div>

    <div class="container mt-5 w-50">

        <?php if(!empty($_SESSION['OP'])): ?>
            
            <table class="table table-striped table-bordered table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Valor</th>
                        <th>Operadora</th>
                        <th>Criado Em</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($_SESSION['OP'] as $Operator): ?>
                    <?php foreach ($Operator["Fares"] as $Fare): ?>
                        <tr>
                            <td><?=$Fare['Id'];?></td>
                            <td><?=number_format($Fare['Value'], 2, ',', '.');?></td>
                            <td><?=$Fare['OperatorId'];?> - <?=$Operator["Name"];?></td>
                            <td><?=date("d/m/Y H:i:s", strtotime($Fare['Created']));?></td>
                            <td><?=$Fare['Status'] ? "Ativo" : "Inativo";?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endforeach; ?>
                
                </tbody>
            </table>

        <?php else: ?>
            <div class=" bg-secondary p-3 my-4 rounded fw-bold text-center text-white">Nenhum cadastro encontrado!</div>
        <?php endif; ?>

    </div>

<?php include_once 'inc/footer.php'; ?>
        