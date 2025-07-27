<?php

namespace Concrete\Package\LogoWallTheme;

use Bitter\SimpleTheme\Provider\ServiceProvider;
use Concrete\Core\Package\Package;
use Concrete\Core\Entity\Package as PackageEntity;

class Controller extends Package
{
    protected string $pkgHandle = 'logo_wall_theme';
    protected string $pkgVersion = '0.0.1';
    protected $appVersionRequired = '9.0.0';

    public function getPackageDescription(): string
    {
        return t('Logo Wall Theme is a minimalist Concrete CMS theme optimized for one-pagers, perfect for short and sharp presentations.');
    }

    public function getPackageName(): string
    {
        return t('Logo Wall Theme');
    }

    public function install(): PackageEntity
    {
        $pkg = parent::install();
        $this->installContentFile("data.xml");
        return $pkg;
    }

    public function upgrade()
    {
        parent::upgrade();
        $this->installContentFile("data.xml");
    }
}
