<?php

namespace App\Blocs;

use WordPlate\Acf\Fields\Group;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Link;
use WordPlate\Acf\Fields\Repeater;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Textarea;
use WordPlate\Acf\Fields\WysiwygEditor;

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
