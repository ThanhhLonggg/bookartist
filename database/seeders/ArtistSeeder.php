<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Thêm dữ liệu mẫu vào bảng artists
        Artist::create([
            'FirstName' => 'Alice',
            'LastName' => 'Johnson',
            'BirthDate' => '1988-05-10',
            'Img' => 'alice.jpg',
            'Specialty' => 'Painter',
            'Description' => 'Talented painter with a unique style',
        ]);

        $artistData = [
            [
                'Name' => 'Beyoncé',
                'Product' => 'Lemonade', // Tên album
                'Sex' => 'Female',
                'BirthDate' => '1981-09-04',
                'Img' => 'beyonce.jpg',
                'Price' => 200,
                'Description' => 'Iconic singer and performer with a powerful voice',
            ],
            [
                'Name' => 'Ed Sheeran',
                'Product' => '÷ (Divide)', // Tên album
                'Sex' => 'Male',
                'BirthDate' => '1991-02-17',
                'Img' => 'edsheeran.jpg',
                'Price' => 180,
                'Description' => 'Chart-topping artist known for his soulful music',
            ],
            [
                'Name' => 'Adele',
                'Product' => '25', // Tên album
                'Sex' => 'Female',
                'BirthDate' => '1988-05-05',
                'Img' => 'adele.jpg',
                'Price' => 190,
                'Description' => 'Soulful singer with a voice that resonates emotions',
            ],
            [
                'Name' => 'Ariana Grande',
                'Product' => 'Thank U, Next', // Tên album
                'Sex' => 'Female',
                'BirthDate' => '1993-06-26',
                'Img' => 'ariana.jpg',
                'Price' => 220,
                'Description' => 'Pop sensation known for her powerful vocals',
            ],
            [
                'Name' => 'Justin Bieber',
                'Product' => 'Purpose', // Tên album
                'Sex' => 'Male',
                'BirthDate' => '1994-03-01',
                'Img' => 'justin.jpg',
                'Price' => 210,
                'Description' => 'Global pop star with a massive fan following',
            ],
            [
                'Name' => 'Adele',
                'Product' => '21', // Tên album
                'Sex' => 'Female',
                'BirthDate' => '1988-05-05',
                'Img' => 'adele.jpg',
                'Price' => 220,
                'Description' => 'Soulful singer known for her emotional ballads',
            ],
            [
                'Name' => 'Eminem',
                'Product' => 'The Marshall Mathers LP', // Tên album
                'Sex' => 'Male',
                'BirthDate' => '1972-10-17',
                'Img' => 'eminem.jpg',
                'Price' => 210,
                'Description' => 'Rap legend with a unique lyrical style',
            ],
            [
                'Name' => 'Michael Jackson',
                'Product' => 'Thriller', // Tên album
                'Sex' => 'Male',
                'BirthDate' => '1958-08-29',
                'Img' => 'michael.jpg',
                'Price' => 300,
                'Description' => 'The King of Pop with record-breaking music career',
            ],
            [
                'Name' => 'Taylor Swift',
                'Product' => '1989', // Tên album
                'Sex' => 'Female',
                'BirthDate' => '1989-12-13',
                'Img' => 'taylorswift.jpg',
                'Price' => 230,
                'Description' => 'Award-winning singer-songwriter with a massive fanbase',
            ],
            [
                'Name' => 'Elton John',
                'Product' => 'Goodbye Yellow Brick Road', // Tên album
                'Sex' => 'Male',
                'BirthDate' => '1947-03-25',
                'Img' => 'elton.jpg',
                'Price' => 300,
                'Description' => 'Legendary musician and songwriter with a lasting impact',
            ],
            [
                'Name' => 'Rihanna',
                'Product' => 'ANTI',
                'Sex' => 'Female',
                'BirthDate' => '1988-02-20',
                'Img' => 'rihanna.jpg',
                'Price' => 550,
                'Description' => 'Barbadian singer known for hits like "Umbrella", "Diamonds", and her distinctive voice.',
            ],
            [
                'Name' => 'Katy Perry',
                'Product' => 'Teenage Dream',
                'Sex' => 'Female',
                'BirthDate' => '1984-10-25',
                'Img' => 'katyperry.jpg',
                'Price' => 500,
                'Description' => 'Pop sensation known for catchy songs such as "Firework" and "Roar".',
            ],
            [
                'Name' => 'Bruno Mars',
                'Product' => '24K Magic',
                'Sex' => 'Male',
                'BirthDate' => '1985-10-08',
                'Img' => 'brunomars.jpg',
                'Price' => 580,
                'Description' => 'Multi-talented artist with hits like "Just the Way You Are" and "Uptown Funk".',
            ],
            [
                'Name' => 'Billie Eilish',
                'Product' => 'When We All Fall Asleep, Where Do We Go?',
                'Sex' => 'Female',
                'BirthDate' => '2001-12-18',
                'Img' => 'billieeilish.jpg',
                'Price' => 600,
                'Description' => 'Singer-songwriter known for her unique sound and hits like "Bad Guy" and "Ocean Eyes".',
            ],
            [
                'Name' => 'Dua Lipa',
                'Product' => 'Future Nostalgia',
                'Sex' => 'Female',
                'BirthDate' => '1995-08-22',
                'Img' => 'dualipa.jpg',
                'Price' => 580,
                'Description' => 'British singer with hits like "New Rules" and "Don\'t Start Now".',
            ],
            [
                'Name' => 'Harry Styles',
                'Product' => 'Fine Line',
                'Sex' => 'Male',
                'BirthDate' => '1994-02-01',
                'Img' => 'harrystyles.jpg',
                'Price' => 620,
                'Description' => 'Former One Direction member known for his solo career and hits like "Watermelon Sugar".',
            ],
            [
                'Name' => 'Selena Gomez',
                'Product' => 'Rare',
                'Sex' => 'Female',
                'BirthDate' => '1992-07-22',
                'Img' => 'selenagomez.jpg',
                'Price' => 580,
                'Description' => 'Singer and actress known for hits like "Come & Get It" and her roles in TV shows and movies.',
            ],
            [
                'Name' => 'Shawn Mendes',
                'Product' => 'Illuminate',
                'Sex' => 'Male',
                'BirthDate' => '1998-08-08',
                'Img' => 'shawnmendes.jpg',
                'Price' => 550,
                'Description' => 'Canadian singer-songwriter with chart-topping songs like "Stitches" and "Señorita".',
            ],
            [
                'Name' => 'Olivia Rodrigo',
                'Product' => 'SOUR',
                'Sex' => 'Female',
                'BirthDate' => '2003-02-20',
                'Img' => 'oliviarodrigo.jpg',
                'Price' => 600,
                'Description' => 'Rising star with hits like "drivers license" and "good 4 u".',
            ],
            [
                'Name' => 'Zayn Malik',
                'Product' => 'Pillowtalk',
                'Sex' => 'Male',
                'BirthDate' => '1993-01-12',
                'Img' => 'zaynmalik.jpg',
                'Price' => 600,
                'Description' => 'Former member of One Direction turned successful solo artist.',
            ],
            [
                'Name' => 'Miley Cyrus',
                'Product' => 'Wrecking Ball',
                'Sex' => 'Female',
                'BirthDate' => '1992-11-23',
                'Img' => 'mileycyrus.jpg',
                'Price' => 620,
                'Description' => 'Singer, songwriter, and actress known for her transition from Disney star to pop icon.',
            ],
            [
                'Name' => 'Demi Lovato',
                'Product' => 'Skyscraper',
                'Sex' => 'Female',
                'BirthDate' => '1992-08-20',
                'Img' => 'demilovato.jpg',
                'Price' => 600,
                'Description' => 'Singer and actress known for her powerful vocals and openness about mental health.',
            ],
            [
                'Name' => 'Shakira',
                'Product' => 'Hips Don\'t Lie',
                'Sex' => 'Female',
                'BirthDate' => '1977-02-02',
                'Img' => 'shakira.jpg',
                'Price' => 550,
                'Description' => 'Internationally renowned singer and songwriter known for her unique voice and dance moves.',
            ],
            [
                'Name' => 'Aretha Franklin',
                'Product' => 'Respect',
                'Sex' => 'Female',
                'BirthDate' => '1942-03-25',
                'Img' => 'arethafranklin.jpg',
                'Price' => 650,
                'Description' => 'The Queen of Soul, known for her powerful voice and iconic songs like "Respect" and "Natural Woman".',
            ],
            [
                'Name' => 'Mariah Carey',
                'Product' => 'All I Want for Christmas Is You',
                'Sex' => 'Female',
                'BirthDate' => '1969-03-27',
                'Img' => 'mariahcarey.jpg',
                'Price' => 580,
                'Description' => 'Singer and songwriter with a five-octave vocal range, known for her Christmas hit and chart-topping singles.',
            ],
            [
                'Name' => 'Halsey',
                'Product' => 'Bad at Love',
                'Sex' => 'Female',
                'BirthDate' => '1994-09-29',
                'Img' => 'halsey.jpg',
                'Price' => 600,
                'Description' => 'Singer-songwriter known for her powerful vocals and hits like "Without Me" and "Closer".',
            ],
            [
                'Name' => 'Charlie Puth',
                'Product' => 'Attention',
                'Sex' => 'Male',
                'BirthDate' => '1991-12-02',
                'Img' => 'charlieputh.jpg',
                'Price' => 580,
                'Description' => 'Singer and songwriter with hits like "See You Again" and "We Don\'t Talk Anymore".',
            ],
            [
                'Name' => 'Camila Cabello',
                'Product' => 'Havana',
                'Sex' => 'Female',
                'BirthDate' => '1997-03-03',
                'Img' => 'camilacabello.jpg',
                'Price' => 620,
                'Description' => 'Singer and former member of Fifth Harmony, known for her chart-topping single "Havana".',
            ],
            [
                'Name' => 'Jennifer Lopez',
                'Product' => 'On the Floor',
                'Sex' => 'Female',
                'BirthDate' => '1969-07-24',
                'Img' => 'jenniferlopez.jpg',
                'Price' => 700,
                'Description' => 'Singer, actress, and dancer known for her hits like "If You Had My Love" and "Jenny from the Block".',
            ],
            [
                'Name' => 'Björk',
                'Product' => 'It\'s Oh So Quiet',
                'Sex' => 'Female',
                'BirthDate' => '1965-11-21',
                'Img' => 'bjork.jpg',
                'Price' => 650,
                'Description' => 'Innovative Icelandic singer-songwriter known for her experimental music and artistic vision.',
            ],
            [
                'Name' => 'Rod Stewart',
                'Product' => 'Maggie May',
                'Sex' => 'Male',
                'BirthDate' => '1945-01-10',
                'Img' => 'rodstewart.jpg',
                'Price' => 600,
                'Description' => 'Legendary British rock singer known for hits like "Maggie May" and "You\'re in My Heart".',
            ],
            [
                'Name' => 'Axl Rose',
                'Product' => 'Sweet Child o\' Mine',
                'Sex' => 'Male',
                'BirthDate' => '1962-02-06',
                'Img' => 'axlrose.jpg',
                'Price' => 620,
                'Description' => 'Lead vocalist of the rock band Guns N\' Roses, known for his distinctive voice and stage presence.',
            ],
            [
                'Name' => 'Jerry Lee Lewis',
                'Product' => 'Great Balls of Fire',
                'Sex' => 'Male',
                'BirthDate' => '1935-09-29',
                'Img' => 'jerryleelewis.jpg',
                'Price' => 580,
                'Description' => 'Rock and roll pioneer known for his energetic piano-playing style and hits like "Great Balls of Fire".',
            ],
            [
                'Name' => 'Céline Dion',
                'Product' => 'My Heart Will Go On',
                'Sex' => 'Female',
                'BirthDate' => '1968-03-30',
                'Img' => 'celinedion.jpg',
                'Price' => 700,
                'Description' => 'Canadian singer known for her powerful vocals and iconic songs like "My Heart Will Go On".',
            ],
            [
                'Name' => 'Dolly Parton',
                'Product' => 'Jolene',
                'Sex' => 'Female',
                'BirthDate' => '1946-01-19',
                'Img' => 'dollyparton.jpg',
                'Price' => 700,
                'Description' => 'Country music legend known for hits like "Jolene" and "9 to 5".',
            ],
            [
                'Name' => 'Alicia Keys',
                'Product' => 'Fallin\'',
                'Sex' => 'Female',
                'BirthDate' => '1981-01-25',
                'Img' => 'aliciakeys.jpg',
                'Price' => 750,
                'Description' => 'Singer-songwriter known for her soulful voice and songs like "Fallin\'" and "No One".',
            ],
            [
                'Name' => 'Britney Spears',
                'Product' => '...Baby One More Time',
                'Sex' => 'Female',
                'BirthDate' => '1981-12-02',
                'Img' => 'britneyspears.jpg',
                'Price' => 800,
                'Description' => 'Pop icon known for her debut single "...Baby One More Time" and successful career.',
            ],
            [
                'Name' => 'Christina Aguilera',
                'Product' => 'Genie in a Bottle',
                'Sex' => 'Female',
                'BirthDate' => '1980-12-18',
                'Img' => 'christinaaguilera.jpg',
                'Price' => 780,
                'Description' => 'Singer with a powerful voice, known for hits like "Genie in a Bottle" and "Beautiful".',
            ],
            [
                'Name' => 'Steve Perry',
                'Product' => 'Don\'t Stop Believin\'',
                'Sex' => 'Male',
                'BirthDate' => '1949-01-22',
                'Img' => 'steveperry.jpg',
                'Price' => 750,
                'Description' => 'Former lead vocalist of the rock band Journey, known for songs like "Don\'t Stop Believin\'".',
            ],
            [
                'Name' => 'Stevie Nicks',
                'Product' => 'Edge of Seventeen',
                'Sex' => 'Female',
                'BirthDate' => '1948-05-26',
                'Img' => 'stevienicks.jpg',
                'Price' => 720,
                'Description' => 'Singer-songwriter known for her solo career and as a member of Fleetwood Mac.',
            ],
        ];

        foreach ($artistData as $data) {
            Artist::create($data);
        }
    }
}