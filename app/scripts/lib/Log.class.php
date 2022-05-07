<?php

/**
 *
 * 			DB.class.php [Classe Libreria]
 *
 *	File che contiene tutti i metodi necessari per interagire
 *	con un database, utilizza la CLASSE pre-esistente PDO.
 *	Le configurazione del database è necessaria specificarla
 * 	nel @file php.ini.
 * 	La classe permette di:
 * 	- Eseguire una connessione
 *  - Eseguire insert
 *  - Eseguire query
 *  - Eseguire delete
 *  - Eseguire update
 *
 *	Viene eseguita la bind di tutti i parametri php, a fine di evitare SQL INJECTION.
 * 	È possibile eseguire query di singoli record o campi della tabella.
 *
 */




namespace PDOWrapper;

class Log {

		# @string, Log directory name
		private $path = '../../test/log/';

		# @void, Default Constructor, Sets the timezone and path of the log files.
		public function __construct() {
			global $root;
			date_default_timezone_set('Europe/Rome');
			$this->path  = $root.$this->path;
		}

	   		/**
		*   @void
		*	Creates the log
		*
		*   @param string $message the message which is written into the log.
		*	@description:
		*	 1. Checks if directory exists, if not, create one and call this method again.
		*	 2. Checks if log already exists.
		*	 3. If not, new log gets created. Log is written into the logs folder.
		*	 4. Logname is current date(Year - Month - Day).
		*	 5. If log exists, edit method called.
		*	 6. Edit method modifies the current log.
		*/
		public function write($message) {
			$date = new DateTime();
			$log = $this->path . $date->format('Y-m-d').".txt";

			if(is_dir($this->path)) {
				if(!file_exists($log)) {
					$fh  = fopen($log, 'a+') or die("Fatal Error !");
					$logcontent = "Time : " . $date->format('H:i:s')."\r\n" . $message ."\r\n";
					fwrite($fh, $logcontent);
					fclose($fh);
				}
				else {
					$this->edit($log,$date, $message);
				}
			}
			else {
				  if(mkdir($this->path,0777) === true)
				  {
					 $this->write($message);
				  }
			}
		 }

			/**
		 *  @void
		 *  Gets called if log exists.
		 *  Modifies current log and adds the message to the log.
		 *
		 * @param string $log
		 * @param DateTimeObject $date
		 * @param string $message
		 */
			private function edit($log,$date,$message) {
			$logcontent = "Time : " . $date->format('H:i:s')."\r\n" . $message ."\r\n\r\n";
			$logcontent = $logcontent . file_get_contents($log);
			file_put_contents($log, $logcontent);
			}
	}

