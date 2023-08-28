<?php


namespace Repositories\Setting;


use Setting\ConfirmationSettingInterface;

class ORMSettingRepository implements SettingContract
{
    public function __construct(
        protected $user
    )
    {}

    public function saveConfirmation(ConfirmationSettingInterface $confirmationSetting): void
    {
        // Сохраняем в базу по объекту
    }

    public function getConfirmation(): string
    {
        // вернем потверждение по пользователю
    }
}