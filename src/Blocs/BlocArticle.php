<?php

namespace App\Blocs;

use WordPlate\Acf\Fields\Group;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Link;
use WordPlate\Acf\Fields\Repeater;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Textarea;
use WordPlate\Acf\Fields\WysiwygEditor;

class BlocArticle extends Bloc
{
    public static $name = 'article';
    public static $label = 'Article';
    public static $icon = 'admin-post';

    protected static function fields(): array
    {
        return [
            Text::make('Titre', 'title')->required()->placeholder("RENCONTRONS-NOUS !"),
            WysiwygEditor::make('Texte de présentation', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
            Image::make('Image', 'img')->required()
        ];
    }
}

?>
