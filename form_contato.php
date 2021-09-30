<div class="row">

  <form class="form-horizontal" name="agenda" action="dao/cad_contato.php" method="post" >
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome" autofocus required>
    </div>
    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com.br" required>
    </div>
    <div class="form-group">
      <label>Telefone</label>
      <input type="tel" class="form-control telefone" name="telefone" >
    </div>
    <div class="form-group">
      <label>Celular</label>
      <input type="tel" class="form-control celular" name="celular" >
    </div>
    



    <div class="form-group">
      <label>Secretaria </label>
      <input type="text" list="outro" name="outro" autocomplete="on" placeholder="">
      <datalist id="outro">
        <option value="Gestao">
        <option value="Financas">
        <option value="Gabinete">
        <option value="Saude">
        <option value="Educacao">
      </datalist>  
    </div>
    
<!-- 	<div class="form-group">
	  <label>Secretaria </label>
	  <input type="text" list="grupo" name="grupo" autocomplete="on" placeholder="Estado">
	  <datalist id="grupo">
		<option value="Alagoas">
		<option value="Bahia">
		<option value="Pernambuco">
		<option value="Sergipe">
	  </datalist>
	</div> -->
	
	<div class="form-group">
      <label>Setor</label>
      <input type="text" class="form-control grupo" name="grupo" placeholder="Setor">
    </div>
                      
                      
                      
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <button type="reset" class="btn btn-primary">Limpar</button>

   </form>
</div>