<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     * Format:
     *      [
                'artist_id' => 1,
                'in_system' => TRUE/FALSE,
                'relationship_type' => '',
                'related_id' => 1,
                'display_name' => 'text',
            ],
     */
    public function run()
    {
        DB::table('relationships')->insert([
            // 1: Pauline Auzou
            [
                'artist_id' => 1,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Jean-Baptiste Regnault',
            ],
            // 2: Madeleine-Françoise Basseporte
            [
                'artist_id' => 2,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Claude Aubriet',
            ],
            [
                'artist_id' => 2,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Paul Ponce Antoine Robert',
            ],
            [
                'artist_id' => 2,
                'in_system' => FALSE,
                'relationship_type' => 'Teacher of',
                'related_id' => null,
                'display_name' => 'Gerard van Spaendonck',
            ],
            // 3: Hester Bateman
            [
                'artist_id' => 3,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'John Bateman',
            ],
            [
                'artist_id' => 3,
                'in_system' => FALSE,
                'relationship_type' => 'Mother of',
                'related_id' => null,
                'display_name' => 'Peter Bateman',
            ],
            [
                'artist_id' => 3,
                'in_system' => FALSE,
                'relationship_type' => 'Mother of',
                'related_id' => null,
                'display_name' => 'Jonathan Bateman',
            ],
            // 4: Mary Beale
            [
                'artist_id' => 4,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Charles Beale',
            ],
            [
                'artist_id' => 4,
                'in_system' => FALSE,
                'relationship_type' => 'Teacher of',
                'related_id' => null,
                'display_name' => 'Keaty Trioche',
            ],
            [
                'artist_id' => 4,
                'in_system' => FALSE,
                'relationship_type' => 'Teacher of',
                'related_id' => null,
                'display_name' => 'Sarah Curtis',
            ],
            [
                'artist_id' => 4,
                'in_system' => TRUE,
                'relationship_type' => 'Friend of',
                'related_id' => 9, //Joan Carlile
                'display_name' => 'Joan Carlile',
            ],
            // 5: Marie-Guillemine Benoist
            [
                'artist_id' => 5,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Élisabeth Vigée le Brun',
            ],
            [
                'artist_id' => 5,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Jacques-Louis David',
            ],
            // 6: Mary Benwell
            [
                'artist_id' => 6,
                'in_system' => FALSE,
                'relationship_type' => 'Possible student of',
                'related_id' => null,
                'display_name' => 'John Russell',
            ],
            [
                'artist_id' => 6,
                'in_system' => FALSE,
                'relationship_type' => 'Possible student of',
                'related_id' => null,
                'display_name' => 'Catherine Read',
            ],
            // 7: Marie-Geneviève Bouliar
            [
                'artist_id' => 7,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Joseph-Benoît Suvée',
            ],
            [
                'artist_id' => 7,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Jean-Baptiste Greuze',
            ],
            [
                'artist_id' => 7,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Joseph Duplessis',
            ],
            // 8: Marie-Gabrielle Capet
            [
                'artist_id' => 8,
                'in_system' => TRUE,
                'relationship_type' => 'Student of',
                'related_id' => 25,
                'display_name' => 'Adélaïde Labille-Guiard',
            ],
            // 9: Joan Carlile
            [
                'artist_id' => 9,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Daughter of William Palmer',
            ],
            [
                'artist_id' => 9,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Lodowick Carlile',
            ],
            [
                'artist_id' => 9,
                'in_system' => TRUE,
                'relationship_type' => 'Friend of',
                'related_id' => 4,
                'display_name' => 'Mary Beale',
            ],
            // 10: Julie Charpentier
            [
                'artist_id' => 10,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'engraver François-Philippe Charpentier',
            ],
            [
                'artist_id' => 10,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Augustin Pajou',
            ],
            // 11: Élisabeth Sophie Chéron
            [
                'artist_id' => 11,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Henri Chéron',
            ],
            [
                'artist_id' => 11,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'Louis Chéron',
            ],
            [
                'artist_id' => 11,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Charles Le Brun',
            ],
            // 12: Marie-Anne Collot
            [
                'artist_id' => 12,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Etienne Falconet',
            ],
            // 13: Maria Hadfield Cosway
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Richard Cosway',
            ],
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'George Hadfield',
            ],
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Thomas Jefferson',
            ],
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Angelica Kauffman',
            ],
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'John Soane',
            ],
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Jacques-Louis David',
            ],
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'John Trumball',
            ],
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Violante Cerroti',
            ],
            [
                'artist_id' => 13,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Johann Zoffany',
            ],
            [
                'artist_id' => 13,
                'in_system' => TRUE,
                'relationship_type' => 'Friend of',
                'related_id' => 31,
                'display_name' => 'Mary Moser',
            ],
            // 14: Anne Seymour Damer
            [
                'artist_id' => 14,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Field Marshal Henry Seymour',
            ],
            [
                'artist_id' => 14,
                'in_system' => FALSE,
                'relationship_type' => 'Cousin of',
                'related_id' => null,
                'display_name' => 'Horace Walpole',
            ],
            // 15: Mary Delany
            //     No Circle for Mary Delany

            // 16: Volcxken Diericx
            [
                'artist_id' => 16,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Hieronymus Cock',
            ],
            // 17: Barbara Regina Dietzsch
            [
                'artist_id' => 17,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Johann Israel Dietzsch',
            ],
            // 18: Françoise Duparc
            [
                'artist_id' => 18,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'sculptor Antoine Duparc',
            ],
            // 19: Maria Faydherbe
            [
                'artist_id' => 19,
                'in_system' => FALSE,
                'relationship_type' => 'Aunt of',
                'related_id' => null,
                'display_name' => 'Lucas Faydherbe',
            ],
            // 20: Marguerite Gérard
            [
                'artist_id' => 20,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Jean-Honoré Fragonard',
            ],
            // 21: Marie-Suzanne Giroust
            [
                'artist_id' => 21,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Swedish painter Roslin',
            ],
            [
                'artist_id' => 21,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Maurice Quentin de la Tour',
            ],
            [
                'artist_id' => 21,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Joseph-Marie Vien',
            ],
            // 22: Aleida Greve
            [
                'artist_id' => 22,
                'in_system' => FALSE,
                'relationship_type' => 'Cousin of',
                'related_id' => null,
                'display_name' => 'Anna Cornelia',
            ],
            [
                'artist_id' => 22,
                'in_system' => FALSE,
                'relationship_type' => 'Cousin of',
                'related_id' => null,
                'display_name' => 'Sophia Holt',
            ],
            [
                'artist_id' => 22,
                'in_system' => FALSE,
                'relationship_type' => 'Cousin of',
                'related_id' => null,
                'display_name' => 'Aleida Wolfsen',
            ],
            [
                'artist_id' => 22,
                'in_system' => FALSE,
                'relationship_type' => 'Half-sister of',
                'related_id' => null,
                'display_name' => 'Cornelia van Marle',
            ],
            [
                'artist_id' => 22,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Wilhelmus Beurs',
            ],
            // 23: Susanna Horenboult
            [
                'artist_id' => 23,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Gheraert (Gerard) Horenbout',
            ],
            [
                'artist_id' => 23,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'Lucas Horenbout',
            ],
            // 24: Johanna Koerten
            [
                'artist_id' => 24,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Adrian Blok',
            ],
            // 25: Adélaïde Labille-Guiard
            [
                'artist_id' => 25,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'François-Elie Vincent',
            ],
            [
                'artist_id' => 25,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Quentin de la Tour',
            ],
            [
                'artist_id' => 25,
                'in_system' => TRUE,
                'relationship_type' => 'Teacher of',
                'related_id' => 8,
                'display_name' => 'Marie-Gabrielle Capet',
            ],
            // 26: Marie-Victoire Lemoine
            [
                'artist_id' => 26,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'François Guillaume Ménageot',
            ],
            [
                'artist_id' => 26,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'Marie-Denise Villers',
            ],
            // 27: Judith Leyster
            [
                'artist_id' => 27,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Jan Miense Molenaer',
            ],
            [
                'artist_id' => 27,
                'in_system' => FALSE,
                'relationship_type' => 'Possible student of',
                'related_id' => null,
                'display_name' => 'Frans Hals',
            ],
            // 28: Marianne Loir
            [
                'artist_id' => 28,
                'in_system' => FALSE,
                'relationship_type' => 'Member of',
                'related_id' => null,
                'display_name' => 'the Loir family of artists',
            ],
            [
                'artist_id' => 28,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'Alexis Loir III',
            ],
            // 29: Maria Sibylla Merian
            [
                'artist_id' => 29,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Matthäus Merian',
            ],
            [
                'artist_id' => 29,
                'in_system' => FALSE,
                'relationship_type' => 'Step-daughter of',
                'related_id' => null,
                'display_name' => 'Jacob Marrel',
            ],
            // 30: Eulalie Morin
            [
                'artist_id' => 30,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Guillaume Lethière',
            ],
            [
                'artist_id' => 30,
                'in_system' => FALSE,
                'relationship_type' => 'Possible student of',
                'related_id' => null,
                'display_name' => 'Jean-Baptiste Isabey',
            ],
            // 31: Mary Moser
            [
                'artist_id' => 31,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'George Michael Moser',
            ],
            [
                'artist_id' => 31,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Joseph Nollekens',
            ],
            [
                'artist_id' => 31,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Angelica Kauffman',
            ],
            [
                'artist_id' => 31,
                'in_system' => TRUE,
                'relationship_type' => 'Friend of',
                'related_id' => 13,
                'display_name' => 'Maria Hadfield Cosway',
            ],
            // 32: Clara Peeters
            // No members of circle

            // 33: Maria Katharina Prestel
            [
                'artist_id' => 33,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Johann Gottlieb Prestel',
            ],
            [
                'artist_id' => 33,
                'in_system' => FALSE,
                'relationship_type' => 'Mother of',
                'related_id' => null,
                'display_name' => 'Ursula Magdalena Prestel',
            ],
            // 34: Adéle Romany
            [
                'artist_id' => 34,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Jean-Baptiste Regnault',
            ],
            // 35: Susan Penelope Rosse
            [
                'artist_id' => 35,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Richard Gibson',
            ],
            // 36: Ellen Wallace Sharples
            [
                'artist_id' => 36,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'James Sharples',
            ],
            [
                'artist_id' => 36,
                'in_system' => FALSE,
                'relationship_type' => 'Mother of',
                'related_id' => null,
                'display_name' => 'Rolinda Sharples',
            ],
            [
                'artist_id' => 36,
                'in_system' => FALSE,
                'relationship_type' => 'Mother of',
                'related_id' => null,
                'display_name' => 'James Sharples',
            ],
            // 37: Adriana Spilberg
            [
                'artist_id' => 37,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of ',
                'related_id' => null,
                'display_name' => 'Johannes Spilberg',
            ],
            // 38: Gesina Ter Borch
            [
                'artist_id' => 38,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Gerard ter Borch',
            ],
            [
                'artist_id' => 38,
                'in_system' => FALSE,
                'relationship_type' => 'Half-sister of',
                'related_id' => null,
                'display_name' => 'Gerard ter Borch II',
            ],
            [
                'artist_id' => 38,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Harmen ter Borch',
            ],
            [
                'artist_id' => 38,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Moses ter Borch',
            ],
            // 39: Anna Dorthea Therbush
            [
                'artist_id' => 39,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Georg Lisiewski',
            ],
            // 40: Anne Valayer-Coster
            [
                'artist_id' => 40,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Joseph Vallayer',
            ],
            // 41: Magdalena van de Passe
            [
                'artist_id' => 41,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Crispijn van de Passe',
            ],
            [
                'artist_id' => 41,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'Crispijn van de Passe II',
            ],
            [
                'artist_id' => 41,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Adriaen van de Venne',
            ],
            [
                'artist_id' => 41,
                'in_system' => FALSE,
                'relationship_type' => 'Teacher of',
                'related_id' => null,
                'display_name' => 'Anna Maria van Schurman',
            ],
            // 42: Caterina van Hemessen
            [
                'artist_id' => 42,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'artist Jan Sanders van Hemessen',
            ],
            // 43: Maria van Oosterwyck
            [
                'artist_id' => 43,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Jan Davidsz. De Heem',
            ],
            [
                'artist_id' => 43,
                'in_system' => FALSE,
                'relationship_type' => 'Teacher of',
                'related_id' => null,
                'display_name' => 'Geertje Peeters',
            ],
            [
                'artist_id' => 43,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Willem van Aelst',
            ],
            // 44: Mayken Verhulst
            [
                'artist_id' => 44,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Pieter Verhulst',
            ],
            [
                'artist_id' => 44,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Pieter Coecke van Aelst',
            ],
            [
                'artist_id' => 44,
                'in_system' => FALSE,
                'relationship_type' => 'Mother-in-law of',
                'related_id' => null,
                'display_name' => 'Pieter Brueghel the Elder',
            ],
            [
                'artist_id' => 44,
                'in_system' => FALSE,
                'relationship_type' => 'Grandmother of',
                'related_id' => null,
                'display_name' => 'Pieter Brueghel the Younger',
            ],
            [
                'artist_id' => 44,
                'in_system' => FALSE,
                'relationship_type' => 'Grandmother of',
                'related_id' => null,
                'display_name' => 'Jan Brueghel the Elder',
            ],
            [
                'artist_id' => 44,
                'in_system' => FALSE,
                'relationship_type' => 'Sister-in-law of',
                'related_id' => null,
                'display_name' => 'Hubert Goltzius',
            ],
            [
                'artist_id' => 44,
                'in_system' => FALSE,
                'relationship_type' => 'Sister-in-law of',
                'related_id' => null,
                'display_name' => 'Jacob de Punder',
            ],
            // 45: Anna Roemers Visscher
            [
                'artist_id' => 45,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'poet Roemer Visscher',
            ],
            [
                'artist_id' => 45,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'Maria Tesselschade Visscher',
            ],
            [
                'artist_id' => 45,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Anna Maria van Schurman',
            ],
            [
                'artist_id' => 45,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Pieter Corneliszoon Hooft',
            ],
            [
                'artist_id' => 45,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Constantijn Huygens',
            ],
            [
                'artist_id' => 45,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Joost van den Vondel',
            ],
            [
                'artist_id' => 45,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Gerbrand Bredero',
            ],
            [
                'artist_id' => 45,
                'in_system' => FALSE,
                'relationship_type' => 'Friend of',
                'related_id' => null,
                'display_name' => 'Peter Paul Rubens',
            ],
            // 46: Anna Waser
            [
                'artist_id' => 46,
                'in_system' => FALSE,
                'relationship_type' => 'Student of',
                'related_id' => null,
                'display_name' => 'Joseph Werner',
            ],
            // 47: Michaelina Wautier
            [
                'artist_id' => 47,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'Charles/Karel Wautier',
            ],
            // 48: Alida Withoos
            [
                'artist_id' => 48,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Matthias Withoos',
            ],
            [
                'artist_id' => 48,
                'in_system' => FALSE,
                'relationship_type' => 'Wife of',
                'related_id' => null,
                'display_name' => 'Andries Cornelisz van Dalen',
            ],
            [
                'artist_id' => 48,
                'in_system' => FALSE,
                'relationship_type' => 'Sister of',
                'related_id' => null,
                'display_name' => 'Pieter Withoos',
            ],
            // 49: Margaretha Wulfraet
            [
                'artist_id' => 49,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Matthijs Wulfraet',
            ],
            // 50: Maria Elisabeth Ziesenis
            [
                'artist_id' => 50,
                'in_system' => FALSE,
                'relationship_type' => 'Daughter of',
                'related_id' => null,
                'display_name' => 'Johann Georg Ziesenis',
            ],
        ]);
    }
}
