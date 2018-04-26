<?php
require_once('../inc/conexao.php');

require_once ($base_path . 'inc/cabecalho.php');
if(isset($_SESSION['nome']))
{
?>
<form class="form-signin" action="<?php echo $base_url.'produtos/adiciona.php'; ?>" method="post">

      <div class="form-label-group">
        <input type="text" step="0.010" name="nome" class="form-control" placeholder="                                                                                                                        Nome">
        <br><br>
      </div>

      <div class="form-label-group">
        <input type="number" step="0.01" name="preco" class="form-control" placeholder="                                                                                                                        Preço">
       	<br><br>
      </div>

      <div class="form-label-group">
        <textarea name="descricao" rows="10" cols="155"  placeholder="                                                                                                                 Escreva a descrição"></textarea>
       	<br><br>
      </div>

      
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="botao"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adicionar Produto</font></font></button>
      <a href="<?php echo $base_url.'produtos/index.php'; ?>" class="btn btn-secondary btn-lg btn-block">Voltar</a>
</form>
<?php
}
else
{
  header('Location: '.$base_url.'index.php');
}
require_once($base_path . 'inc/rodape.php');
?>