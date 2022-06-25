<div class="col-xl-4 col-md-6 mx-auto p-5">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>/usuariosController">Usuários</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $dados['usuario']->ds_nome_usuario ?></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <h2>Editar Usuário</h2>
            <small>Preencha o formulário abaixo para edtar usuário</small>

            <form name="editar" method="POST" action="<?php echo URL . '/usuariosController/editar/' . $dados['usuario']->id_usuario ?>">
                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome: *</label>
                    <input type="text" class="form-control <?php echo $dados['nome_erro'] ? 'is-invalid' : '' ?>" name="txtNome" id="txtNome" value="<?php echo $dados['usuario']->ds_nome_usuario ?>">
                    <!-- Div para exibir o erro abaixo do campo -->
                    <div class="invalid-feedback"><?php echo $dados['nome_erro'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="txtEmail" class="form-label">E-mail: *</label>
                    <input type="text" class="form-control <?php echo $dados['email_erro'] ? 'is-invalid' : '' ?>" name="txtEmail" id="txtEmail" value="<?php echo $dados['usuario']->ds_email_usuario ?>">
                    <div class="invalid-feedback"><?php echo $dados['email_erro'] ?></div>
                </div>

                <div class="mb-3">
                    <label for="cboTipoUsuario" class="form-label">Tipo usuário: *</label>
                    <select class="form-select <?php echo $dados['tipoUsuario_erro'] ? 'is-invalid' : '' ?>" name="cboTipoUsuario" id="cboTipoUsuario">
                        <option value="NULL"></option>
                        <?php foreach ($dados['tiposUsuario'] as $tiposUsuario) {
                            //Resgata valor do select 
                            $tiposUsuarioSelected = '';
                            if ($tiposUsuario->id_tipo_usuario == $dados['usuario']->fk_tipo_usuario) {
                                $tiposUsuarioSelected = 'selected';
                            }
                        ?>
                            <option <?php echo $tiposUsuarioSelected ?> value="<?php echo $tiposUsuario->id_tipo_usuario ?>"><?php echo $tiposUsuario->ds_tipo_usuario ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback"><?php echo $dados['tipoUsuario_erro'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="cboCargoUsuario" class="form-label">Cargo usuário: *</label>
                    <select class="form-select <?php echo $dados['tipoCargo_erro'] ? 'is-invalid' : '' ?>" name="cboCargoUsuario" id="cboCargoUsuario">
                        <option value="NULL"></option>
                        <?php foreach ($dados['cargoUsuario'] as $cargoUsuario) {
                            //Resgata valor do select 
                            $cargoSelected = '';
                            if ($cargoUsuario->id_cargo == $dados['usuario']->fk_cargo) {
                                $cargoSelected = 'selected';
                            }
                        ?>
                            <option <?php echo $cargoSelected ?> value="<?php echo $cargoUsuario->id_cargo ?>"><?php echo $cargoUsuario->ds_cargo ?></option>
                        <?php
                        } ?>
                    </select>
                    <div class="invalid-feedback"><?php echo $dados['tipoCargo_erro'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="txtSenha" class="form-label">Senha: *</label>
                    <input type="password" class="form-control <?php echo $dados['senha_erro'] ? 'is-invalid' : '' ?>" name="txtSenha" id="txtSenha" value="">
                    <div class="invalid-feedback"><?php echo $dados['senha_erro'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="txtConfirmaSenha" class="form-label">Confirmar Senha: *</label>
                    <input type="password" class="form-control <?php echo $dados['confirma_senha_erro'] ? 'is-invalid' : '' ?>" name="txtConfirmaSenha" id="txtConfirmaSenha">
                    <div class="invalid-feedback"><?php echo $dados['confirma_senha_erro'] ?></div>
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