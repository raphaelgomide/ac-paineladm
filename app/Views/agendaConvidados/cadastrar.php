<div class="col-xl-4 col-md-6 mx-auto p-5">


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>/agendaController">Agenda Convidados</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cadastrar Novo Evento</li>
        </ol>
    </nav>

    <!-- Captura de horas para definição de data minima dos campos date -->
    <?php $diaHoje = date('Y-m-d');?>

    <div class="card">
        <div class="card-body">
            <h2>Cadastrar Novo Evento</h2>
            <small>Preencha o formulário abaixo para cadastrar um novo evento</small>

            <form name="cadastrar" method="POST" action="<?php echo URL ?>/agendaController/cadastrar">
                <div class="mb-3 mt-3">
                    <label for="txtNomeConvidado" class="form-label">Nome do Convidado: *</label>
                    <input type="text" class="form-control <?php echo $dados['nome_erro'] ? 'is-invalid' : '' ?>" name="txtNomeConvidado" id="txtNomeConvidado">
                    <!-- Div para exibir o erro abaixo do campo -->
                    <div class="invalid-feedback"><?php echo $dados['nome_erro'] ?></div>
                </div>

                <div class="mb-3">
                    <label for="txtDataEntrevistaEscrita" class="form-label">Data Entrevista Escrita: *</label>
                    <input type="date" class="form-control <?php echo $dados['dataEntrevista_erro'] ? 'is-invalid' : '' ?>" name="txtDataEntrevistaEscrita" id="txtDataEntrevistaEscrita" min="<?php echo $diaHoje?>">
                    <div class="invalid-feedback"><?php echo $dados['dataEntrevista_erro'] ?></div>
                </div>

                <div class="mb-3">
                    <label for="txtLinkEntrevistaEscrita" class="form-label">Link Entrevista Escrita:</label>
                    <input type="text" class="form-control <?php echo $dados['confirma_senha_erro'] ? 'is-invalid' : '' ?>" name="txtLinkEntrevistaEscrita" id="txtLinkEntrevistaEscrita">
                </div>

                <div class="mb-3">
                    <label for="txtDataTreinamento" class="form-label">Data e Hora do Treinamento: </label>
                    <input type="date" class="form-control" name="txtDataTreinamento" id="txtDataTreinamento" min="<?php echo $diaHoje?>">
                    <br>
                    <input type="time" class="timepicker" id="demo" name="txtHoraTreinamento" id="txtHoraTreinamento"/>
                </div>

                <div class="mb-3">
                    <label for="txtDataLivee" class="form-label">Data e Hora da Live:</label>
                    <input type="date" class="form-control" name="txtDataLive" id="txtDataLive" min="<?php echo $diaHoje?>">
                    <div class="invalid-feedback"><?php echo $dados['email_erro'] ?></div>
                    <br>
                    <input type="time" class="timepicker" id="demo" name="txtHoraLive" id="txtHoraLive"/>
                    <div class="invalid-feedback"><?php echo $dados['email_erro'] ?></div>
                </div>

                <div class="mb-3">
                    <label for="txtLinkLivee" class="form-label">Link da Live:</label>
                    <input type="text" class="form-control" name="txtLinkLive" id="txtLinkLive">
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
<script>
    $(document).ready(function() {

        $('.timepicker').qcTimepicker();

    });

    $('.timepicker').qcTimepicker({

        // additional CSS classes
        classes: 'form-control',

        // time format
        format: 'H:mm',

        // min/max time
        minTime: '14:00:00',
        maxTime: '19:59:59',

        // step size in ms
        step: 900,

        // custom placeholder
        placeholder: '--:--',

    });
</script>