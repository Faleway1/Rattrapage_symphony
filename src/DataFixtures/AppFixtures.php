<?php


namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Country;
use App\Entity\Author;
use App\Entity\Cover;
use App\Entity\Genre;
use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    private function camelToSnake(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }

    private function snakeToCamel(string $input): string
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $input))));
    }

    public function load(ObjectManager $manager): void
    {
        $usersData = [
            [
                'Id' => '1',
                'Email' => 'amadio@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Amadio',
                'FirstName' => 'Philippe',
                'Address' => 'Avda. de la Constitución 2222',
                'ZipCode' => '50210',
                'BirthDate' => '1983-03-16',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '2',
                'Email' => 'beal@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Béal',
                'FirstName' => 'Benjamin',
                'Address' => 'Sierras de Granada 9993',
                'ZipCode' => '50210',
                'BirthDate' => '1984-12-19',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '3',
                'Email' => 'bertrand@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Bertrand',
                'FirstName' => 'Grégory',
                'Address' => 'Av. dos Lusíadas, 23',
                'ZipCode' => '50220',
                'BirthDate' => '1980-07-27',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '4',
                'Email' => 'cazes@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Cazes',
                'FirstName' => 'Xavier',
                'Address' => 'Mataderos  2312',
                'ZipCode' => '50210',
                'BirthDate' => '1981-11-23',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '5',
                'Email' => 'chevillot@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Chevillot',
                'FirstName' => 'Matthieu',
                'Address' => '12, rue de Marmande',
                'ZipCode' => '44000',
                'BirthDate' => '1983-05-28',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '6',
                'Email' => 'colas@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Colas',
                'FirstName' => 'Matthieu',
                'Address' => '184, chaussée de Tournai',
                'ZipCode' => '59000',
                'BirthDate' => '1980-12-18',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '7',
                'Email' => 'coutant@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Coutant',
                'FirstName' => 'Maxime',
                'Address' => 'Via Monte Bianco 34',
                'ZipCode' => '10100',
                'BirthDate' => '1981-04-24',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '8',
                'Email' => 'daviau@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Daviau',
                'FirstName' => 'Laurent',
                'Address' => 'Jardim das rosas n. 32',
                'ZipCode' => '16750',
                'BirthDate' => '1984-06-19',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '9',
                'Email' => 'morinerie@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'De La Morinerie',
                'FirstName' => 'Rémy',
                'Address' => 'Av. dos Lusíadas, 23',
                'ZipCode' => '50210',
                'BirthDate' => '1981-11-12',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '10',
                'Email' => 'delrio@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Delrio',
                'FirstName' => 'Patrick',
                'Address' => 'Mataderos  2312',
                'ZipCode' => '50210',
                'BirthDate' => '1982-10-01',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '11',
                'Email' => 'durandeau@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Durandeau',
                'FirstName' => 'David',
                'Address' => '23 Tsawassen Blvd.',
                'ZipCode' => '28023',
                'BirthDate' => '1982-07-06',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '12',
                'Email' => 'froger@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Froger',
                'FirstName' => 'Antoine',
                'Address' => '35 King George',
                'ZipCode' => '13008',
                'BirthDate' => '1984-07-04',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '13',
                'Email' => 'hariga@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Hariga',
                'FirstName' => 'Céline',
                'Address' => '24, place Kléber',
                'ZipCode' => '67000',
                'BirthDate' => '1983-08-19',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '14',
                'Email' => 'larousse@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Larousse',
                'FirstName' => 'Romain',
                'Address' => '54, rue Royale',
                'ZipCode' => '44000',
                'BirthDate' => '1982-10-15',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '15',
                'Email' => 'launay@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Launay',
                'FirstName' => 'Sébastien',
                'Address' => 'Berliner Platz 43',
                'ZipCode' => '80805',
                'BirthDate' => '1981-06-25',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '16',
                'Email' => 'lunardelli@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Lunardelli',
                'FirstName' => 'Nicolas',
                'Address' => 'Rambla de Cataluña, 23',
                'ZipCode' => '80220',
                'BirthDate' => '1981-06-23',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '17',
                'Email' => 'marrot@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Marrot',
                'FirstName' => 'Nicolas',
                'Address' => 'Fauntleroy Circus',
                'ZipCode' => '52066',
                'BirthDate' => '1984-10-01',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '18',
                'Email' => 'mazeau@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Mazeau',
                'FirstName' => 'David',
                'Address' => 'C/ Romero, 33',
                'ZipCode' => '41101',
                'BirthDate' => '1983-10-15',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '19',
                'Email' => 'pointeau@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Pointeau',
                'FirstName' => 'Emmanuel',
                'Address' => 'Åkergatan 24',
                'ZipCode' => '28034',
                'BirthDate' => '1981-01-12',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '20',
                'Email' => 'riera@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Riera',
                'FirstName' => 'Jordi',
                'Address' => 'Sierras de Granada 9993',
                'ZipCode' => '50210',
                'BirthDate' => '1983-08-06',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '21',
                'Email' => 'seguin@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Seguin',
                'FirstName' => 'Siegfried',
                'Address' => 'Rua Orós, 92',
                'ZipCode' => '28034',
                'BirthDate' => '1983-01-22',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '22',
                'Email' => 'borrut@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Borrut',
                'FirstName' => 'Florence',
                'Address' => 'Hauptstr. 29',
                'ZipCode' => '15022',
                'BirthDate' => '1984-12-09',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '23',
                'Email' => 'richard@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Richard',
                'FirstName' => 'Fabien',
                'Address' => '15, rue René Dychoux',
                'ZipCode' => '50210',
                'BirthDate' => '1980-08-27',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '24',
                'Email' => 'hoareau@mailbox.com',
                'Password' => '$2y$13$HlA2hgjXCBifJVPSoE8BfuFAx1ben5s.7Nj0Zo3HetTRhq85wtecW',
                'Roles' => '["ROLE_USER"]',
                'LastName' => 'Hoareau',
                'FirstName' => 'Maxime',
                'Address' => '60, chemin du Monteil',
                'ZipCode' => '33770',
                'BirthDate' => '1982-09-25',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
        ];

        $countriesData = [
            [
                'Id' => '1',
                'Code' => 'AF',
                'Name' => 'AFGHANISTAN',
            ],
            [
                'Id' => '2',
                'Code' => 'ZA',
                'Name' => 'AFRIQUE DU SUD',
            ],
            [
                'Id' => '3',
                'Code' => 'AX',
                'Name' => 'ÅLAND, ÎLES',
            ],
            [
                'Id' => '4',
                'Code' => 'AL',
                'Name' => 'ALBANIE',
            ],
            [
                'Id' => '5',
                'Code' => 'DZ',
                'Name' => 'ALGÉRIE',
            ],
            [
                'Id' => '6',
                'Code' => 'DE',
                'Name' => 'ALLEMAGNE',
            ],
            [
                'Id' => '7',
                'Code' => 'AD',
                'Name' => 'ANDORRE',
            ],
            [
                'Id' => '8',
                'Code' => 'AO',
                'Name' => 'ANGOLA',
            ],
            [
                'Id' => '9',
                'Code' => 'AI',
                'Name' => 'ANGUILLA',
            ],
            [
                'Id' => '10',
                'Code' => 'AQ',
                'Name' => 'ANTARCTIQUE',
            ],
            [
                'Id' => '11',
                'Code' => 'AG',
                'Name' => 'ANTIGUA-ET-BARBUDA',
            ],
            [
                'Id' => '12',
                'Code' => 'AN',
                'Name' => 'ANTILLES NÉERLANDAISES',
            ],
            [
                'Id' => '13',
                'Code' => 'SA',
                'Name' => 'ARABIE SAOUDITE',
            ],
            [
                'Id' => '14',
                'Code' => 'AR',
                'Name' => 'ARGENTINE',
            ],
            [
                'Id' => '15',
                'Code' => 'AM',
                'Name' => 'ARMÉNIE',
            ],
            [
                'Id' => '16',
                'Code' => 'AW',
                'Name' => 'ARUBA',
            ],
            [
                'Id' => '17',
                'Code' => 'AU',
                'Name' => 'AUSTRALIE',
            ],
            [
                'Id' => '18',
                'Code' => 'AT',
                'Name' => 'AUTRICHE',
            ],
            [
                'Id' => '19',
                'Code' => 'AZ',
                'Name' => 'AZERBAÏDJAN',
            ],
            [
                'Id' => '20',
                'Code' => 'BS',
                'Name' => 'BAHAMAS',
            ],
            [
                'Id' => '21',
                'Code' => 'BH',
                'Name' => 'BAHREÏN',
            ],
            [
                'Id' => '22',
                'Code' => 'BD',
                'Name' => 'BANGLADESH',
            ],
            [
                'Id' => '23',
                'Code' => 'BB',
                'Name' => 'BARBADE',
            ],
            [
                'Id' => '24',
                'Code' => 'BY',
                'Name' => 'BÉLARUS',
            ],
            [
                'Id' => '25',
                'Code' => 'BE',
                'Name' => 'BELGIQUE',
            ],
            [
                'Id' => '26',
                'Code' => 'BZ',
                'Name' => 'BELIZE',
            ],
            [
                'Id' => '27',
                'Code' => 'BJ',
                'Name' => 'BÉNIN',
            ],
            [
                'Id' => '28',
                'Code' => 'BM',
                'Name' => 'BERMUDES',
            ],
            [
                'Id' => '29',
                'Code' => 'BT',
                'Name' => 'BHOUTAN',
            ],
            [
                'Id' => '30',
                'Code' => 'BO',
                'Name' => 'BOLIVIE',
            ],
            [
                'Id' => '31',
                'Code' => 'BA',
                'Name' => 'BOSNIE-HERZÉGOVINE',
            ],
            [
                'Id' => '32',
                'Code' => 'BW',
                'Name' => 'BOTSWANA',
            ],
            [
                'Id' => '33',
                'Code' => 'BV',
                'Name' => 'BOUVET, ÎLE',
            ],
            [
                'Id' => '34',
                'Code' => 'BR',
                'Name' => 'BRÉSIL',
            ],
            [
                'Id' => '35',
                'Code' => 'BN',
                'Name' => 'BRUNÉI DARUSSALAM',
            ],
            [
                'Id' => '36',
                'Code' => 'BG',
                'Name' => 'BULGARIE',
            ],
            [
                'Id' => '37',
                'Code' => 'BF',
                'Name' => 'BURKINA FASO',
            ],
            [
                'Id' => '38',
                'Code' => 'BI',
                'Name' => 'BURUNDI',
            ],
            [
                'Id' => '39',
                'Code' => 'KY',
                'Name' => 'CAÏMANES, ÎLES',
            ],
            [
                'Id' => '40',
                'Code' => 'KH',
                'Name' => 'CAMBODGE',
            ],
            [
                'Id' => '41',
                'Code' => 'CM',
                'Name' => 'CAMEROUN',
            ],
            [
                'Id' => '42',
                'Code' => 'CA',
                'Name' => 'CANADA',
            ],
            [
                'Id' => '43',
                'Code' => 'CV',
                'Name' => 'CAP-VERT',
            ],
            [
                'Id' => '44',
                'Code' => 'CF',
                'Name' => 'CENTRAFRICAINE, RÉPUBLIQUE',
            ],
            [
                'Id' => '45',
                'Code' => 'CL',
                'Name' => 'CHILI',
            ],
            [
                'Id' => '46',
                'Code' => 'CN',
                'Name' => 'CHINE',
            ],
            [
                'Id' => '47',
                'Code' => 'CX',
                'Name' => 'CHRISTMAS, ÎLE',
            ],
            [
                'Id' => '48',
                'Code' => 'CY',
                'Name' => 'CHYPRE',
            ],
            [
                'Id' => '49',
                'Code' => 'CC',
                'Name' => 'COCOS (KEELING), ÎLES',
            ],
            [
                'Id' => '50',
                'Code' => 'CO',
                'Name' => 'COLOMBIE',
            ],
            [
                'Id' => '51',
                'Code' => 'KM',
                'Name' => 'COMORES',
            ],
            [
                'Id' => '52',
                'Code' => 'CG',
                'Name' => 'CONGO',
            ],
            [
                'Id' => '53',
                'Code' => 'CD',
                'Name' => 'CONGO, LA RÉPUBLIQUE DÉMOCRATIQUE DU',
            ],
            [
                'Id' => '54',
                'Code' => 'CK',
                'Name' => 'COOK, ÎLES',
            ],
            [
                'Id' => '55',
                'Code' => 'KR',
                'Name' => 'CORÉE, RÉPUBLIQUE DE',
            ],
            [
                'Id' => '56',
                'Code' => 'KP',
                'Name' => 'CORÉE, RÉPUBLIQUE POPULAIRE DÉMOCRATIQUE DE',
            ],
            [
                'Id' => '57',
                'Code' => 'CR',
                'Name' => 'COSTA RICA',
            ],
            [
                'Id' => '58',
                'Code' => 'CI',
                'Name' => 'CÔTE D\'IVOIRE',
            ],
            [
                'Id' => '59',
                'Code' => 'HR',
                'Name' => 'CROATIE',
            ],
            [
                'Id' => '60',
                'Code' => 'CU',
                'Name' => 'CUBA',
            ],
            [
                'Id' => '61',
                'Code' => 'DK',
                'Name' => 'DANEMARK',
            ],
            [
                'Id' => '62',
                'Code' => 'DJ',
                'Name' => 'DJIBOUTI',
            ],
            [
                'Id' => '63',
                'Code' => 'DO',
                'Name' => 'DOMINICAINE, RÉPUBLIQUE',
            ],
            [
                'Id' => '64',
                'Code' => 'DM',
                'Name' => 'DOMINIQUE',
            ],
            [
                'Id' => '65',
                'Code' => 'EG',
                'Name' => 'ÉGYPTE',
            ],
            [
                'Id' => '66',
                'Code' => 'SV',
                'Name' => 'EL SALVADOR',
            ],
            [
                'Id' => '67',
                'Code' => 'AE',
                'Name' => 'ÉMIRATS ARABES UNIS',
            ],
            [
                'Id' => '68',
                'Code' => 'EC',
                'Name' => 'ÉQUATEUR',
            ],
            [
                'Id' => '69',
                'Code' => 'ER',
                'Name' => 'ÉRYTHRÉE',
            ],
            [
                'Id' => '70',
                'Code' => 'ES',
                'Name' => 'ESPAGNE',
            ],
            [
                'Id' => '71',
                'Code' => 'EE',
                'Name' => 'ESTONIE',
            ],
            [
                'Id' => '72',
                'Code' => 'US',
                'Name' => 'ÉTATS-UNIS',
            ],
            [
                'Id' => '73',
                'Code' => 'ET',
                'Name' => 'ÉTHIOPIE',
            ],
            [
                'Id' => '74',
                'Code' => 'FK',
                'Name' => 'FALKLAND, ÎLES (MALVINAS)',
            ],
            [
                'Id' => '75',
                'Code' => 'FO',
                'Name' => 'FÉROÉ, ÎLES',
            ],
            [
                'Id' => '76',
                'Code' => 'FJ',
                'Name' => 'FIDJI',
            ],
            [
                'Id' => '77',
                'Code' => 'FI',
                'Name' => 'FINLANDE',
            ],
            [
                'Id' => '78',
                'Code' => 'FR',
                'Name' => 'FRANCE',
            ],
            [
                'Id' => '79',
                'Code' => 'GA',
                'Name' => 'GABON',
            ],
            [
                'Id' => '80',
                'Code' => 'GM',
                'Name' => 'GAMBIE',
            ],
            [
                'Id' => '81',
                'Code' => 'GE',
                'Name' => 'GÉORGIE',
            ],
            [
                'Id' => '82',
                'Code' => 'GS',
                'Name' => 'GÉORGIE DU SUD ET LES ÎLES SANDWICH DU SUD',
            ],
            [
                'Id' => '83',
                'Code' => 'GH',
                'Name' => 'GHANA',
            ],
            [
                'Id' => '84',
                'Code' => 'GI',
                'Name' => 'GIBRALTAR',
            ],
            [
                'Id' => '85',
                'Code' => 'GR',
                'Name' => 'GRÈCE',
            ],
            [
                'Id' => '86',
                'Code' => 'GD',
                'Name' => 'GRENADE',
            ],
            [
                'Id' => '87',
                'Code' => 'GL',
                'Name' => 'GROENLAND',
            ],
            [
                'Id' => '88',
                'Code' => 'GP',
                'Name' => 'GUADELOUPE',
            ],
            [
                'Id' => '89',
                'Code' => 'GU',
                'Name' => 'GUAM',
            ],
            [
                'Id' => '90',
                'Code' => 'GT',
                'Name' => 'GUATEMALA',
            ],
            [
                'Id' => '91',
                'Code' => 'GN',
                'Name' => 'GUINÉE',
            ],
            [
                'Id' => '92',
                'Code' => 'GW',
                'Name' => 'GUINÉE-BISSAU',
            ],
            [
                'Id' => '93',
                'Code' => 'GQ',
                'Name' => 'GUINÉE ÉQUATORIALE',
            ],
            [
                'Id' => '94',
                'Code' => 'GY',
                'Name' => 'GUYANA',
            ],
            [
                'Id' => '95',
                'Code' => 'GF',
                'Name' => 'GUYANE FRANÇAISE',
            ],
            [
                'Id' => '96',
                'Code' => 'HT',
                'Name' => 'HAÏTI',
            ],
            [
                'Id' => '97',
                'Code' => 'HM',
                'Name' => 'HEARD, ÎLE ET MCDONALD, ÎLES',
            ],
            [
                'Id' => '98',
                'Code' => 'HN',
                'Name' => 'HONDURAS',
            ],
            [
                'Id' => '99',
                'Code' => 'HK',
                'Name' => 'HONG-KONG',
            ],
            [
                'Id' => '100',
                'Code' => 'HU',
                'Name' => 'HONGRIE',
            ],
            [
                'Id' => '101',
                'Code' => 'UM',
                'Name' => 'ÎLES MINEURES ÉLOIGNÉES DES ÉTATS-UNIS',
            ],
            [
                'Id' => '102',
                'Code' => 'VG',
                'Name' => 'ÎLES VIERGES BRITANNIQUES',
            ],
            [
                'Id' => '103',
                'Code' => 'VI',
                'Name' => 'ÎLES VIERGES DES ÉTATS-UNIS',
            ],
            [
                'Id' => '104',
                'Code' => 'IN',
                'Name' => 'INDE',
            ],
            [
                'Id' => '105',
                'Code' => 'ID',
                'Name' => 'INDONÉSIE',
            ],
            [
                'Id' => '106',
                'Code' => 'IR',
                'Name' => 'IRAN, RÉPUBLIQUE ISLAMIQUE D\'',
            ],
            [
                'Id' => '107',
                'Code' => 'IQ',
                'Name' => 'IRAQ',
            ],
            [
                'Id' => '108',
                'Code' => 'IE',
                'Name' => 'IRLANDE',
            ],
            [
                'Id' => '109',
                'Code' => 'IS',
                'Name' => 'ISLANDE',
            ],
            [
                'Id' => '110',
                'Code' => 'IL',
                'Name' => 'ISRAËL',
            ],
            [
                'Id' => '111',
                'Code' => 'IT',
                'Name' => 'ITALIE',
            ],
            [
                'Id' => '112',
                'Code' => 'JM',
                'Name' => 'JAMAÏQUE',
            ],
            [
                'Id' => '113',
                'Code' => 'JP',
                'Name' => 'JAPON',
            ],
            [
                'Id' => '114',
                'Code' => 'JO',
                'Name' => 'JORDANIE',
            ],
            [
                'Id' => '115',
                'Code' => 'KZ',
                'Name' => 'KAZAKHSTAN',
            ],
            [
                'Id' => '116',
                'Code' => 'KE',
                'Name' => 'KENYA',
            ],
            [
                'Id' => '117',
                'Code' => 'KG',
                'Name' => 'KIRGHIZISTAN',
            ],
            [
                'Id' => '118',
                'Code' => 'KI',
                'Name' => 'KIRIBATI',
            ],
            [
                'Id' => '119',
                'Code' => 'KW',
                'Name' => 'KOWEÏT',
            ],
            [
                'Id' => '120',
                'Code' => 'LA',
                'Name' => 'LAO, RÉPUBLIQUE DÉMOCRATIQUE POPULAIRE',
            ],
            [
                'Id' => '121',
                'Code' => 'LS',
                'Name' => 'LESOTHO',
            ],
            [
                'Id' => '122',
                'Code' => 'LV',
                'Name' => 'LETTONIE',
            ],
            [
                'Id' => '123',
                'Code' => 'LB',
                'Name' => 'LIBAN',
            ],
            [
                'Id' => '124',
                'Code' => 'LR',
                'Name' => 'LIBÉRIA',
            ],
            [
                'Id' => '125',
                'Code' => 'LY',
                'Name' => 'LIBYENNE, JAMAHIRIYA ARABE',
            ],
            [
                'Id' => '126',
                'Code' => 'LI',
                'Name' => 'LIECHTENSTEIN',
            ],
            [
                'Id' => '127',
                'Code' => 'LT',
                'Name' => 'LITUANIE',
            ],
            [
                'Id' => '128',
                'Code' => 'LU',
                'Name' => 'LUXEMBOURG',
            ],
            [
                'Id' => '129',
                'Code' => 'MO',
                'Name' => 'MACAO',
            ],
            [
                'Id' => '130',
                'Code' => 'MK',
                'Name' => 'MACÉDOINE, L\'EX-RÉPUBLIQUE YOUGOSLAVE DE',
            ],
            [
                'Id' => '131',
                'Code' => 'MG',
                'Name' => 'MADAGASCAR',
            ],
            [
                'Id' => '132',
                'Code' => 'MY',
                'Name' => 'MALAISIE',
            ],
            [
                'Id' => '133',
                'Code' => 'MW',
                'Name' => 'MALAWI',
            ],
            [
                'Id' => '134',
                'Code' => 'MV',
                'Name' => 'MALDIVES',
            ],
            [
                'Id' => '135',
                'Code' => 'ML',
                'Name' => 'MALI',
            ],
            [
                'Id' => '136',
                'Code' => 'MT',
                'Name' => 'MALTE',
            ],
            [
                'Id' => '137',
                'Code' => 'MP',
                'Name' => 'MARIANNES DU NORD, ÎLES',
            ],
            [
                'Id' => '138',
                'Code' => 'MA',
                'Name' => 'MAROC',
            ],
            [
                'Id' => '139',
                'Code' => 'MH',
                'Name' => 'MARSHALL, ÎLES',
            ],
            [
                'Id' => '140',
                'Code' => 'MQ',
                'Name' => 'MARTINIQUE',
            ],
            [
                'Id' => '141',
                'Code' => 'MU',
                'Name' => 'MAURICE',
            ],
            [
                'Id' => '142',
                'Code' => 'MR',
                'Name' => 'MAURITANIE',
            ],
            [
                'Id' => '143',
                'Code' => 'YT',
                'Name' => 'MAYOTTE',
            ],
            [
                'Id' => '144',
                'Code' => 'MX',
                'Name' => 'MEXIQUE',
            ],
            [
                'Id' => '145',
                'Code' => 'FM',
                'Name' => 'MICRONÉSIE, ÉTATS FÉDÉRÉS DE',
            ],
            [
                'Id' => '146',
                'Code' => 'MD',
                'Name' => 'MOLDOVA, RÉPUBLIQUE DE',
            ],
            [
                'Id' => '147',
                'Code' => 'MC',
                'Name' => 'MONACO',
            ],
            [
                'Id' => '148',
                'Code' => 'MN',
                'Name' => 'MONGOLIE',
            ],
            [
                'Id' => '149',
                'Code' => 'MS',
                'Name' => 'MONTSERRAT',
            ],
            [
                'Id' => '150',
                'Code' => 'MZ',
                'Name' => 'MOZAMBIQUE',
            ],
            [
                'Id' => '151',
                'Code' => 'MM',
                'Name' => 'MYANMAR',
            ],
            [
                'Id' => '152',
                'Code' => 'NA',
                'Name' => 'NAMIBIE',
            ],
            [
                'Id' => '153',
                'Code' => 'NR',
                'Name' => 'NAURU',
            ],
            [
                'Id' => '154',
                'Code' => 'NP',
                'Name' => 'NÉPAL',
            ],
            [
                'Id' => '155',
                'Code' => 'NI',
                'Name' => 'NICARAGUA',
            ],
            [
                'Id' => '156',
                'Code' => 'NE',
                'Name' => 'NIGER',
            ],
            [
                'Id' => '157',
                'Code' => 'NG',
                'Name' => 'NIGÉRIA',
            ],
            [
                'Id' => '158',
                'Code' => 'NU',
                'Name' => 'NIUÉ',
            ],
            [
                'Id' => '159',
                'Code' => 'NF',
                'Name' => 'NORFOLK, ÎLE',
            ],
            [
                'Id' => '160',
                'Code' => 'NO',
                'Name' => 'NORVÈGE',
            ],
            [
                'Id' => '161',
                'Code' => 'NC',
                'Name' => 'NOUVELLE-CALÉDONIE',
            ],
            [
                'Id' => '162',
                'Code' => 'NZ',
                'Name' => 'NOUVELLE-ZÉLANDE',
            ],
            [
                'Id' => '163',
                'Code' => 'IO',
                'Name' => 'OCÉAN INDIEN, TERRITOIRE BRITANNIQUE DE L\'',
            ],
            [
                'Id' => '164',
                'Code' => 'OM',
                'Name' => 'OMAN',
            ],
            [
                'Id' => '165',
                'Code' => 'UG',
                'Name' => 'OUGANDA',
            ],
            [
                'Id' => '166',
                'Code' => 'UZ',
                'Name' => 'OUZBÉKISTAN',
            ],
            [
                'Id' => '167',
                'Code' => 'PK',
                'Name' => 'PAKISTAN',
            ],
            [
                'Id' => '168',
                'Code' => 'PW',
                'Name' => 'PALAOS',
            ],
            [
                'Id' => '169',
                'Code' => 'PS',
                'Name' => 'PALESTINIEN OCCUPÉ, TERRITOIRE',
            ],
            [
                'Id' => '170',
                'Code' => 'PA',
                'Name' => 'PANAMA',
            ],
            [
                'Id' => '171',
                'Code' => 'PG',
                'Name' => 'PAPOUASIE-NOUVELLE-GUINÉE',
            ],
            [
                'Id' => '172',
                'Code' => 'PY',
                'Name' => 'PARAGUAY',
            ],
            [
                'Id' => '173',
                'Code' => 'NL',
                'Name' => 'PAYS-BAS',
            ],
            [
                'Id' => '174',
                'Code' => 'PE',
                'Name' => 'PÉROU',
            ],
            [
                'Id' => '175',
                'Code' => 'PH',
                'Name' => 'PHILIPPINES',
            ],
            [
                'Id' => '176',
                'Code' => 'PN',
                'Name' => 'PITCAIRN',
            ],
            [
                'Id' => '177',
                'Code' => 'PL',
                'Name' => 'POLOGNE',
            ],
            [
                'Id' => '178',
                'Code' => 'PF',
                'Name' => 'POLYNÉSIE FRANÇAISE',
            ],
            [
                'Id' => '179',
                'Code' => 'PR',
                'Name' => 'PORTO RICO',
            ],
            [
                'Id' => '180',
                'Code' => 'PT',
                'Name' => 'PORTUGAL',
            ],
            [
                'Id' => '181',
                'Code' => 'QA',
                'Name' => 'QATAR',
            ],
            [
                'Id' => '182',
                'Code' => 'RE',
                'Name' => 'RÉUNION',
            ],
            [
                'Id' => '183',
                'Code' => 'RO',
                'Name' => 'ROUMANIE',
            ],
            [
                'Id' => '184',
                'Code' => 'GB',
                'Name' => 'ROYAUME-UNI',
            ],
            [
                'Id' => '185',
                'Code' => 'RU',
                'Name' => 'RUSSIE, FÉDÉRATION DE',
            ],
            [
                'Id' => '186',
                'Code' => 'RW',
                'Name' => 'RWANDA',
            ],
            [
                'Id' => '187',
                'Code' => 'EH',
                'Name' => 'SAHARA OCCIDENTAL',
            ],
            [
                'Id' => '188',
                'Code' => 'SH',
                'Name' => 'SAINTE-HÉLÈNE',
            ],
            [
                'Id' => '189',
                'Code' => 'LC',
                'Name' => 'SAINTE-LUCIE',
            ],
            [
                'Id' => '190',
                'Code' => 'KN',
                'Name' => 'SAINT-KITTS-ET-NEVIS',
            ],
            [
                'Id' => '191',
                'Code' => 'SM',
                'Name' => 'SAINT-MARIN',
            ],
            [
                'Id' => '192',
                'Code' => 'PM',
                'Name' => 'SAINT-PIERRE-ET-MIQUELON',
            ],
            [
                'Id' => '193',
                'Code' => 'VA',
                'Name' => 'SAINT-SIÈGE (ÉTAT DE LA CITÉ DU VATICAN)',
            ],
            [
                'Id' => '194',
                'Code' => 'VC',
                'Name' => 'SAINT-VINCENT-ET-LES GRENADINES',
            ],
            [
                'Id' => '195',
                'Code' => 'SB',
                'Name' => 'SALOMON, ÎLES',
            ],
            [
                'Id' => '196',
                'Code' => 'WS',
                'Name' => 'SAMOA',
            ],
            [
                'Id' => '197',
                'Code' => 'AS',
                'Name' => 'SAMOA AMÉRICAINES',
            ],
            [
                'Id' => '198',
                'Code' => 'ST',
                'Name' => 'SAO TOMÉ-ET-PRINCIPE',
            ],
            [
                'Id' => '199',
                'Code' => 'SN',
                'Name' => 'SÉNÉGAL',
            ],
            [
                'Id' => '200',
                'Code' => 'CS',
                'Name' => 'SERBIE-ET-MONTÉNÉGRO',
            ],
            [
                'Id' => '201',
                'Code' => 'SC',
                'Name' => 'SEYCHELLES',
            ],
            [
                'Id' => '202',
                'Code' => 'SL',
                'Name' => 'SIERRA LEONE',
            ],
            [
                'Id' => '203',
                'Code' => 'SG',
                'Name' => 'SINGAPOUR',
            ],
            [
                'Id' => '204',
                'Code' => 'SK',
                'Name' => 'SLOVAQUIE',
            ],
            [
                'Id' => '205',
                'Code' => 'SI',
                'Name' => 'SLOVÉNIE',
            ],
            [
                'Id' => '206',
                'Code' => 'SO',
                'Name' => 'SOMALIE',
            ],
            [
                'Id' => '207',
                'Code' => 'SD',
                'Name' => 'SOUDAN',
            ],
            [
                'Id' => '208',
                'Code' => 'LK',
                'Name' => 'SRI LANKA',
            ],
            [
                'Id' => '209',
                'Code' => 'SE',
                'Name' => 'SUÈDE',
            ],
            [
                'Id' => '210',
                'Code' => 'CH',
                'Name' => 'SUISSE',
            ],
            [
                'Id' => '211',
                'Code' => 'SR',
                'Name' => 'SURINAME',
            ],
            [
                'Id' => '212',
                'Code' => 'SJ',
                'Name' => 'SVALBARD ET ÎLE JAN MAYEN',
            ],
            [
                'Id' => '213',
                'Code' => 'SZ',
                'Name' => 'SWAZILAND',
            ],
            [
                'Id' => '214',
                'Code' => 'SY',
                'Name' => 'SYRIENNE, RÉPUBLIQUE ARABE',
            ],
            [
                'Id' => '215',
                'Code' => 'TJ',
                'Name' => 'TADJIKISTAN',
            ],
            [
                'Id' => '216',
                'Code' => 'TW',
                'Name' => 'TAÏWAN, PROVINCE DE CHINE',
            ],
            [
                'Id' => '217',
                'Code' => 'TZ',
                'Name' => 'TANZANIE, RÉPUBLIQUE-UNIE DE',
            ],
            [
                'Id' => '218',
                'Code' => 'TD',
                'Name' => 'TCHAD',
            ],
            [
                'Id' => '219',
                'Code' => 'CZ',
                'Name' => 'TCHÈQUE, RÉPUBLIQUE',
            ],
            [
                'Id' => '220',
                'Code' => 'TF',
                'Name' => 'TERRES AUSTRALES FRANÇAISES',
            ],
            [
                'Id' => '221',
                'Code' => 'TH',
                'Name' => 'THAÏLANDE',
            ],
            [
                'Id' => '222',
                'Code' => 'TL',
                'Name' => 'TIMOR-LESTE',
            ],
            [
                'Id' => '223',
                'Code' => 'TG',
                'Name' => 'TOGO',
            ],
            [
                'Id' => '224',
                'Code' => 'TK',
                'Name' => 'TOKELAU',
            ],
            [
                'Id' => '225',
                'Code' => 'TO',
                'Name' => 'TONGA',
            ],
            [
                'Id' => '226',
                'Code' => 'TT',
                'Name' => 'TRINITÉ-ET-TOBAGO',
            ],
            [
                'Id' => '227',
                'Code' => 'TN',
                'Name' => 'TUNISIE',
            ],
            [
                'Id' => '228',
                'Code' => 'TM',
                'Name' => 'TURKMÉNISTAN',
            ],
            [
                'Id' => '229',
                'Code' => 'TC',
                'Name' => 'TURKS ET CAÏQUES, ÎLES',
            ],
            [
                'Id' => '230',
                'Code' => 'TR',
                'Name' => 'TURQUIE',
            ],
            [
                'Id' => '231',
                'Code' => 'TV',
                'Name' => 'TUVALU',
            ],
            [
                'Id' => '232',
                'Code' => 'UA',
                'Name' => 'UKRAINE',
            ],
            [
                'Id' => '233',
                'Code' => 'UY',
                'Name' => 'URUGUAY',
            ],
            [
                'Id' => '234',
                'Code' => 'VU',
                'Name' => 'VANUATU',
            ],
            [
                'Id' => '235',
                'Code' => 'VE',
                'Name' => 'VENEZUELA',
            ],
            [
                'Id' => '236',
                'Code' => 'VN',
                'Name' => 'VIET NAM',
            ],
            [
                'Id' => '237',
                'Code' => 'WF',
                'Name' => 'WALLIS ET FUTUNA',
            ],
            [
                'Id' => '238',
                'Code' => 'YE',
                'Name' => 'YÉMEN',
            ],
            [
                'Id' => '239',
                'Code' => 'ZM',
                'Name' => 'ZAMBIE',
            ],
            [
                'Id' => '240',
                'Code' => 'ZW',
                'Name' => 'ZIMBABWE',
            ],
            [
                'Id' => '241',
                'Code' => 'NS',
                'Name' => '(NON SPECIFIE)',
            ],
        ];

        $authorsData = [
            [
                'Id' => '1',
                'CountryId' => '219',
                'LastName' => 'Kundera',
                'FirstName' => 'Milan',
                'BirthDate' => '1947-08-24',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '2',
                'CountryId' => '113',
                'LastName' => 'Mishima',
                'FirstName' => 'Yukio',
                'BirthDate' => '1925-01-14',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '3',
                'CountryId' => '219',
                'LastName' => 'Kafka',
                'FirstName' => 'Franz',
                'BirthDate' => '1883-07-03',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '4',
                'CountryId' => '14',
                'LastName' => 'Borges',
                'FirstName' => 'Jorge Luis',
                'BirthDate' => '1899-08-08',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '5',
                'CountryId' => '46',
                'LastName' => 'Cheng',
                'FirstName' => 'François',
                'BirthDate' => '1929-08-30',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '6',
                'CountryId' => '78',
                'LastName' => 'Dantec',
                'FirstName' => 'Maurice G.',
                'BirthDate' => '1959-06-13',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '7',
                'CountryId' => '72',
                'LastName' => 'Burroughs',
                'FirstName' => 'William S.',
                'BirthDate' => '1914-02-05',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '8',
                'CountryId' => '104',
                'LastName' => 'Orwell',
                'FirstName' => 'George',
                'BirthDate' => '1903-06-25',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '9',
                'CountryId' => '184',
                'LastName' => 'Huxley',
                'FirstName' => 'Aldous',
                'BirthDate' => '1894-07-26',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '10',
                'CountryId' => '78',
                'LastName' => 'Barthes',
                'FirstName' => 'Roland',
                'BirthDate' => '1915-11-12',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '11',
                'CountryId' => '6',
                'LastName' => 'Marx',
                'FirstName' => 'Karl',
                'BirthDate' => '1818-05-05',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '12',
                'CountryId' => '34',
                'LastName' => 'Coelho',
                'FirstName' => 'Paulo',
                'BirthDate' => '1947-08-24',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '13',
                'CountryId' => '78',
                'LastName' => 'Ionesco',
                'FirstName' => 'Eugène',
                'BirthDate' => '1909-11-26',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
        ];

        $genresData = [
            [
                'Id' => '1',
                'Name' => 'Indéterminé',
                'Description' => '',
            ],
            [
                'Id' => '2',
                'Name' => 'Noir / Science-Fiction',
                'Description' => '',
            ],
            [
                'Id' => '3',
                'Name' => 'Fiction',
                'Description' => '',
            ],
            [
                'Id' => '4',
                'Name' => 'Roman',
                'Description' => '',
            ],
            [
                'Id' => '5',
                'Name' => 'Essai',
                'Description' => '',
            ],
            [
                'Id' => '6',
                'Name' => 'Anticipation',
                'Description' => '',
            ],
            [
                'Id' => '7',
                'Name' => 'Policier',
                'Description' => '',
            ],
            [
                'Id' => '8',
                'Name' => 'Théâtre',
                'Description' => '',
            ],
            [
                'Id' => '9',
                'Name' => 'Tragédie',
                'Description' => '',
            ],
            [
                'Id' => '10',
                'Name' => 'Autre',
                'Description' => '',
            ],
        ];

        $booksData = [
            [
                'Id' => '1',
                'UserId' => '',
                'Isbn' => '2070370437',
                'Title' => 'Villa vortex',
                'Summary' => 'Le 11 septembre 2001, l\'inspecteur Kernal décroche son téléphone qui lui explose à la figure. Agonisant, Kernal remonte le temps, nous racontant les dix dernières années de son existence, cette décennie où le monde tel que nous le connaissons part en fumée.
Fraîchement débarqué à la police de Vitry après de brillantes études en sciences sociales, Kernal avait été confronté à une série de crimes horribles entre 1991 et 1993 : des corps de jeunes filles recouverts de composants électroniques retrouvés aux environs de centrales électriques et nucléaires. Comme si le tueur voulait faire de ses victimes des marionnettes dernier cri…
Nous retrouvons dans Villa Vortex tous les thèmes chers à l\'auteur : serial killer technologique, décor urbain apocalyptique, drogues synthétiques, sous oublier l\'inscription du récit dans la réalité sociale et politique : l\'ex-Yougoslavie, l\'Algérie, la délinquance en banlieues, les attentats du World Trade Center… Dans cette critique hallucinée de la décennie 1990 qui a vu fleurir en Europe la misère économique, la violence, l\'insécurité généralisée et la haine, l\'auteur dépeint une société gangrenée par un Mal qui devient de plus en plus absolu à mesure même qu\'il se dévoile.',
                'PublicationYear' => '2003',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '2',
                'UserId' => '',
                'Isbn' => '2070370232',
                'Title' => 'Le tumulte des flots',
                'Summary' => 'Une retranscription de Daphnis et Chloé au pays du soleil levant.
Une intrigue hésitant entre cul-cul et gnangnan, sans aucun suspens ou rebondissement, avec des images si grossières qu\'elles feraient honte même aux imprimeurs d\'Epinal. Mais alors ? Pourquoi lire ce livre ? Bein, Parsqu\'il est intéressant !
Retranscription d\'un mythe que peu d\'entre nous ont effectivement lus mais qui est passé dans la connaissance inconsciente et collective : le jeune couple dont l\'amour est rendu impossible pour des histoires de convenance et de fortune mais qui, à force de courage et de vertu finit par légitimer l\'union. Une véritable propagande de bonne conduite pour les jeunes gens de tous les pays. Affligeant.
Néanmoins, la retranscription de cette histoire dans une petite province japonaise des années 50 nous en apprend énormément sur le système de valeurs japonais si différent du nôtre. Toutes les images et caricatures y passant, ce document constitue une véritable " pierre de Rosette " pour qui souhaite se constituer un ABCdaire comportemental japonais.
En outre, Mishima dépeint fantastiquement les paysages de bord de mer du Japon. Il sait nous faire sentir le sable et les embruns et nous décrire les pensées simples ou tortueuses de ses habitants. De bonnes cartes postales très représentatives tant du paysage que des occupations et préoccupations des villageois.',
                'PublicationYear' => '1969',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '3',
                'UserId' => '',
                'Isbn' => '2070381056',
                'Title' => 'La métamorphose (et autres récits)',
                'Summary' => 'Lorsque Gregor Samsa s\'éveille, un matin, après des rêves agités, il est bel et bien métamorphosé. Doté d\'une épaisse carapace d\'où s\'échappent de pitoyables petites pattes ! Lugubre cocasserie ? Hélas, ultime défense contre ceux qui, certes, ne sont pas des monstres mais de vulgaires parasites... Les siens. Père, mère, soeur, dont l\'ambition est de l\'éliminer après avoir contribué à l\'étouffer... Ici, un homme se transforme en coléoptère monstrueux, là, un engin pervers tue avec application... Dans la colonie pénitentiaire, c\'est l\'expérimentation en direct. Une machine infernale s\'acharne sur un soldat soumis. Une machinerie hors pair, digne d\'un inventeur à l\'imagination torturée !',
                'PublicationYear' => '1980',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '4',
                'UserId' => '',
                'Isbn' => '2070366146',
                'Title' => 'Fictions',
                'Summary' => 'Sans doute y a-t-il du dilettantisme dans ces Fictions, jeux de l\'esprit et exercices de style fort ingénieux. Pourtant, le pluriel signale d\'emblée qu\'il s\'agit d\'une réflexion sur la richesse foisonnante de l\'imagination. Au nombre de dix-huit, ces contes fantastiques révèlent, chacun à sa manière, une ambition totalisante qui s\'exprime à travers de nombreux personnages au projet démiurgique ou encore à travers La Bibliothèque de Babel, qui prétend contenir l\'ensemble des livres, existants ou non.
La multitude d\'univers parallèles et d\'effets de miroir engendrent un "délire circulaire" vertigineux, une interrogation sur la relativité du temps et de l\'espace. Dans quelle dimension sommes-nous ? Qui est ce "je" qui raconte l\'invasion de la cité dans La Loterie de Babylone ? En mettant en vis-à-vis le Quichotte de Ménard et celui de Cervantès, lit-on la même chose ou bien la décision de redire suffit-elle à rendre la redite impossible ? ',
                'PublicationYear' => '1965',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '5',
                'UserId' => '',
                'Isbn' => '2070411761',
                'Title' => 'L\'identité',
                'Summary' => 'Grinçant, ironique et cruel, ce récit de la vie d\'un couple permet à l\'écrivain de transformer une histoire somme toute banale, en un fait de société dont le titre fournit un écho. Véritable crise concernant la place que chacun tient par rapport à l\'autre.',
                'PublicationYear' => '1997',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '6',
                'UserId' => '',
                'Isbn' => '2220050890',
                'Title' => 'Le dialogue',
                'Summary' => 'Une fois n\'est pas coutume : pour traiter du thème entre les cultures et les civilisations, la collection Proches Lointains accueille dans ce volume unique un seul auteur, François Cheng. Et qui pouvait mieux symboliser, incarner le pont entre le monde chinois et l\'univers occidental que l\'auteur du Dit du Tianyi? Récemment couronné du Grand Prix de la Francophonie décerné par l\'Académie française, François Cheng, exilé de Chine et arrivé à Paris au cours de l\'après-guerre, s\'est illustré dans plus d\'un genre littéraire : la poésie, l\'art calligraphique, le roman. C\'est son aventure linguistique et sa passion des mots et de la littérature française qu\'il nous fait partager ici, en s\'interrogeant aussi sur la dimension intérieure, personnelle du dialogue, au-delà de la seule fracture entre les deux cultures.
Ecrivain, François Cheng a notamment publié Le Dit de Tianyi (Albin Michel, 1998), Chu Ta (Phebus, 1999), Poésie chinoise (Albin Michel, 2000), D\'où jaillit le chant (Phébus, 2000), Qui dira notre nuit (Arfuyen, 2001).',
                'PublicationYear' => '2002',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '7',
                'UserId' => '',
                'Isbn' => '2070417530',
                'Title' => 'Babylon babies',
                'Summary' => 'Un mafieux sibérien collectionneur de missiles. Un officier du GRU corrompu et lecteur de Sun Tzu. Une jeune schizophrène serai-amnésique trimbalant une arme biologique révolutionnaire. Des scientifiques assumant leur rôle d\'apprentis sorciers et prêts à transgresser la Loi. Une poignée de soldats perdus à l\'autre bout du monde, se battant pour des causes sans espoir. Des sectes post millénaristes à l\'assaut des Citadelles du savoir. Des gangs de bikers se livrant à une guerre sans merci à coups de lance-roquettes. De jeunes technopunks préparant l\'Apocalypse. Un écrivain de science-Fiction à moitié fou prétendant recevoir des messages du futur. N\'ayez pas peur.',
                'PublicationYear' => '1999',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '8',
                'UserId' => '',
                'Isbn' => '2070417535',
                'Title' => 'Le ticket qui explosa',
                'Summary' => 'Après avoir achevé son opus magnus, le Festin nu, William S. Burroughs se lance dans une longue période expérimentale. Dans sa petite chambre du Beat Hotel de la rue Gît-le-Coeur, il crée un véritable laboratoire d\'écriture. C\'est dans ce laboratoire faustien que naît le projet d\'une oeuvre ambitieuse et risquée qui prend la forme d\'un triptyque. Le premier volet, la Machine molle, paraît en 1961. Les deux suivants, le Ticket qui explosa et Nova Express sont écrits entre 1961 et 1964. A propos de la Trilogie, Burroughs affirme : " Je tente de créer une mythologie nouvelle pour l\'ère spatiale. Je sens que les vieilles mythologies sont définitivement brisées et ne sont pas adaptées au temps présent. " Norman Mailer y voit une vision de l\'Enfer, " un Enfer qui peut-être nous attend, produit final et apogée de la révolution scientifique ". Marshall MacLuhan y ressent une volonté de transcrire " en prose ce dont nous nous accommodons (...) comme un aspet banal de la vie à l\'âge électronique. Si la vie collective doit être rendue sur le papier, il faut employer la méthode de non-histoire discontinue. " Burroughs, comme Dante et Milton, s\'est employé à représenter la position de l\'homme dans l\'univers -, une position intenable, déchirante et absurde.',
                'PublicationYear' => '1969',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '9',
                'UserId' => '',
                'Isbn' => '207036822X',
                'Title' => '1984',
                'Summary' => 'De tous les carrefours importants, le visage à la moustache noire vous fixait du regard. Il y en avait un sur le mur d\'en face. Big Brother vous regarde, répétait la légende, tandis que le regard des yeux noirs pénétrait les yeux de Winston... Au loin, un hélicoptère glissa entre les toits, plana un moment, telle une mouche bleue, puis repartit comme une flèche, dans un vol courbe. C\'était une patrouille qui venait mettre le nez aux fenêtres des gens. Mais les patrouilles n\'avaient pas d\'importance. Seule comptait la Police de la Pensée.',
                'PublicationYear' => '1979',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '10',
                'UserId' => '',
                'Isbn' => '2070378314',
                'Title' => 'Le livre du rire et de l\'oubli',
                'Summary' => 'L\'exilé peut tout sauf oublier. C\'est ainsi que Kundera, écrivain tchèque exilé en France, dans les sept chapitres apparemment disparates de ce roman, revient toujours au drame de sa Bohème natale. Selon Fernandez, on peut lire ce "vagabondage tendre et cocasse aux royaumes de l\'amour et de la mort" sans se référer au contexte historique. Un très beau roman que Jacques Godbout qualifie de "difficile mais génial" et dont la tonalité majeure est un pessimisme tonique.',
                'PublicationYear' => '2000',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '11',
                'UserId' => '',
                'Isbn' => '2070407756',
                'Title' => 'Les racines du mal',
                'Summary' => '"Andreas Schaltzmann s\'est mis à tuer parce que son estomac pourrissait. Le phénomène n\'était pas isolé, tant s\'en faut. Cela faisait longtemps que les ondes cosmiques émises par les Aliens faisaient changer ses organes de place, depuis que les nazis et les habitants de Vega s\'étaient installés dans ses quartiers." Andreas est un tueur et il le sait, mais quand on cherche à lui coller sur le dos des crimes qu\'il n\'a pas commis, du fond de sa clinique, il hurle.',
                'PublicationYear' => '2002',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '12',
                'UserId' => '',
                'Isbn' => '2020060604',
                'Title' => 'Le plaisir du texte',
                'Summary' => 'Que savons-nous du texte ? La théorie, ces derniers temps, a commencé de répondre. Reste une question : que jouissons-nous du texte ? Cette question, il faut la poser, ne serait-ce que pour une raison tactique : il faut affirmer le plaisir du texte contre les indifférences de la science et le puritanisme de l\'analyse idéologique; il faut affirmer la jouissance du texte contre l\'aplatissement de la littérature à son simple agrément. Comment poser cette question? Il se trouve que le propre de la jouissance, c\'est de ne pouvoir être dite. Il a donc fallu s\'en remettre à une succession inordonnée de fragments facettes, touches, bulles, phylactères d\'un dessin invisible : simple mise en scène de la question, rejeton hors-science de l\'analyse textuelle.',
                'PublicationYear' => '1999',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '13',
                'UserId' => '',
                'Isbn' => '2264034076',
                'Title' => 'Les portes de la perception',
                'Summary' => 'Par l\'ingestion de mescaline, Aldous Huxley rejoint à son tour le paradis artificiel de Nerval et Baudelaire. Mais l\'originalité de cette expérience tient à la volonté scientifique qui l\'anime : en 1954, c\'est sous contrôle médical que le romancier absorbe la drogue dans le but d\'ouvrir, selon l\'expression de William Blake, " les portes de la perception " et de " connaître, par l\'intérieur, ce dont parlaient le visionnaire, le médium, et même le mystique, le miracle [...] de l\'existence dans sa nudité, la réalité manifestée ". Outre ce récit initiatique, éponyme de l\'ouvrage, sont rassemblés ici des essais qui témoignent d\'une recherche spirituelle constante depuis La Philosophie éternelle (1945). A travers une culture syncrétique qui traite avec une même ferveur la pensée bouddhiste zen et le dogme catholique, se dessine le souci de mettre chacun sur la voie de l\'illumination par la contemplation et le recueillement. Cette orientation donne aux réflexions de Huxley, sur le temps, l\'art, le progrès et surtout la violence et la paix une dimension intemporelle. Cet essai a été suivi d\'un autre qui le complète et l\'enrichit, le ciel et l\'enfer, réédité en 1999 aux éditions du Rocher.',
                'PublicationYear' => '1954',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
            [
                'Id' => '14',
                'UserId' => '',
                'Isbn' => '2080710028',
                'Title' => 'Manifeste du parti communiste',
                'Summary' => 'Chef-d\'oeuvre précoce de Marx et Engels, le Manifeste marque un tournant dans l\'histoire du mouvement ouvrier : retraçant brièvement la genèse de la lutte des classes, Marx et Engels voulaient aussi doter la classe ouvrière d\'un programme donnant des fondements scientifiques et durables à toute action révolutionnaire. Le résultat fut cette oeuvre brève, mondialement diffusée et dont la première édition vit le jour en 1848. Le présent volume comporte, outre le texte du Manifeste, un dossier qui inclut les préfaces des différentes éditions et des extraits de la correspondance entre Marx et Engels.',
                'PublicationYear' => '1999',
                'IssueDate' => '',
                'CreatedAt' => '2024-02-03 16:33:45',
                'UpdatedAt' => '2024-02-03 16:33:45',
            ],
        ];

        $coversData = [
            [
                'Id' => '1',
                'BookId' => '1',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '1.jpg',
            ],
            [
                'Id' => '2',
                'BookId' => '2',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '2.jpg',
            ],
            [
                'Id' => '3',
                'BookId' => '3',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '3.jpg',
            ],
            [
                'Id' => '4',
                'BookId' => '4',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '4.jpg',
            ],
            [
                'Id' => '5',
                'BookId' => '5',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '5.jpg',
            ],
            [
                'Id' => '6',
                'BookId' => '6',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '6.jpg',
            ],
            [
                'Id' => '7',
                'BookId' => '7',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '7.jpg',
            ],
            [
                'Id' => '8',
                'BookId' => '8',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '8.jpg',
            ],
            [
                'Id' => '9',
                'BookId' => '9',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '9.jpg',
            ],
            [
                'Id' => '10',
                'BookId' => '10',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '10.jpg',
            ],
            [
                'Id' => '11',
                'BookId' => '11',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '11.jpg',
            ],
            [
                'Id' => '12',
                'BookId' => '12',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '12.jpg',
            ],
            [
                'Id' => '13',
                'BookId' => '13',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '13.jpg',
            ],
            [
                'Id' => '14',
                'BookId' => '14',
                'Title' => 'Couverture',
                'Description' => 'Commentaire sur la couverture du livre',
                'FilePath' => '14.jpg',
            ],
        ];

        $bookAuthorsData = [
            [
                'BookId' => '1',
                'AuthorId' => '6',
            ],
            [
                'BookId' => '2',
                'AuthorId' => '2',
            ],
            [
                'BookId' => '3',
                'AuthorId' => '3',
            ],
            [
                'BookId' => '4',
                'AuthorId' => '4',
            ],
            [
                'BookId' => '5',
                'AuthorId' => '1',
            ],
            [
                'BookId' => '6',
                'AuthorId' => '5',
            ],
            [
                'BookId' => '7',
                'AuthorId' => '6',
            ],
            [
                'BookId' => '8',
                'AuthorId' => '7',
            ],
            [
                'BookId' => '9',
                'AuthorId' => '8',
            ],
            [
                'BookId' => '10',
                'AuthorId' => '1',
            ],
            [
                'BookId' => '11',
                'AuthorId' => '6',
            ],
            [
                'BookId' => '12',
                'AuthorId' => '5',
            ],
            [
                'BookId' => '13',
                'AuthorId' => '9',
            ],
            [
                'BookId' => '14',
                'AuthorId' => '11',
            ],
        ];

        $bookGenresData = [
            [
                'BookId' => '1',
                'GenreId' => '7',
            ],
            [
                'BookId' => '2',
                'GenreId' => '4',
            ],
            [
                'BookId' => '3',
                'GenreId' => '3',
            ],
            [
                'BookId' => '4',
                'GenreId' => '3',
            ],
            [
                'BookId' => '5',
                'GenreId' => '4',
            ],
            [
                'BookId' => '6',
                'GenreId' => '5',
            ],
            [
                'BookId' => '7',
                'GenreId' => '2',
            ],
            [
                'BookId' => '8',
                'GenreId' => '6',
            ],
            [
                'BookId' => '9',
                'GenreId' => '6',
            ],
            [
                'BookId' => '10',
                'GenreId' => '4',
            ],
            [
                'BookId' => '11',
                'GenreId' => '2',
            ],
            [
                'BookId' => '12',
                'GenreId' => '5',
            ],
            [
                'BookId' => '13',
                'GenreId' => '4',
            ],
            [
                'BookId' => '14',
                'GenreId' => '5',
            ],
        ];

        /**
         * ---------- Create Users
         */

        foreach ($usersData as $userData) {
            $user = new User();

            $user->setEmail($userData['Email']);
            $user->setPassword($userData['Password']);
            $user->setRoles(['ROLE_USER']);
            $user->setLastName($userData['LastName']);
            $user->setFirstName($userData['FirstName']);
            $user->setAddress($userData['Address']);
            $user->setZipCode($userData['ZipCode']);
            $user->setBirthDate(new \DateTime($userData['BirthDate']));
            $user->setCreatedAt(new \DateTime());
            $user->setUpdatedAt(new \DateTime());

            $manager->persist($user);
        }
        $manager->flush();

        /**
         * ---------- Create Countries
         */

        foreach ($countriesData as $countryData) {
            $country = new Country();

            $country->setCode($countryData['Code']);
            $country->setName($countryData['Name']);

            $manager->persist($country);
        }
        $manager->flush();

        /**
         * ---------- Create Authors
         */

        foreach ($authorsData as $authorData) {
            $author = new Author();
            $country = $manager->getRepository(Country::class)->find($authorData['CountryId']);

            $author->setCountry($country);
            $author->setLastName($authorData['LastName']);
            $author->setFirstName($authorData['FirstName']);
            $author->setBirthDate(new \DateTime($authorData['BirthDate']));
            $author->setCreatedAt(new \DateTime());
            $author->setUpdatedAt(new \DateTime());

            $manager->persist($author);
        }
        $manager->flush();

        /**
         * ---------- Create Genres
         */

        foreach ($genresData as $genreData) {
            $genre = new Genre();

            $genre->setName($genreData['Name']);
            $genre->setDescription($genreData['Description']);

            $manager->persist($genre);
        }
        $manager->flush();

        /**
         * ---------- Create Books
         */

        foreach ($booksData as $bookData) {
            $book = new Book();

            $book->setIsbn($bookData['Isbn']);
            $book->setTitle($bookData['Title']);
            $book->setSummary($bookData['Summary']);
            $book->setPublicationYear($bookData['PublicationYear']);
            $book->setCreatedAt(new \DateTime());
            $book->setUpdatedAt(new \DateTime());

            $manager->persist($book);
        }
        $manager->flush();

        /**
         * ---------- Create Covers
         */

        $bookId = 1;
        foreach ($coversData as $coverData) {
            $cover = new Cover();

            $book = $manager->getRepository(Book::class)->find($bookId);

            $cover->setBook($book);
            $cover->setTitle($coverData['Title']);
            $cover->setDescription($coverData['Description']);
            $cover->setFilePath($bookId . '.jpg');

            $manager->persist($cover);
            $bookId++;
        }
        $manager->flush();

        /**
         * ---------- Create Book|Author many-to-many association
         */

        foreach ($bookAuthorsData as $bookAuthorData) {
            $book = $manager->getRepository(Book::class)->find($bookAuthorData['BookId']);
            $author = $manager->getRepository(Author::class)->find($bookAuthorData['AuthorId']);
            $book->addAuthor($author);

            $manager->persist($book);
        }
        $manager->flush();

        /**
         * ---------- Create Book|Genre many-to-many association
         */

        foreach ($bookGenresData as $bookGenreData) {
            $book = $manager->getRepository(Book::class)->find($bookGenreData['BookId']);
            $genre = $manager->getRepository(Genre::class)->find($bookGenreData['GenreId']);
            $book->addGenre($genre);

            $manager->persist($book);
        }
        $manager->flush();

    }
}
