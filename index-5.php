<?php include'header.php'; ?>
</header>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <h4>Contato</h4>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122845.87069309254!2d-48.11971650247859!3d-15.807462253519315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a330dea076069%3A0x7f6433e22e87f312!2sTaguatinga%2C+Bras%C3%ADlia+-+DF!5e0!3m2!1spt-BR!2sbr!4v1472977089178"></iframe></div>
                    <address>
                        <br><br><strong class="clr">Concrid Engenharia<br>
                            Taguatinga<br>
                            Distrito Federal</strong><br>
                        <span>Whatsapp:</span>+55 61 984026001<br>
                        E-mail: <a href="david.rodrigues@concrid.com"><u>david.rodrigues@concrid.com</u></a>
                    </address>

                </div>  
                <div class="span6">
                    <h4>Preencha</h4>
                    <div class="contact-form">
                        <form id="contact-form">
                            <div class="success">Contact form submitted!<strong><br>We will be in touch soon.</strong> </div>
                            <fieldset>
                                <label class="name">
                                    <input type="text" value="Nome:">						
                                    <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span>						
                                </label>	
                                <label class="email">						
                                    <input type="email" value="E-mail:">						
                                    <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>						
                                </label>
                                <label class="phone">						
                                    <input type="text" value="Telefone:">						
                                    <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>						
                                </label>		
                                <label class="message">						
                                    <textarea>Messagem:</textarea>						
                                    <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>						
                                </label>
                            </fieldset>
                            <div class="pull-right">
                                <a href="#" class="btn btn_ btn-small_" data-type="reset">limpa</a>
                                <a href="#" class="btn btn_ btn-small_" data-type="submit">enviar</a>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>           
        </div>
    </div>
</section>
<?php include'footer.php'; ?>