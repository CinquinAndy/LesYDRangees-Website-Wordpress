<?php

namespace App\Blocs;

use WordPlate\Acf\Fields\Group;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Link;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Textarea;
use WordPlate\Acf\Fields\WysiwygEditor;

class BlocActivite extends Bloc
{
    public static $name = 'activite';
    public static $label = 'Activite';
    public static $icon = 'info';

    protected static function fields(): array
    {
        return [
            Group::make("Groupe première section", "first_section")->fields(
                [
                    Text::make('Titre', 'title')->required()->placeholder("TOUT Y DÉRANGER POUR MIEUX TOUT Y RANGER"),
                    Text::make('Sous titre', 'subtitle')->required()->placeholder("Venez découvrir ce que nous pouvons apporter à votre quotidien !"),
                    Link::make('Boutton [ Call To Action ]', "button")->required(),
                    Image::make("Image d'en haut [violette]", "img_top")->required(),
                    Image::make("Image du milieu [Bleue]", "img_mid")->required(),
                    Image::make("Image d'en bas [Corail]", "img_bot")->required(),
                ]
            ),
            Group::make("Groupe deuxième section", "second_section")->fields(
                [
                    Text::make('Titre', 'title')->required()->placeholder("QUE FAISONS - NOUS POUR VOUS ?"),
                    Text::make('Sous titre', 'subtitle')->required()->placeholder("HOME & OFFICE ORGANIZERS"),
                    WysiwygEditor::make('Texte de présentation', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                ]
            ),
        ];
    }
}

?>
