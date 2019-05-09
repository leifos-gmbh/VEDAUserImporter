<?php
/**
 * VEDA REST API client.
 * @author Jesus Lopez <lopez@leifos.com>
 */
class ilVEDARestClient
{
	protected $session_id;
	protected $rest_base_url;
	protected $last_execution;

	function __construct()
	{
		$this->rest_base_url = ilVEDAUserImporterSettings::getInstance()->getRestUrl();
	}

	function getBaseUrl()
	{
		return $this->rest_base_url;
	}

	public function connect()
	{
		try
		{
			//$target = $this->rest_base_url."logon?method=crmLogin&response_type=JSON&username=".ilAfPSettings::getInstance()->getRestUser()."&password=".ilAfPSettings::getInstance()->getRestPassword();

			$response = file_get_contents($target);

			$this->session_id = json_decode($response);

			ilVEDAUserImporterLogger::getLogger()->write("Connection successful session id = ".$this->session_id);

		}
		catch (Exception $e)
		{
			ilVEDAUserImporterLogger::getLogger()->write("Connection Exception: ".$e->getMessage());
		}


	}

}