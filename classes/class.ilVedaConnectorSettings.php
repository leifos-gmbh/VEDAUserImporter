<?php

/**
 * @author Stefan Meyer <smeyer.ilias@gmx.de>
 */
class ilVedaConnectorSettings
{
	private static $instance = null;

	private $storage = null;
	private $lock = false;
	private $cron_interval = 1;
	private $cron_last_execution = 0;

	private $restUser;
	private $restUrl;
	private $restPassword;
	private $platform_id;

	/**
	 * ilVedaConnectorSettings constructor.
	 */
	public function __construct()
	{
		//db table settings column module
		$this->storage = new \ilSetting('vedaimp');
		$this->read();
	}

	/**
	 * @return \ilVedaConnectorSettings
	 */
	public static function getInstance(): ilVedaConnectorSettings
	{
		if(self::$instance)
		{
			return self::$instance;
		}
		return self::$instance = new self();
	}

	/**
	 * Read settings
	 */
	protected function read(): void
	{
		$this->enableLock($this->getStorage()->get('lock',$this->isLocked()));

		$this->cron_last_execution = $this->getStorage()->get('cron_last_execution',0);
		$this->cron_interval = $this->getStorage()->get('cron_interval',$this->cron_interval);

		$this->setRestUrl($this->getStorage()->get('resturl',$this->getRestUrl()));
		$this->setRestUser($this->getStorage()->get('restuser',$this->getRestUser()));
		$this->setRestPassword($this->getStorage()->get('restpassword', $this->getRestPassword()));
		$this->setPlatformId($this->getStorage()->get('restplatformid', $this->getPlatformId()));
	}

	/**
	 * @param bool $a_lock
	 */
	public function enableLock(bool $a_lock): void
	{
		$this->lock = $a_lock;
	}

	/**
	 * @return \ilSetting
	 */
	protected function getStorage(): ilSetting
	{
		return $this->storage;
	}

	/**
	 * @return bool
	 */
	public function isLocked(): bool
	{
		return $this->lock;
	}

	/**
	 * Save settings
	 */
	public function save(): void
	{
		//db table settings columns lock, cron_interval
		$this->getStorage()->set('lock',(int) $this->isLocked());
		$this->getStorage()->set('cron_interval',$this->getCronInterval());

		$this->getStorage()->set('restpassword',$this->getRestPassword());
		$this->getStorage()->set('restuser',$this->getRestUser());
		$this->getStorage()->set('resturl', $this->getRestUrl());
		$this->getStorage()->set('restplatformid', $this->getPlatformId());
	}

	/**
	 * @param int $a_int
	 */
	public function setCronInterval(int $a_int)
	{
		$this->cron_interval = $a_int;
	}

	/**
	 * @return int
	 */
	public function getCronInterval(): int
	{
		return $this->cron_interval;
	}

	/**
	 *
	 */
	public function updateLastCronExecution(): void
	{
		$this->getStorage()->set('cron_last_execution',time());
	}

	/**
	 * @param string|null $a_user
	 */
	public function setRestUser(?string $a_user): void
	{
		$this->restUser = $a_user;
	}

	/**
	 * @return string|null
	 */
	public function getRestUser(): ?string
	{
		return $this->restUser;
	}

	/**
	 * @param string|null $a_rest_url
	 */
	public function setRestUrl(?string $a_rest_url): void
	{
		$this->restUrl = $a_rest_url;
	}

	/**
	 * @return string|null
	 */
	public function getRestUrl(): ?string
	{
		return $this->restUrl;
	}

	/**
	 * @param string|null $a_pass
	 */
	public function setRestPassword(?string $a_pass): void
	{
		$this->restPassword = $a_pass;
	}

	/**
	 * @return string|null
	 */
	public function getRestPassword(): ?string
	{
		return $this->restPassword;
	}

	/**
	 * @param int|null $platform_id
	 */
	public function setPlatformId(?int $platform_id): void
	{
		$this->platform_id = $platform_id;
	}

	/**
	 * @return int|null
	 */
	public function getPlatformId(): ?int
	{
		return $this->platform_id;
	}
}