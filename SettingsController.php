<?php

use \Repositories\Setting\SettingContract;
use \Setting\ConfirmationSetting;


class SettingsController
{
    public function __construct(
        public SettingContract $settingRepository
    )
    {
        $this->confirmationSetting = ConfirmationSetting::initial($this->settingRepository->getConfirmation(), $this->settingRepository);
    }

    public function send()
    {
        $this->confirmationSetting->send();
    }

    //Проверку anotherConfirmation на уровне request
    public function change(\http\Client\Requestst $request)
    {
        $this->confirmationSetting->change($request->get('anotherConfirmation'));
    }

}