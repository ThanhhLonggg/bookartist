<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Thêm dữ liệu mẫu vào bảng actors
        
        // Actor::create([
        //     'Name' => 'Leonardo DiCaprio',
        //         'Product' => 'Inception', // Tên phim
        //         'Sex' => 'Male',
        //         'BirthDate' => '1974-11-11',
        //         'Img' => 'leonardo.jpg',
        //         'Price' => 150,
        //         'Description' => 'Award-winning actor known for versatile roles',
        // ]);

        $actorData = [
            [
                'Name' => 'Leonardo DiCaprio',
                'Product' => 'Inception', // Tên phim
                'Sex' => 'Male',
                'BirthDate' => '1974-11-11',
                'Img' => 'leonardo.jpg',
                'Price' => 150,
                'Description' => 'Award-winning actor known for versatile roles',
            ],
            [
                'Name' => 'Jennifer Lawrence',
                'Product' => 'The Hunger Games', // Tên phim
                'Sex' => 'Female',
                'BirthDate' => '1990-08-15',
                'Img' => 'jennifer.jpg',
                'Price' => 130,
                'Description' => 'Talented actress with a strong on-screen presence',
            ],
            [
                'Name' => 'Tom Hardy',
                'Product' => 'Mad Max: Fury Road', // Tên phim
                'Sex' => 'Male',
                'BirthDate' => '1977-09-15',
                'Img' => 'tom.jpg',
                'Price' => 140,
                'Description' => 'Charismatic actor known for his transformative roles',
            ],
            [
                'Name' => 'Brad Pitt',
                'Product' => 'Fight Club', // Tên phim
                'Sex' => 'Male',
                'BirthDate' => '1963-12-18',
                'Img' => 'brad_pitt.jpg',
                'Price' => 150,
                'Description' => 'Versatile actor with a charismatic screen presence',
            ],
            [
                'Name' => 'Meryl Streep',
                'Product' => 'The Devil Wears Prada', // Tên phim
                'Sex' => 'Female',
                'BirthDate' => '1949-06-22',
                'Img' => 'meryl_streep.jpg',
                'Price' => 130,
                'Description' => 'Acclaimed actress known for her powerful performances',
            ],
            [
                'Name' => 'Will Smith',
                'Product' => 'Men in Black', // Tên phim
                'Sex' => 'Male',
                'BirthDate' => '1968-09-25',
                'Img' => 'willsmith.jpg',
                'Price' => 150,
                'Description' => 'Charismatic actor known for his action and comedy roles',
            ],
            [
                'Name' => 'Scarlett Johansson',
                'Product' => 'Avengers: Endgame', // Tên phim
                'Sex' => 'Female',
                'BirthDate' => '1984-11-22',
                'Img' => 'scarlett.jpg',
                'Price' => 130,
                'Description' => 'Versatile actress with a strong on-screen presence',
            ],
            [
                'Name' => 'Meryl Streep',
                'Product' => 'The Devil Wears Prada', // Tên phim
                'Sex' => 'Female',
                'BirthDate' => '1949-06-22',
                'Img' => 'meryl.jpg',
                'Price' => 160,
                'Description' => 'Acclaimed actress with numerous awards and nominations',
            ],
            [
                'Name' => 'Tom Hanks',
                'Product' => 'Forrest Gump', // Tên phim
                'Sex' => 'Male',
                'BirthDate' => '1956-07-09',
                'Img' => 'tomhanks.jpg',
                'Price' => 200,
                'Description' => 'Beloved actor known for his diverse roles and charm',
            ],
            [
                'Name' => 'Jennifer Lawrence',
                'Product' => 'The Hunger Games', // Tên phim
                'Sex' => 'Female',
                'BirthDate' => '1990-08-15',
                'Img' => 'jennifer.jpg',
                'Price' => 180,
                'Description' => 'Talented actress with a strong screen presence',
            ],
            [
                'Name' => 'Tom Cruise',
                'Product' => 'Mission: Impossible', // Tên phim
                'Sex' => 'Male',
                'BirthDate' => '1962-07-03',
                'Img' => 'tomcruise.jpg',
                'Price' => 250,
                'Description' => 'Iconic actor known for his action-packed roles',
            ],
            [
                'Name' => 'Charlize Theron',
                'Product' => 'Mad Max: Fury Road',
                'Sex' => 'Female',
                'BirthDate' => '1975-08-07',
                'Img' => 'charlize.jpg',
                'Price' => 240,
                'Description' => 'Talented actress with a diverse range of performances',
            ],
            [
                'Name' => 'Robert Downey Jr.',
                'Product' => 'Iron Man',
                'Sex' => 'Male',
                'BirthDate' => '1965-04-04',
                'Img' => 'robertdowneyjr.jpg',
                'Price' => 280,
                'Description' => 'Popular for portraying Iron Man in the MCU',
            ],
            [
                'Name' => 'Angelina Jolie',
                'Product' => 'Maleficent',
                'Sex' => 'Female',
                'BirthDate' => '1975-06-04',
                'Img' => 'angelinajolie.jpg',
                'Price' => 240,
                'Description' => 'Versatile actress and humanitarian',
            ],
            [
                'Name' => 'Johnny Depp',
                'Product' => 'Pirates of the Caribbean',
                'Sex' => 'Male',
                'BirthDate' => '1963-06-09',
                'Img' => 'johnnydepp.jpg',
                'Price' => 420,
                'Description' => 'Versatile actor known for his roles in "Edward Scissorhands", "Charlie and the Chocolate Factory", and more.',
            ],
            [
                'Name' => 'Chris Hemsworth',
                'Product' => 'Thor',
                'Sex' => 'Male',
                'BirthDate' => '1983-08-11',
                'Img' => 'chrishemsworth.jpg',
                'Price' => 380,
                'Description' => 'Australian actor famous for portraying Thor in the Marvel Cinematic Universe.',
            ],
            [
                'Name' => 'Robert Pattinson',
                'Product' => 'Twilight',
                'Sex' => 'Male',
                'BirthDate' => '1986-05-13',
                'Img' => 'robertpattinson.jpg',
                'Price' => 360,
                'Description' => 'Known for his role as Edward Cullen in the "Twilight" series and his diverse acting career.',
            ],
            [
                'Name' => 'Anne Hathaway',
                'Product' => 'Les Misérables',
                'Sex' => 'Female',
                'BirthDate' => '1982-11-12',
                'Img' => 'annehathaway.jpg',
                'Price' => 450,
                'Description' => 'Talented actress known for her roles in "The Devil Wears Prada" and "The Princess Diaries".',
            ],
            [
                'Name' => 'Megan Fox',
                'Product' => 'Transformers',
                'Sex' => 'Female',
                'BirthDate' => '1986-05-16',
                'Img' => 'meganfox.jpg',
                'Price' => 420,
                'Description' => 'Actress and model known for her role in "Transformers" and her striking looks.',
            ],
            [
                'Name' => 'Emma Stone',
                'Product' => 'La La Land',
                'Sex' => 'Female',
                'BirthDate' => '1988-11-06',
                'Img' => 'emmastone.jpg',
                'Price' => 500,
                'Description' => 'Award-winning actress known for her roles in "Easy A" and "The Help".',
            ],
            [
                'Name' => 'Gal Gadot',
                'Product' => 'Wonder Woman',
                'Sex' => 'Female',
                'BirthDate' => '1985-04-30',
                'Img' => 'galgadot.jpg',
                'Price' => 520,
                'Description' => 'Actress and model best known for portraying Wonder Woman in the DC Extended Universe.',
            ],
            [
                'Name' => 'Emma Watson',
                'Product' => 'Harry Potter series',
                'Sex' => 'Female',
                'BirthDate' => '1990-04-15',
                'Img' => 'emmawatson.jpg',
                'Price' => 480,
                'Description' => 'Actress and activist famous for her role as Hermione Granger in the Harry Potter series.',
            ],
            [
                'Name' => 'Amy Adams',
                'Product' => 'Arrival',
                'Sex' => 'Female',
                'BirthDate' => '1974-08-20',
                'Img' => 'amyadams.jpg',
                'Price' => 550,
                'Description' => 'Award-winning actress known for roles in "Enchanted" and "American Hustle".',
            ],
            [
                'Name' => 'Jennifer Aniston',
                'Product' => 'Friends',
                'Sex' => 'Female',
                'BirthDate' => '1969-02-11',
                'Img' => 'jenniferaniston.jpg',
                'Price' => 600,
                'Description' => 'Actress famous for her role as Rachel Green on the TV show "Friends".',
            ],
            [
                'Name' => 'Chris Evans',
                'Product' => 'Captain America: The First Avenger',
                'Sex' => 'Male',
                'BirthDate' => '1981-06-13',
                'Img' => 'chrisevans.jpg',
                'Price' => 650,
                'Description' => 'Actor best known for playing Captain America in the Marvel Cinematic Universe.',
            ],
            [
                'Name' => 'Elizabeth Olsen',
                'Product' => 'WandaVision',
                'Sex' => 'Female',
                'BirthDate' => '1989-02-16',
                'Img' => 'elizabetholsen.jpg',
                'Price' => 580,
                'Description' => 'Actress who portrays Wanda Maximoff / Scarlet Witch in the Marvel Cinematic Universe.',
            ],
            [
                'Name' => 'Alexandra Daddario',
                'Product' => 'Percy Jackson & the Olympians: The Lightning Thief',
                'Sex' => 'Female',
                'BirthDate' => '1986-03-16',
                'Img' => 'alexandradaddario.jpg',
                'Price' => 550,
                'Description' => 'Actress known for her roles in "Baywatch" and "San Andreas".',
            ],
            [
                'Name' => 'Jessica Alba',
                'Product' => 'Fantastic Four',
                'Sex' => 'Female',
                'BirthDate' => '1981-04-28',
                'Img' => 'jessicaalba.jpg',
                'Price' => 600,
                'Description' => 'Actress and businesswoman, known for her roles in "Sin City" and "Honey".',
            ],
            [
                'Name' => 'Emily Blunt',
                'Product' => 'A Quiet Place',
                'Sex' => 'Female',
                'BirthDate' => '1983-02-23',
                'Img' => 'emilyblunt.jpg',
                'Price' => 650,
                'Description' => 'Award-winning actress known for her roles in "The Devil Wears Prada" and "Mary Poppins Returns".',
            ],
            [
                'Name' => 'Jackie Chan',
                'Product' => 'Rush Hour',
                'Sex' => 'Male',
                'BirthDate' => '1954-04-07',
                'Img' => 'jackiechan.jpg',
                'Price' => 580,
                'Description' => 'Iconic actor and martial artist known for his action-comedy roles in "Rush Hour" and "Police Story".',
            ],
            [
                'Name' => 'Natalie Portman',
                'Product' => 'Black Swan',
                'Sex' => 'Female',
                'BirthDate' => '1981-06-09',
                'Img' => 'natalieportman.jpg',
                'Price' => 650,
                'Description' => 'Academy Award-winning actress known for her versatile roles in "V for Vendetta" and "Annihilation".',
            ],
            [
                'Name' => 'Kate Hudson',
                'Product' => 'Almost Famous',
                'Sex' => 'Female',
                'BirthDate' => '1979-04-19',
                'Img' => 'katehudson.jpg',
                'Price' => 620,
                'Description' => 'Actress known for her roles in romantic comedies like "How to Lose a Guy in 10 Days" and "Bride Wars".',
            ],
            [
                'Name' => 'Kristen Stewart',
                'Product' => 'Twilight',
                'Sex' => 'Female',
                'BirthDate' => '1990-04-09',
                'Img' => 'kristenstewart.jpg',
                'Price' => 600,
                'Description' => 'Actress known for her breakout role in the "Twilight" series and acclaimed performances in indie films.',
            ],
            [
                'Name' => 'Lily Collins',
                'Product' => 'Mirror Mirror',
                'Sex' => 'Female',
                'BirthDate' => '1989-03-18',
                'Img' => 'lilycollins.jpg',
                'Price' => 630,
                'Description' => 'Actress and model known for her roles in "The Mortal Instruments" series and "Emily in Paris".',
            ],
            [
                'Name' => 'Dwayne Johnson',
                'Product' => 'Jumanji: Welcome to the Jungle',
                'Sex' => 'Male',
                'BirthDate' => '1972-05-02',
                'Img' => 'dwaynejohnson.jpg',
                'Price' => 700,
                'Description' => 'Actor and former professional wrestler, known for his action-packed roles in "Fast & Furious" and "Jumanji".',
            ],
            [
                'Name' => 'Marion Cotillard',
                'Product' => 'La Vie en Rose',
                'Sex' => 'Female',
                'BirthDate' => '1975-09-30',
                'Img' => 'marioncotillard.jpg',
                'Price' => 640,
                'Description' => 'Academy Award-winning actress known for her performances in "Inception" and "The Dark Knight Rises".',
            ],
            [
                'Name' => 'Amber Heard',
                'Product' => 'Aquaman',
                'Sex' => 'Female',
                'BirthDate' => '1986-04-22',
                'Img' => 'amberheard.jpg',
                'Price' => 650,
                'Description' => 'Actress known for her roles in "Aquaman" and "Pineapple Express".',
            ],
            [
                'Name' => 'Ryan Gosling',
                'Product' => 'La La Land',
                'Sex' => 'Male',
                'BirthDate' => '1980-11-12',
                'Img' => 'ryangosling.jpg',
                'Price' => 620,
                'Description' => 'Actor known for his performances in "La La Land" and "Drive".',
            ],
            [
                'Name' => 'Dakota Johnson',
                'Product' => 'Fifty Shades of Grey',
                'Sex' => 'Female',
                'BirthDate' => '1989-10-04',
                'Img' => 'dakotajohnson.jpg',
                'Price' => 600,
                'Description' => 'Actress known for her lead role in the "Fifty Shades" film series.',
            ],
            [
                'Name' => 'Mila Kunis',
                'Product' => 'Black Swan',
                'Sex' => 'Female',
                'BirthDate' => '1983-08-14',
                'Img' => 'milakunis.jpg',
                'Price' => 630,
                'Description' => 'Actress known for her roles in "Black Swan" and "That \'70s Show".',
            ],


            
        ];

        foreach ($actorData as $data) {
            Actor::create($data);
        }


    }
}
