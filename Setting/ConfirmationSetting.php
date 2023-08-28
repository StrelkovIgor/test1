<?php


namespace Setting;


use Repositories\Setting\SettingContract;

abstract class ConfirmationSetting implements ConfirmationSettingInterface
{
    public function __construct(
        protected SettingContract $settingRepository,
    ){}

    public function send(): void
    {
        // TODO: Implement send() method.
    }

    public function change(string $anotherConfirmation): void
    {
        // TODO: Implement change() method.
        $new = self::initial($anotherConfirmation, $this->settingRepository);
        $this->settingRepository->saveConfirmation($new);
    }

    //будем использовать фабричный метод
    public static function initial(string $confirmation, SettingContract $settingRepository): ConfirmationSettingInterface
    {
        return new $confirmation($settingRepository);
    }


}