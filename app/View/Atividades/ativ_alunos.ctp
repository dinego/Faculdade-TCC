<section class="atividade">
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Atividades</h2>
                </div>
                <div class="col-sm-4 text-right">
                    <ul>
                        <li><span class="ti-angle-left"></span> <a href="<?php echo $this->Html->url(array('controller' => 'alunos', 'action' => 'index')) ?>">Voltar para dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <table class="table tabl-bordered">
            <tr>
                <th>Foto do Prêmio:</th>
                <th>Título:</th>
                <th>Prêmio:</th>
                <th>Pontos para ganhar o prêmio:</th>
                <th>Pontos por acerto:</th>
            </tr>
            <?php
                foreach ($atividades as $key => $ativ) {
            ?>
                <tr style="cursor:pointer" onclick="location.href='<?php echo $this->Html->url(array("controller" => "atividades", "action" => "atividade", $ativ["Atividade"]["id"])); ?>'">
                    <td><img src="<?php echo $this->webroot . "fotos/" . $ativ['User']['id'] . "/premios/" . $ativ['Premiacao']['id'] . "/" . $ativ['Premiacao']['foto_premio'] ?>" class="img-circle" width="35" height="35" /></td>
                    <td><?php echo $ativ['Atividade']['titulo'] ?></td>
                    <td><?php echo $ativ['Premiacao']['titulo'] ?></td>
                    <td><?php echo $ativ['Premiacao']['pontos_final'] ?></td>
                    <td><?php echo $ativ['Premiacao']['pontos_individuais'] ?></td>
                </tr>
            <?php
                }
            ?>
            </table>
        </div>
    </div>
</section>