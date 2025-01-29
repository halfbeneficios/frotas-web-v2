<?php

namespace App\Services\Layout;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;

class General
{

    public static function getLabelWithTooltip(string $label, string $tooltip): Htmlable
    {
        $icon = "<x-heroicon-o-information-circle class='w-6 h-6' x-tooltip.raw='{$tooltip}' />";

        $content = '<span>' . $label . '</span>' . $icon;

        $columnLabel = self::getColumnLabel($content);

        return new HtmlString(Blade::render($columnLabel));
    }

    public static function getColumnLabel(string $label): string
    {
        $content = '<div class="flex gap-2 items-center">';

        $content .= $label;

        $content .= '</div>';

        return $content;
    }

    public static function getImageLabelTable($file, $text): Htmlable
    {

        $image = Storage::url($file);

        $icon = "<img src='" . $image . "' width='50' height='50' alt='' />";

        $content = '<div class="flex-custom-card">' . $icon . ' '.$text.'</div>';

        return new HtmlString($content);

    }

    public static function getIconHeader($icon, $name, $width = 24, $height = 24): Htmlable
    {

        $icon = "<img src='" . asset('images/icons/'.$icon.'.svg') . "' width='".$width."' height='".$height."' alt='' />";

        $content = '<div class="flex-header">' . $icon . ''.$name.'</div>';

        return new HtmlString($content);

    }

}
