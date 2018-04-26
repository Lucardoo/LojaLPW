<?php
require_once('../inc/conexao.php');

require_once ($base_path . 'inc/cabecalho.php');
if(isset($_SESSION['nome']))
{
  $id=$_GET['id'];

  $sql="SELECT * FROM produtos WHERE id='$id'";
  $res=pg_query($conexao,$sql);
  $arr=pg_fetch_array($res);

  ?>
  <form class="form-signin" action="<?php echo $base_url.'produtos/altera.php'; ?>" method="post">

    <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">

    <div class="form-label-group">
      <input type="text" step="0.010" name="nome" class="form-control" value="<?php echo $arr['nome']; ?>">
      <br><br>
    </div>

    <div class="form-label-group">
      <input type="number" step="0.01" name="preco" class="form-control" value="<?php echo $arr['preco']; ?>">
      <br><br>
    </div>

    <div class="form-label-group">
      <textarea name="descricao" rows="10" cols="155"><?php echo $arr['descricao']; ?></textarea>
      <br><br>
    </div>
    
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="botao"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alterar Produto</font></font></button>
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