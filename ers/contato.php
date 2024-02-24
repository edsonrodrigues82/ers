<?php  include("header.php"); ?>

<!-- header-btm starts
  ================================================== -->
  <section id="header-btm" class="clearfix">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h4 class="heading-icon"><img src="img/icons/heading-icon-mail.png" width="40" height="40" alt="icon" class="icon-small-bg"> Fale conosco</h4>
        </div>
      </div>
    </div>
  </section>
<!-- header-btm ends
  ================================================== -->

<!-- content starts
  ================================================== -->
  <section id="content" class="clearfix">
    <div class="container">
      <div class="row">

        <!--main content starts-->
        <div class="main-content span8">
          <p>Estamos muito interessados no que você tem a dizer. <br>Por isso, criamos este espaço especialmente para você fazer seus comentários, dar sugestões e esclarecer dúvidas. Escreva pra gente! Sua opinião é fundamental para o nosso aperfeiçoamento.</p>
          <p>Nome | E-mail | Assunto: Dúvidas sobre aquisição, Fazer aquisição de um sistema, Suporte ao aplicativo _____, Aquisição ao aplicativo _______. </p>


          <form action="" id="the-form">
            <p>
              E-mail
              <input name="..." data-validation="email" data-validation-help="Som help info...">
            </p>
            <p>
              URL
              <input name="..." data-validation="url">
            </p>
            <p>
              Only allows alphanumeric characters and hyphen and underscore
              <input name="..." data-validation="alphanumeric" data-validation-allowing="-_">
            </p>
            <p>
              Only lowercase letters a-z (regexp)
              <input name="..." data-validation="custom" data-validation-regexp="^([a-z]+)$">
            </p>
            <p>
              Minimum 5 chars
              <input name="..." data-validation="length" data-validation-length="min5">
            </p>
            <p>
              Maximum 5 chars
              <input name="..." data-validation="length" data-validation-length="max5">
            </p>
            <p>
              Between 3-5 chars
              <input name="..." data-validation="length" data-validation-length="3-5">
            </p>
            <p>
              What's your favorite color?
              <input name="..." data-suggestions="White, Green, Blue, Black, Brown">
            </p>
            <p>
              Validate e-mail but only if an answer is given
              <input name="..." data-validation="email" data-validation-optional="true">
            </p>
            <p>
              Restrict length
              <span id="max-length-element">100</span> chars left
              <textarea id="the-textarea" name="text"></textarea>
            </p>
            <p>
              <input type="submit">
            </p>
          </form>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
          <script>
            $.validate();
            $('#my-textarea').restrictLength( $('#max-length-element') );
          </script>

          <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css"
          rel="stylesheet" type="text/css" />







<!--
          <form  id="contactform" method="post" action="./contato.php?action=send">
            <fieldset>
              <p>
                <label>Nome:</label>
                <input name="name"  type="text">
              </p>
              <p>
                <label>Empresa:</label>
                <input name="company"  type="text">
              </p>
              <p>
                <label>Telefone:</label>
                <input name="phone" class="number"  type="text">
              </p>
              <p>
                <label>E-mail :</label>
                <input name="email"  class="required email" type="text">
              </p>
              <p class="antispam">Leave this empty: <br />
                <input name="url" />
              </p>
              <p>
                <label>Mensagem:</label>
                <textarea  rows="4" name="message" id="message" class="required"></textarea>
              </p>
              <p>
                <input type="submit" value="Enviar Mensagem" class="submit"/>
              </p>
              <div class="clearfix"></div>
              <div id="result"></div>
            </fieldset>
          </form>
        -->

      </div>
      <!--main content ends-->

      <!--sidebar starts-->
      <div class="sidebar span4 contact">
        <h4>Venda de Sitemas & Suporte</h4>
        <p>For bulk and custom works contact us by mail or phone. </p>
        <h5>Setor comercial</h5>
        E-mail: <a href="#" class="color"><em>comercial@erssolucoes.com.br</em></a><br>
        Celular: <a href="#" class="color"><em>(89) 9 9999.9999</em></a>
        <div class="spacer-20px"></div>
        <h5>Suporte técnico</h5>
        E-mail: <a href="#" class="color"><em>suporte@erssolucoes.com.br</em></a><br>
        Celular: <a href="#" class="color"><em>(89) 9 8888.8888</em></a><br>
        Skype: <a href="#" class="color"><em>skype.com/edsonaccess</em></a>

        <div class="spacer-20px"></div>

        <!--sidebar ends-->

      </div>
    </div>
  </section>
<!-- content ends
  ================================================== -->

  <?php include("footer.php"); ?>