<?php

namespace App\Blocs;

use WordPlate\Acf\Fields\Group;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Textarea;
use WordPlate\Acf\Fields\WysiwygEditor;

class BlocHero extends Bloc
{
    public static $name = 'hero';
    public static $label = 'Hero';
    public static $icon = 'admin-home';

    protected static function fields(): array
    {
        return [
            Group::make('Citation', 'citation')->fields([
                Textarea::make('Phrase de la citation', 'citation_sentence')->required()->placeholder("CELA SEMBLE TOUJOURS IMPOSSIBLE JUSQU'À CE QU'ON LE FASSE."),
                Text::make('Auteur de la citation', 'citation_author')->required()->placeholder("NELSON MANDELA"),
            ]),
            Text::make('Titre première section', 'first_section_title')->required()->placeholder("À PROPOS DE NOTRE DUO"),
            Text::make('Titre autour de la photo', 'title_around_photo')->required()->placeholder("TAMARA & LAURA – ORGANISATRICE D‘INTERIEUR")->characterLimit(60),
            Image::make('Photo de présentation', 'photo')->required(),
            WysiwygEditor::make('Texte de présentation', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
        ];
    }
}

?>
