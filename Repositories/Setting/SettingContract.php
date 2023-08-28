<?php
namespace Repositories\Setting;

use Setting\ConfirmationSettingInterface;

interface SettingContract
{
    public function saveConfirmation(ConfirmationSettingInterface $confirmationSetting): void;
    public function getConfirmation(): string;

}