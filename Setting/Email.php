<?php


namespace Setting;

class Email extends ConfirmationSetting implements ConfirmationSettingInterface
{

    public function send(): void
    {
        // TODO: Implement send() method.
        echo 'Отправлено по электроной почте';
    }
}