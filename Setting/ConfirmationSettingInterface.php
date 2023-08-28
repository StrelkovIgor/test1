<?php
namespace Setting;

interface ConfirmationSettingInterface
{
    public function send(): void;
    public function change(string $anotherConfirmation): void;

}