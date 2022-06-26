<div class="container py-5">

    <?php echo Alertas::mensagem('editorias') ?>

    <div class="card">

        <div class="artcor card-header">

            <h5>Editorias
                <div style="float: right;">
                    <a href="<?php echo URL ?>/editoriasController/cadastrar" class="btn btn-artcor">Nova Editoria</a>
                </div>
            </h5>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Editoria</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Exibe mensagem caso não tenha nenhum evento
                        if (empty($dados['editorias'])) { ?>

                            <tr>
                                <td colspan="1" class="align-middle">Nenhuma Editoria cadastrada</td>
                            </tr>


                        <?php  }


                        foreach ($dados['editorias'] as $editorias) { ?>

                            <tr>
                                <td><?php echo ucfirst($editorias->ds_editoria) ?></td>

                                <td><a href="<?php echo URL . '/editoriasController/editar/' . $editorias->id_editoria ?>" class="btn btn-artcor"><i class="bi bi-pencil-square"></i></a></td>
                                <td>
                                    <form action="<?php echo URL . '/editoriasController/deletar/' . $editorias->id_editoria ?>" method="POST">
                                        <button type="submit" class="btn btn-danger"><span><i class="bi bi-trash-fill"></i></span></button>
                                    </form>
                                </td>
                            </tr>

                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>