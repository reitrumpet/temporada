<?php include("./header.php"); ?>

<div class="topo50">&nbsp;</div>
<div class="container branco">
    <h2>Contato</h2>
    <h3>Nos envie suas sugest&otilde;es, cr&iacute;ticas, coment&aacute;rios!</h3>
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
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <select class="form-control" name="assunto">
                            <option value="0">Selecione o assunto da mensagem.</option>
                            <option value="1">Sugest&otilde;es</option>
                            <option value="2">Cr&iacute;ticas</option>
                            <option value="3">Coment&aacute;rios</option>
                            <option value="4">Outro</option>
                        </select>     
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control textarea" rows="3" name="Messagem" id="Message" placeholder="Messagem"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn main-btn pull-right">Send a message</button>
                </div>
            </div>
        </form>
    </div>
</div>



<?php include("./footer.php"); ?>
