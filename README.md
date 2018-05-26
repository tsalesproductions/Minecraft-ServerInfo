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

### Instanciando com uma porta
<code>
	$srv = new statusServer('127.0.0.1','25655');
</code>

### Instanciando sem porta
<code>
	$srv = new statusServer('127.0.0.1',false);
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
    <td>Mostra em lista o nome de todos jogadores que estão online no servidor. Ex: João, Maria, CarlosZ ...</td> 
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
    <td>Mostra o total de jogadores + quantidade de slots. Ex: 16/80</td> 
  </tr>
<tr>
    <td>getPorcentUsersOnline()</td>
    <td>Mostra a porcentagem de jogadores online. <br>Ex: players=10; <br>maxPlayers=80; <br>Calculando em regra de 3: <br>10 * 100 / 80 = 12,5%;<br> Retornando em inteiro = 12%; </td> 
  </tr>
  <tr>
    <td></td>
    <td></td> 
  </tr>

</table>
