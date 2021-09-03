<?php

namespace App\Blocs;

use WordPlate\Acf\Fields\Group;
use WordPlate\Acf\Fields\Image;
use WordPlate\Acf\Fields\Link;
use WordPlate\Acf\Fields\Repeater;
use WordPlate\Acf\Fields\Text;
use WordPlate\Acf\Fields\Textarea;
use WordPlate\Acf\Fields\WysiwygEditor;

class BlocPrestation extends Bloc
{
    public static $name = 'prestation';
    public static $label = 'Prestation';
    public static $icon = 'store';

    protected static function fields(): array
    {
        return [
            Group::make("Groupe première section", "first_section")->fields(
                [
                    Text::make('Titre', 'title')->required()->placeholder("RENCONTRONS-NOUS !"),
                    WysiwygEditor::make('Texte de présentation', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                ]
            )->required(),
            Group::make("Groupe deuxième section [ Fonctionnement ]", "second_section")->fields(
                [
                    Text::make('Titre', 'title')->required()->placeholder("COMMENT ÇA MARCHE ?"),
                    WysiwygEditor::make('Première étape', 'first_description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                    WysiwygEditor::make('Deuxième étape', 'second_description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                    WysiwygEditor::make('Troisième étape', 'third_description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                    WysiwygEditor::make('Quatrième étape', 'fourth_description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                ]
            )->required(),
            Group::make("Toutes les préstations", "third_section")->fields(
                [
                    Repeater::make('Prestation', 'presta')->required()->fields([
                        Text::make('Titre', 'title')->required()->placeholder("HOME ORGANIZING RETOUR À L'ESSENTIEL"),
                        WysiwygEditor::make('Description', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                        WysiwygEditor::make('Prix', 'price')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                        Image::make('Image', 'img')->required()
                    ]),
                ]
            )->required(),
            Group::make('Les options', 'fourth_section')->fields([
                Repeater::make('Option', 'option')->required()->fields([
                    Text::make('Titre', 'title')->required()->placeholder("HOME ORGANIZING RETOUR À L'ESSENTIEL"),
                    WysiwygEditor::make('Description', 'description')->toolbar('basic')->mediaUpload(false)->tabs('visual'),
                    WysiwygEditor::make('Prix', 'price')->toolbar('basic')->mediaUpload(false)->tabs('visual')
                ]),
            ])->required()
        ];
    }
}

?>
