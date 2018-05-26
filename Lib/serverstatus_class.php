<?php
class statusServer{
		private $ip;
		private $port;
		private $version;
		private $players;
		private $maxPlayers;
		private $status;
    	private $hostname;

		public function __construct($ip, $port){
      if($port == true){
  			$status = json_decode(file_get_contents('https://api.mcsrvstat.us/1/'.$ip.':'.$port));
        $query = json_decode(file_get_contents('https://api.mcsrvstat.us/query/'.$ip.':'.$port));
      }else if($port == false){
        $status = json_decode(file_get_contents('https://api.mcsrvstat.us/1/'.$ip));
        $query = json_decode(file_get_contents('https://api.mcsrvstat.us/query/'.$ip));
      }

			$this->status = $status;
			$this->ip = $status->ip;
			$this->port = $status->port;
			$this->version = $status->version;
			$this->players = $status->players->online;
			$this->maxPlayers = $status->players->max;
      		$this->hostname = $query->HostName;

      if($this->players == null AND $this->maxPlayers == null AND $this->hostname == null){
        $this->players = 0;
        $this->maxPlayers = 0;
        $this->hostname = "Hostname";
      }

		}

		public function getHostnameServer(){
			echo $this->hostname;
		}

    public function getIpServer(){
      echo $this->ip;
    }

    public function getPortServer(){
      echo $this->port;
    }

    public function getIpAndPortServer(){
      echo $this->ip.':'.$this->port;
    }

		public function getVersion(){
			echo $this->version;
		}

		public function getPlayersOnline(){
	     if($this->players > 0){
	     	if(!empty($this->status->players->list)):
				foreach ($this->status->players->list as $player) {
					echo $player.'<br>';
				}
			else:
				return false;
			endif;
	      }
		}

		public function getTotalPlayersOnline(){
			echo $this->players;
		}

		public function getMaxPlayersOnline(){
			echo $this->maxPlayers;
		}

		public function getTotalPlayersOnlineComplete(){
			echo $this->players.'/'.$this->maxPlayers;
		}

		public function getPorcentUsersOnline(){
      if($this->players > 0){
        $soma = ($this->players * 100) / $this->maxPlayers;
        echo (int) $soma;
      }else{
        echo 0;
      }
		}

		public function getStatusServer(){
			if($this->status->offline){
				return false;
			}else{
				return true;
			}
		}
	}
	?>