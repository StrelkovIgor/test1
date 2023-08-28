<?php


namespace Setting;


class Sms extends ConfirmationSetting implements ConfirmationSettingInterface
{

    public function send(): void
    {
        // TODO: Implement send() method.
        echo 'Отправленно по СМС';

    }
}