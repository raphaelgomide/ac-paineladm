<div class="col-xl-4 col-md-6 mx-auto p-5">


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>/editoriasController">Editorias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar Nova Editoria</li>
        </ol>
    </nav>


    <div class="card">
        <div class="card-body">
            <h2>Cadastrar Nova Editoria</h2>
            <small>Preencha o formulário abaixo para cadastrar um nova editoria</small>

            <form name="cadastrar" method="POST" action="<?php echo URL ?>/editoriasController/cadastrar">
                <div class="mb-3 mt-3">
                    <label for="txtEditoria" class="form-label">Nome do Editoria: *</label>
                    <input type="text" class="form-control <?php echo $dados['editoria_erro'] ? 'is-invalid' : '' ?>" name="txtEditoria" id="txtEditoria" value="<?php echo $dados['txtEditoria'] ?>">
                    <!-- Div para exibir o erro abaixo do campo -->
                    <div class="invalid-feedback"><?php echo $dados['editoria_erro'] ?></div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" value="Cadastrar" class="btn btn-artcor">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
