<?php include("./header.php"); ?>

<div class="topo50">&nbsp;</div>
<div class="container branco">
    <h2>Cadaste-se</h2>
</div>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<div class="container">
    <div class="row">
        <form role="form" id="contact-form" class="contact-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" name="Nome" autocomplete="off" id="Name" placeholder="Nome">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                    </div>
                </div>
                <div class="col-md-12 branco">
                    <h3>Sexo</h3>
                    <select name="sexo" class="form-control rodape20">
                        <option value="0">Sexo</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="divider branco">
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn main-btn pull-right">Cadastre-se</button>
                </div>
            </div>
        </form>
    </div>
</div>



<?php include("./footer.php"); ?>
