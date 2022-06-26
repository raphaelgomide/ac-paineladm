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
                <div class="mb-3 mt-3">
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
                    <label for="cboPerfilUsuario" class="form-label">Perfil usuário: *</label>
                    <select class="form-select <?php echo $dados['perfilUsuario_erro'] ? 'is-invalid' : '' ?>" name="cboPerfilUsuario" id="cboPerfilUsuario">
                        <option value="NULL"></option>
                        <?php foreach ($dados['perfilUsuario'] as $perfilUsuario) {
                            //Resgata valor do select 
                            $perfilUsuarioSelected = '';
                            if ($perfilUsuario->id_perfil_usuario == $dados['usuario']->fk_perfil_usuario) {
                                $perfilUsuarioSelected = 'selected';
                            }
                        ?>
                            <option <?php echo $perfilUsuarioSelected ?> value="<?php echo $perfilUsuario->id_perfil_usuario ?>"><?php echo $perfilUsuario->ds_perfil_usuario ?></option>
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback"><?php echo $dados['perfilUsuario_erro'] ?></div>
                </div>
                <div class="mb-3">
                    <label for="cboEditoriaUsuario" class="form-label">Editoria usuário: *</label>
                    <select class="form-select <?php echo $dados['editoriaUsuario_erro'] ? 'is-invalid' : '' ?>" name="cboEditoriaUsuario" id="cboEditoriaUsuario">
                        <option value="NULL"></option>
                        <?php foreach ($dados['editoriaUsuario'] as $editoriaUsuario) {
                            //Resgata valor do select 
                            $editoriaSelected = '';
                            if ($editoriaUsuario->id_editoria == $dados['usuario']->fk_editoria) {
                                $editoriaSelected = 'selected';
                            }
                        ?>
                            <option <?php echo $editoriaSelected ?> value="<?php echo $editoriaUsuario->id_editoria ?>"><?php echo $editoriaUsuario->ds_editoria ?></option>
                        <?php
                        } ?>
                    </select>
                    <div class="invalid-feedback"><?php echo $dados['editoriaUsuario_erro'] ?></div>
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