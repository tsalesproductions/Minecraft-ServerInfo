# Minecraft-ServerInfo
Com esse script você poderá pegar as informações do seu servidor de forma fácil e responsiva e coloca em qualquer lugar através das funções.

<hr>
<h2> Requesitos: </h2>
Sua query precisa estar ativada para que nosso script receba os dados através do json
<hr>

<h2> Chamando a classe: </h2>
Primeiro você precisa chamar a classe no seu index.php<br>
<code>
	include_once("lib/serverstatus.php");
</code>
<hr>

<h2> Instanciando a classe: </h2>
Agora você precisa instanciar a classe utlizando uma variável qualquer como nome.<br>

### Instanciando classe com uma porta
<code>
	$srv = new statusServer('127.0.0.1','25655');
</code>

### Instanciando classe sem porta
<code>
	$srv = new statusServer('127.0.0.1',false);
</code>

<hr>

<h2> Instanciando Funções: </h2>
	<code>
		echo $srv->getHostnameServer(); //Mostrará: ServerNameHere
	</code>

<hr>
<table style="width:100%">
  <tr>
    <th>Método</th>
    <th>Descrição</th> 
  </tr>
  <tr>
    <td>getHostnameServer()</td>
    <td>Mostra na tela o nome do servidor. Obs: Só será exibido se a query estiver ativa.</td> 
  </tr>
  <tr>
    <td>getIpServer()</td>
    <td>Mostra o ip do servidor</td> 
  </tr>
  <tr>
    <td>getPortServer()</td>
    <td>Mostra a porta do servidor</td> 
  </tr>
<tr>
    <td>getIpAndPortServer()</td>
    <td>Mostra o ip e a porta. Ex: 127.0.0.1:25655</td> 
  </tr>
  <tr>
    <td>getVersion()</td>
    <td>Mostra a versão do servidor</td> 
  </tr>
  <tr>
    <td>getPlayersOnline()</td>
    <td>Mostra em lista o nome de todos jogadores que estão online no servidor. <br>Ex: <br>João<br>Maria<br>CarlosZ<br>Pedro<br> ...</td> 
  </tr>
<tr>
    <td>getTotalPlayersOnline()</td>
    <td>Mostra quantos jogadores estão online no servidor</td> 
  </tr>
  <tr>
    <td>getMaxPlayersOnline()</td>
    <td>Mostra o máximo a capacidade de slots que seu servidor possui</td> 
  </tr>
  <tr>
    <td>getTotalPlayersOnlineComplete()</td>
    <td>Mostra o total de jogadores e quantidade de slots. Ex: 16/80</td> 
  </tr>
<tr>
    <td>getPorcentUsersOnline()</td>
    <td>Mostra a porcentagem de jogadores online. <br>Ex: players=10; <br>maxPlayers=80; <br>Calculando em regra de 3: <br>10 * 100 / 80 = 12,5%;<br> Retornando em inteiro = 12%; </td> 
  </tr>
  <tr>
    <td>getStatusServer()</td>
    <td>Retorna verdadeiro ou falso; você pode fazer um simples método para printar um texto:<br>
  	<code>
		if(getStatusServer() == true):<br>
		echo = "Online";<br>
		else:<br>
		echo "Offline";<br>
		endif;<br>
    	</code>
  </td> 
  </tr>
</table>

<hr>

### Exemplo
	<?php 
	$srv = new statusServer('127.0.0.1', '25655'); //Instancia a classe
	?>
	<p>Hostname: <?php echo $srv->$getHostnameServer;?> //Retornará: MeuServidorNome</p>
	<p>Ip: <?php echo $srv->$getIpServer;?> //Retornará: 127.0.0.1</p>
	<p>Port: <?php echo $srv->$getPortServer;?> //Retornará: 25655</p>
	<p>Total Online: <?php echo $srv->$getTotalPlayersOnlineComplete;?> //Retornará: 25/80</p>
	<p>Porcentagem: <?php echo $srv->$getPorcentUsersOnline;?> //Retornará: 31%</p>
	<p>Lista de Onlines: <?php $srv->echo $getPlayersOnline;?> 
	//Retornará: 
	João
	Maria
	José
	Felipe
	Calos
	Bruno
	Henrique
	...
	</p>

