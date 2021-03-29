<h1> Login  </h1>

<form action="<? route('c.save') ?>" method="POST">
<input type="hidden" name="_token" value="csrf_token()">
<input type="hidden" name="_method" value="PUT">
ID: <input type="text" name="name"><br>
Senha: <input type="password" name="age"><br>
<input type="submit" value="Salvar">
</form>

<br>
<a href="<? route('c.list')?>">Ainda não Cadastrado ?</a>