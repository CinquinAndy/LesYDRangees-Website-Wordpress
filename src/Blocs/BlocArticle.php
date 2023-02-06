<?php

namespace App\Blocs;

use Extended\Acf\Fields\Group;
use Extended\Acf\Fields\Image;
use Extended\Acf\Fields\Link;
use Extended\Acf\Fields\Repeater;
use Extended\Acf\Fields\Text;
use Extended\Acf\Fields\Textarea;
use Extended\Acf\Fields\WysiwygEditor;

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
