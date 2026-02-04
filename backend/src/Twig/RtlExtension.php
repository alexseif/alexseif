<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class RtlExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('is_rtl_locale', [$this, 'isRtlLocale']),
            new TwigFunction('rtl_class', [$this, 'getRtlClass']),
            new TwigFunction('html_dir', [$this, 'getHtmlDir']),
        ];
    }

    public function isRtlLocale(?string $locale = null): bool
    {
        if ($locale === null) {
            $locale = \Locale::getDefault();
        }

        return in_array($locale, ['ar', 'eg']);
    }

    public function getRtlClass(?string $locale = null): string
    {
        return $this->isRtlLocale($locale) ? 'rtl' : 'ltr';
    }

    public function getHtmlDir(?string $locale = null): string
    {
        return $this->isRtlLocale($locale) ? 'rtl' : 'ltr';
    }
}
