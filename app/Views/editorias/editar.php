<div class="col-xl-4 col-md-6 mx-auto p-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>/editoriasController">Editorias</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $dados['editoria']->ds_editoria ?></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <h2>Editar Editoria</h2>
            <small>Preencha o formulário abaixo para editar a Editoria</small>

            <form name="editar" method="POST" action="<?php echo URL . '/editoriasController/editar/' . $dados['editoria']->id_editoria ?>">
                <div class="mb-3 mt-3">
                    <label for="txtEditoria" class="form-label">Nome da Editoria: *</label>
                    <input type="text" class="form-control <?php echo $dados['editoria_erro'] ? 'is-invalid' : '' ?>" name="txtEditoria" id="txtEditoria" value="<?php echo $dados['editoria']->ds_editoria ?>">
                    <!-- Div para exibir o erro abaixo do campo -->
                    <div class="invalid-feedback"><?php echo $dados['editoria_erro'] ?></div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" value="Salvar" class="btn btn-artcor">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>