# Minecraft-ServerInfo
Com esse script você poderá pegar as informações do seu servidor de forma fácil e responsiva e coloca em qualquer lugar através das funções.

<hr>
<h2> Chamando a classe: </h2>
Primeiro você precisa chamar a classe no seu index.php<br>
<code>
	include_once("lib/serverstatus.php");
</code>
<hr>

<h2> Instanciando a classe: </h2>
Agora você precisa instanciar a classe utlizando uma variável qualquer como nome.<br>

### Instanciando com uma porta
<code>
	$srv = new statusServer('127.0.0.1','25655');
</code>



<hr>
<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td> 
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td> 
    <td>94</td>
  </tr>
</table>
