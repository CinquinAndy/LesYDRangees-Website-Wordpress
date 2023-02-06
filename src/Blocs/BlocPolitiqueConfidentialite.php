<?php

namespace App\Blocs;

use Extended\Acf\Fields\Group;
use Extended\Acf\Fields\Image;
use Extended\Acf\Fields\Link;
use Extended\Acf\Fields\Repeater;
use Extended\Acf\Fields\Text;
use Extended\Acf\Fields\Textarea;
use Extended\Acf\Fields\WysiwygEditor;

class BlocPolitiqueConfidentialite extends Bloc
{
    public static $name = 'politiqueconfidentialite';
    public static $label = 'Politique Confidentialite';
    public static $icon = 'lock';

    protected static function fields(): array
    {
        return [
            Repeater::make('Politique de confidentialité', 'politic')->required()->fields([
                Text::make('Titre', 'title')->required()->placeholder("Titre du bloc"),
                WysiwygEditor::make('Description', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual')
            ])
        ];
    }
}

?>
