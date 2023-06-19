<?php

namespace Database\Seeders;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Game::insert([
            'title' => 'Apex Legends',
            'pegi_rating' => 16,
            'genre_id' => 1,
            'description' => 'Apex Legends is a free-to-play hero shooter game where legendary competitors battle for glory, fame, and fortune on the fringes of the Frontier. Pick your character. Round up your squad. Show everyone what Legends are made of.',
            'price' => 0,
            'pic' => 'Apex.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'Ark: Survival Evolved',
            'pegi_rating' => 16,
            'genre_id' => 3,
            'description' => 'As a man or woman stranded naked, freezing and starving on the shores of a mysterious island called ARK, you must hunt, harvest resources, craft items, grow crops, research technologies, and build shelters to withstand the elements.',
            'price' => 15,
            'pic' => 'Ark.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'Counter Strike: Global Offensive',
            'pegi_rating' => 18,
            'genre_id' => 1,
            'description' => 'Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago. CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).',
            'price' => 0,
            'pic' => 'CSGO.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'Dead By Daylight',
            'pegi_rating' => 18,
            'genre_id' => 3,
            'description' => 'Dead by Daylight is a multiplayer (4vs1) horror game where one player takes on the role of the savage Killer, and the other four players play as Survivors, trying to escape the Killer and avoid being caught, tortured and killed. Survivors play in third-person and have the advantage of better situational awareness. The Killer plays in first-person.',
            'price' => 30,
            'pic' => 'DBD.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'DOTA 2',
            'pegi_rating' => 16,
            'genre_id' => 4,
            'description' => 'When it comes to diversity of heroes, abilities, and powerful items, Dota boasts an endless array—no two games are the same. Any hero can fill multiple roles, and theres an abundance of items to help meet the needs of each game. Dota doesnt provide limitations on how to play, it empowers you to express your own style.',
            'price' => 0,
            'pic' => 'DOTA.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'FIFA 23',
            'pegi_rating' => 3,
            'genre_id' => 7,
            'description' => 'EA SPORTS™ FIFA 23 brings The World’s Game to the pitch, with HyperMotion2 Technology that delivers even more gameplay realism, both the men’s and women’s FIFA World Cup™ coming to the game as post-launch updates, the addition of women’s club teams, cross-play features*, and more. Experience unrivaled authenticity with over 19,000 players, 700+ teams, 100 stadiums, and over 30 leagues in FIFA 23.',
            'price' => 42,
            'pic' => 'FIFA23.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'GTA III',
            'pegi_rating' => 18,
            'genre_id' => 2,
            'description' => 'Welcome to Liberty City. Where it all began. The critically acclaimed blockbuster Grand Theft Auto III brings to life the dark and seedy worlds.',
            'price' => 29,
            'pic' => 'GTAIII.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'GTA IV',
            'pegi_rating' => 18,
            'genre_id' => 2,
            'description' => 'What does the American Dream mean today? For Niko Bellic, fresh off the boat from Europe, it is the hope he can escape his past.',
            'price' => 31,
            'pic' => 'GTAIV.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'GTA Liberty City Stories',
            'pegi_rating' => 18,
            'genre_id' => 2,
            'description' => 'There are a million stories in Liberty City. This one changes everything. Once a trusted wise guy in the Leone crime family, Toni Cipriani was forced into hiding after killing a made man. Now hes back and its time for things to be put right.',
            'price' => 28,
            'pic' => 'GTALC.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'GTA San Andreas',
            'pegi_rating' => 18,
            'genre_id' => 2,
            'description' => 'Five years ago Carl Johnson escaped from the pressures of life in Los Santos, San Andreas — a city tearing itself apart with gang trouble, drugs, and corruption. Where film stars and millionaires do their best to avoid the dealers and gangbangers. Now, its the early 90s. Carl got to go home. His mother has been murdered, his family has fallen apart and his childhood friends are all heading toward disaster.',
            'price' => 25,
            'pic' => 'GTASA.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'GTA V',
            'pegi_rating' => 18,
            'genre_id' => 2,
            'description' => 'When a young street hustler, a retired bank robber, and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government, and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody — least of all each other.',
            'price' => 35,
            'pic' => 'GTAV.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'GTA Vice City Stories',
            'pegi_rating' => 18,
            'genre_id' => 2,
            'description' => 'Vice City, 1984. Opportunity abounds in a city emerging from the swamps, its growth fueled by the violent power struggle in a lucrative drug trade. Construction is everywhere as a shining metropolis rises from foundations of crime and betrayal. As a soldier, Vic Vance has always protected his dysfunctional family, his country, himself. ',
            'price' => 22,
            'pic' => 'GTAVC.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'NBA 2K23',
            'pegi_rating' => 3,
            'genre_id' => 7,
            'description' => 'Rise to the occasion and realize your full potential in NBA 2K23. Prove yourself against the best players in the world and showcase your talent in MyCAREER. Pair today’s All-Stars with timeless legends in MyTEAM. Build a dynasty of your own in MyGM or take the NBA in a new direction with MyLEAGUE. Take on NBA or WNBA teams in PLAY NOW and experience true-to-life gameplay. How will you Answer the Call?',
            'price' => 35,
            'pic' => 'NBA23.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'Pacman',
            'pegi_rating' => 3,
            'genre_id' => 6,
            'description' => 'Pac-Man is a Japanese video game franchise developed, published and owned by Bandai Namco Entertainment, a video game publisher that was previously known as Namco. Its the game that everyone know and love! Retro-arcade game with the most-classic-loveable playing games',
            'price' => 0,
            'pic' => 'Pacman.png',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'E-Football 2022',
            'pegi_rating' => 3,
            'genre_id' => 7,
            'description' => 'As we turn another new page in the real-world football calendar, eFootball™ will also be embarking from 2022 to 2023.
            Be it eye-catching talents from the opening fixtures, or the fresh colours of each football club. We will continue bringing you the latest and greatest of the football season through a whole slew of exciting content!
            Enjoy the fever pitch of "real football" in eFootball™ 2023!',
            'price' => 0,
            'pic' => 'PES22.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'PLAYERUNKNOWN BATTLEGROUNDS',
            'pegi_rating' => 18,
            'genre_id' => 1,
            'description' => 'Play PUBG: BATTLEGROUNDS for free.
            Land on strategic locations, loot weapons and supplies, and survive to become the last team standing across various, diverse Battlegrounds.
            Squad up and join the Battlegrounds for the original Battle Royale experience that only PUBG: BATTLEGROUNDS can offer.',
            'price' => 0,
            'pic' => 'PUBG.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'Red Dead Redemption 2',
            'pegi_rating' => 18,
            'genre_id' => 4,
            'description' => 'With all new graphical and technical enhancements for deeper immersion, Red Dead Redemption 2 for PC takes full advantage of the power of the PC to bring every corner of this massive, rich and detailed world to life including increased draw distances; higher quality global illumination and ambient occlusion for improved day and night lighting; improved reflections and deeper, higher resolution shadows at all distances; tessellated tree textures and improved grass and fur textures for added realism in every plant and animal.',
            'price' => 38,
            'pic' => 'RDR2.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'StarCraft II: Wings Of Liberty',
            'pegi_rating' => 16,
            'genre_id' => 5,
            'description' => 'Experience intergalactic warfare through an epic story campaign, best-in-class multiplayer competition, and collaborative co-op missions. With large parts of StarCraft II’s single-player and multiplayer modes, its never been a better time to begin your StarCraft II story!',
            'price' => 40,
            'pic' => 'Starcraft.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        Game::insert([
            'title' => 'Terraria',
            'pegi_rating' => 3,
            'genre_id' => 2,
            'description' => 'Dig, Fight, Build
            The very world is at your fingertips as you fight for survival, fortune, and glory. Delve deep into cavernous expanses, seek out ever-greater foes to test your mettle in combat, or construct your own city - In the World of Terraria, the choice is yours!
            Blending elements of classic action games with the freedom of sandbox-style creativity, Terraria is a unique gaming experience where both the journey and the destination are as unique as the players themselves!',
            'price' => 15,
            'pic' => 'Terraria.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'Shadow of the Tomb Raider',
            'pegi_rating' => 18,
            'genre_id' => 4,
            'description' => 'In Shadow of the Tomb Raider experience the final chapter of Laras origin as she is forged into the Tomb Raider she is destined to be. Combining the base game, all seven DLC challenge tombs, as well as all downloadable weapons, outfits, and skills, Shadow of the Tomb Raider Definitive Edition is the ultimate way to experience Lara defining moment.',
            'price' => 40,
            'pic' => 'TombRaider.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Game::insert([
            'title' => 'Warcraft III: Reign Of Chaos',
            'pegi_rating' => 18,
            'genre_id' => 4,
            'description' => 'Warcraft® III: Reforged™ is a complete reimagining of a real-time strategy classic. Experience the epic origin stories of Warcraft, now more stunning and evocative than ever before. Have a new reforged visuals to more vivid visuals and have a new legendary campaigns.',
            'price' => 40,
            'pic' => 'WarcraftIII.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
