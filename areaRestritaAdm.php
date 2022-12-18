<?php
	
  $acao = 'recuperar';
  require_once 'controller/medico.controller.php';
  $acaoPa = 'recuperar';
  require_once 'controller/paciente.controller.php';
  $acaoEsp = 'recuperar';
  require_once 'controller/especialidade.controller.php';
  $acaoMedEsp = 'recuperar';
  require_once 'medicoEsp.controller.php';
  $acaoPato = 'recuperar';
  require_once 'controller/patologia.controller.php';
  //echo $_GET['metodo'];
?>

<hr>
<h1> Médico</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Editar</th>
      <th>excluir</th>
    </tr>
  </thead>
		<?php foreach($medico as $indice => $medico){?>
        <tbody>
          <tr>
            <td><?= $medico->nome;?></td>
            <td><a href='index.php?link=2&metodo=alterar&id=<?= $medico->id;?>'><i class="material-icons">create</i></a></td>
            <td><a href='index.php?link=2&metodo=excluir&id=<?= $medico->id;?>'><i class="material-icons">delete</i></a></td>
          </tr>
         </tbody>
		<?php } ?>
    <a href="index.php?link=2">Cadastro</a>

</table>

<hr>
<h1> Paciente</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Editar</th>
      <th>excluir</th>
    </tr>
  </thead>
		<?php foreach($paciente as $indice => $paciente){?>
        <tbody>
          <tr>
            <td><?= $paciente->nome;?></td>
            <td><a href='index.php?link=4&metodo=alterar&id=<?= $paciente->id;?>'><i class="material-icons">create</i></a></td>
            <td><a href='index.php?link=4&metodo=excluir&id=<?= $paciente->id;?>'><i class="material-icons">delete</i></a></td>
          </tr>
         </tbody>
		<?php } ?>
    <a href="index.php?link=4">Cadastro</a>

</table>

</table>

<hr>
<h1> Especialidade </h1>

<table>
  <thead>
    <tr>
      <th>Especialidade</th>
      <th>Editar</th>
      <th>excluir</th>
    </tr>
  </thead>
		<?php foreach($especialidade as $indice => $especialidade){?>
        <tbody>
          <tr>
            <td><?= $especialidade->nome;?></td>
            <td><a href='index.php?link=5&metodo=alterar&id=<?= $especialidade->id;?>'><i class="material-icons">create</i></a></td>
            <td><a href='index.php?link=5&metodo=excluir&id=<?= $especialidade->id;?>'><i class="material-icons">delete</i></a></td>
          </tr>
         </tbody>
		<?php } ?>
    <a href="index.php?link=5">Cadastro</a>
</table>

<h1> Especialidade Médico </h1>

<table>
  <thead>
    <tr>
	  <th>Médico</th>
      <th>Especialidade</th>
      <th>Editar</th>
      <th>excluir</th>
    </tr>
  </thead>
		<?php foreach($medicoEsp as $indice => $medicoEsp){?>
        <tbody>
          <tr>
            <td><?= $medicoEsp->nomeMedico;?></td>
            <td><?= $medicoEsp->nomeEsp;?></td>
            <td><a href='index.php?link=8&metodo=alterar&id=<?= $medicoEsp->id;?>'><i class="material-icons">create</i></a></td>
            <td><a href='index.php?link=8&metodo=excluir&id=<?= $medicoEsp->id;?>'><i class="material-icons">delete</i></a></td>
          </tr>
         </tbody>
		<?php } ?>
    <a href="index.php?link=8">Cadastro</a>
</table>

<h1> Patologias </h1>

<table>
  <thead>
    <tr>
      <th>Patologia</th>
      <th>Editar</th>
      <th>excluir</th>
    </tr>
  </thead>
		<?php foreach($patologia as $indice => $patologia){?>
        <tbody>
          <tr>
            <td><?= $patologia->nome;?></td>
            <td><a href='index.php?link=11&metodo=alterar&id=<?= $patologia->id;?>'><i class="material-icons">create</i></a></td>
            <td><a href='index.php?link=11&metodo=excluir&id=<?= $patologia->id;?>'><i class="material-icons">delete</i></a></td>
          </tr>
         </tbody>
		<?php } ?>
    <a href="index.php?link=11">Cadastro</a>
</table>