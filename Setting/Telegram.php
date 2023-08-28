<?php


namespace Setting;


class Telegram extends ConfirmationSetting implements ConfirmationSettingInterface
{

    public function send(): void
    {
        // TODO: Implement send() method.
        echo 'Отпралвенно через телеграм';
    }

}