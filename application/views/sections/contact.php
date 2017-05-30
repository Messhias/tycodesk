<section id="contact" class="block background-color-grey-dark has-dark-background">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <!-- <a href="<?=site_url('') ?>"><img src="<?=site_url('assets/img/praias.png');?>"></a> -->
                        <section class="agent">
                            <div class="agent-wrapper">
                                <p>Este site é mantido e administrado por Francisco Norberto de Lima - Consultor de Vendas da Desktop - Sigmanet.
                                A empresa não tem nenhuma responsabilidade na criação do sites, sendo ele apenas uma ferramenta facilitadora do trabalho do consultor.</p>
                            </div>
                        <div class="agent-contact">
                            <div><strong>Telefone:</strong> +55 19 98716-2828​⁠​</div>
                            <div><strong>E-mail:</strong> <a href="mailto:mr.tyco@gmail.com">mr.tyco@gmail.com</a></div>
                        </div>
                    </section>
                </div>
                <div class="col-md-8 col-sm-8">
                    <header><h3>Formulário de Contato</h3></header>
                    <form role="form" id="form-contact" name="form-contact" method="post" action="<?=site_url('welcome/contact');?>">
                        
                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-form-name">Seu Nome<em>*</em></label>
                                    <input type="text" class="form-control" id="contact-form-name" name="contact-form-name" required>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-form-email">Seu E-mail<em>*</em></label>
                                    <input type="email" class="form-control" id="contact-form-email" name="contact-form-email" required>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-form-address">Endereço</label>
                                    <input type="text" class="form-control" id="contact-form-address" name="address" >
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-form-complement">Complemento</label>
                                    <input type="text" class="form-control" id="contact-form-complement" name="complement">
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                        <div class="row">

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="contact-form-neighborhood">Bairro</label>
                                    <input type="text" class="form-control" id="contact-form-neighborhood" name="neighborhood">
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->

                        </div><!-- /.row -->

                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-form-city">Cidade</label>
                                    <input type="text" class="form-control" id="contact-form-city" name="city" >
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-form-zipcode">CEP</label>
                                    <input type="text" class="form-control" id="contact-form-zipcode" name="zipcode">
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->


                        <div class="row">

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-form-tel">Telefone <em>*</em></label>
                                    <input type="text" class="form-control" id="contact-form-tel" name="tel" required="true" >
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="contact-form-mobile">Celular <em>*</em></label>
                                    <input type="text" class="form-control" id="contact-form-mobile" name="mobile" required="true">
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-6 -->
                        </div><!-- /.row -->

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="contact-form-message">Sua Mensagem<em>*</em></label>
                                    <textarea class="form-control" id="contact-form-message" rows="6" name="contact-form-message" required></textarea>
                                </div><!-- /.form-group -->
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                        <div class="form-group">
                            <button type="submit" class="btn pull-right btn-large btn-danger" id="form-contact-submit">Enviar</button>
                        </div><!-- /.form-group -->
                        <div id="form-status"></div>
                    </form><!-- /#form-contact -->
                </div>
            </div>
        </div>
    </section>