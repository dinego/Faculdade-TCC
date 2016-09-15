<section class="perfil">
    <div class="headerPerfil pad-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="avatar">
                        <?php
                            if (!empty($user['foto'])) {
                                echo '<img src="' . $this->webroot . 'fotos/' . $user['id'] . '/' . $user['foto'] . '" alt="..." class="rounded" width="120">';
                            } else {
                                echo '<img src="' . $this->webroot . 'img/img.jpg" alt="..." class="rounded" width="120">';
                            }
                        ?>
                    </div>
                    <h3 class="text-center"><?php echo $usuario['User']['nome'] ?></h3>
                </div>

            </div>
        </div>
    </div>
    
    <div class="info pad-40">
        <div class="container">
            <div class="row">
               
                <div class="col-sm-6">
                    <div class="atividadesCompletas text-center">
                        <h3><?php echo $total_Ativs; ?></h3>
                        <p>Atividades completas</p>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="pontuacaoAlcancada text-center">
                        <h3><?php echo $pontos_alcancados; ?></h3>
                        <p>Pontos alcançados</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="resumo pad-40">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="dataEntrada text-center">
                        <p>
                        Entrou em 
                        <?php 
                            echo $entrada;
                        ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>