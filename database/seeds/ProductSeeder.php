<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            //StuffedAnimals
            //Lovely Bear.
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00001', 'id_type' => 1, 'name' => 'Poodle', 'description' => 'The Memorable Dog is being hunted aggressively by the sisters who were present at our ChipChip house after a long period of weariness.
                Material: soft feather smooth smooth elasticity, What\'s in the movie Secretary Kim? President Lee went with her to play. Because of the love for Kim\'s secretary. Lee did not hesitate to experience new things that he had never done before. With constant adaptation and effort, this brilliant handsome man finally managed to fold a lovely teddy dog ​​for her. It\'s called Memories', 'unit_price' => 10, 'promotion_price' => 6, 'image' => 'LB00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00002', 'id_type' => 1, 'name' => 'Dinosaur kute', 'description' => 'Soft and smooth material. Elastic fabric with sewing thread firmly. Can be cleaned, washed. A special gift has a meaning of love. 
                Especially for anniversaries, birthdays, Valentine\'s Day, ...', 'unit_price' => 15, 'promotion_price' => 0, 'image' => 'LB00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00003', 'id_type' => 1, 'name' => 'Green Dinosaur', 'description' => 'A stuffed toy is a toy with an outer fabric sewn from a textile and stuffed with flexible material. They are known by many names, such as plush toys, stuffed animals, plushies, or stuffies. In Britain and Australia, they may be called soft toys or cuddly toys.', 'unit_price' => 12, 'promotion_price' => 8, 'image' => 'LB00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00004', 'id_type' => 1, 'name' => 'Three dog kute', 'description' => 'Bear krunk with funny shapes and outstanding colors, gives your children the hours of fun to play, suitable to be a lover or crush gift. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00005', 'id_type' => 1, 'name' => 'Batman', 'description' => 'Soft and smooth material. Elastic fabric with sewing thread firmly. Can be cleaned, washed. A special gift has a meaning of love. 
                Especially for anniversaries, birthdays, Valentine\'s Day, ...', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00006', 'id_type' => 1, 'name' => 'Pikachu kute', 'description' => 'The Memorable Dog is being hunted aggressively by the sisters who were present at our ChipChip house after a long period of weariness.
                Material: soft feather smooth smooth elasticity, What\'s in the movie Secretary Kim? President Lee went with her to play. Because of the love for Kim\'s secretary. Lee did not hesitate to experience new things that he had never done before. With constant adaptation and effort, this brilliant handsome man finally managed to fold a lovely teddy dog ​​for her. It\'s called Memories', 'unit_price' => 15, 'promotion_price' => 8, 'image' => 'LB00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00007', 'id_type' => 1, 'name' => 'Princess', 'description' => 'Princess is beautiful and kute', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00008', 'id_type' => 1, 'name' => 'Baby Bunny', 'description' => 'The Memorable Dog is being hunted aggressively by the sisters who were present at our ChipChip house after a long period of weariness.
                Material: soft feather smooth smooth elasticity, What\'s in the movie Secretary Kim? President Lee went with her to play. Because of the love for Kim\'s secretary. Lee did not hesitate to experience new things that he had never done before. With constant adaptation and effort, this brilliant handsome man finally managed to fold a lovely teddy dog ​​for her. It\'s called Memories', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00009', 'id_type' => 1, 'name' => 'Baby Duck', 'description' => 'Soft and smooth material. Elastic fabric with sewing thread firmly. Can be cleaned, washed. A special gift has a meaning of love. 
                Especially for anniversaries, birthdays, Valentine\'s Day, ...', 'unit_price' => 14, 'promotion_price' => 7, 'image' => 'LB00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00010', 'id_type' => 1, 'name' => 'Baby Chicken', 'description' => 'Baby Chicken is beautiful', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00011', 'id_type' => 1, 'name' => 'Pink Panther', 'description' => 'Soft and smooth material. Elastic fabric with sewing thread firmly. Can be cleaned, washed. A special gift has a meaning of love. 
                Especially for anniversaries, birthdays, Valentine\'s Day, ...', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00012', 'id_type' => 1, 'name' => 'Princess', 'description' => 'The Memorable Dog is being hunted aggressively by the sisters who were present at our ChipChip house after a long period of weariness.
                Material: soft feather smooth smooth elasticity, What\'s in the movie Secretary Kim? President Lee went with her to play. Because of the love for Kim\'s secretary. Lee did not hesitate to experience new things that he had never done before. With constant adaptation and effort, this brilliant handsome man finally managed to fold a lovely teddy dog ​​for her. It\'s called Memories', 'unit_price' => 14, 'promotion_price' => 7, 'image' => 'LB00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00013', 'id_type' => 1, 'name' => 'Princess', 'description' => 'The Memorable Dog is being hunted aggressively by the sisters who were present at our ChipChip house after a long period of weariness.
                Material: soft feather smooth smooth elasticity, What\'s in the movie Secretary Kim? President Lee went with her to play. Because of the love for Kim\'s secretary. Lee did not hesitate to experience new things that he had never done before. With constant adaptation and effort, this brilliant handsome man finally managed to fold a lovely teddy dog ​​for her. It\'s called Memories', 'description' => 'Soft and smooth material. Elastic fabric with sewing thread firmly. Can be cleaned, washed. A special gift has a meaning of love. 
                Especially for anniversaries, birthdays, Valentine\'s Day, ...', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00014', 'id_type' => 1, 'name' => 'Pikachu', 'description' => 'The Memorable Dog is being hunted aggressively by the sisters who were present at our ChipChip house after a long period of weariness.
                Material: soft feather smooth smooth elasticity, What\'s in the movie Secretary Kim? President Lee went with her to play. Because of the love for Kim\'s secretary. Lee did not hesitate to experience new things that he had never done before. With constant adaptation and effort, this brilliant handsome man finally managed to fold a lovely teddy dog ​​for her. It\'s called Memories', 'description' => 'Pikachu kute is beautiful', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00015', 'id_type' => 1, 'name' => 'Puppy', 'description' => 'Soft and smooth material. Elastic fabric with sewing thread firmly. Can be cleaned, washed. A special gift has a meaning of love. 
                Especially for anniversaries, birthdays, Valentine\'s Day, ...', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'LB00016', 'id_type' => 1, 'name' => 'Poodle', 'description' => 'Poodle beautiful', 'unit_price' => rand(10, 20), 'promotion_price' => 0, 'image' => 'LB00016.jpg', 'unit' => rand(10, 99)],
            //Teddy Bear
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00001', 'id_type' => 2, 'name' => '60cm bear bear shirt', 'description' => '60cm bear bear shirt beautifull', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'TB00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00002', 'id_type' => 2, 'name' => '100cm flamingos', 'description' => 'Very cute flamingos have been updated quickly by Chip Chip! The flaming pink bear is loved by everyone with a lovely face that makes everyone "fall in love", Pink fluffy bear with funny shapes and outstanding colors, gives your children interesting hours of play, suitable for lovers or crush gifts. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'TB00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00003', 'id_type' => 2, 'name' => 'Bear sweater 120cm', 'description' => 'Bear sweater 120cm beautiful', 'unit_price' => 20, 'promotion_price' => 0, 'image' => 'TB00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00004', 'id_type' => 2, 'name' => 'Bear 100cm tie', 'description' => 'The extremely cute tie-shirt bear has been updated quickly by Chip Chip! Bear\'s beloved tie shirt with lovely face must make everyone "insolent"', 'unit_price' => 21, 'promotion_price' => 0, 'image' => 'TB00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00005', 'id_type' => 2, 'name' => 'Bear sweater 45cm', 'description' => 'bears wearing sweaters with funny shapes and striking colors, give your children fun hours of play, suitable for making lovers or crush gifts. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 16, 'promotion_price' => 0, 'image' => 'TB00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00006', 'id_type' => 2, 'name' => 'Bear sweater tie 55cm tie', 'description' => 'Bear sweater tie 55cm tie
                Little bears wearing cute tops are quickly updated for you by Chip Chip! Teddy bears dressed in sweethearts with lovely faces make everyone "fall in love".

                Material: Gon feather, good elasticity.

                Color: brown

                Teddy bears wear clothes with funny shapes and outstanding colors, giving your children exciting hours of play, suitable for lovers or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 18, 'promotion_price' => 10, 'image' => 'TB00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00007', 'id_type' => 2, 'name' => 'Bear 100cm bear foot sweater', 'description' => 'Very cute sweater sweaters were quickly updated for you by Chip Chip! Sweaters are loved by everyone with lovely faces that make everyone "insolent"

                Material: Gon feather, good elasticity.

                Color: white

                Bear sweater with funny shapes and outstanding colors, gives your baby interesting hours of fun, suitable for being a lover or crush gift. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 25, 'promotion_price' => 16, 'image' => 'TB00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00008', 'id_type' => 2, 'name' => 'Bear 100cm bear foot sweater', 'description' => 'Very cute sweater sweaters were quickly updated for you by Chip Chip! Sweaters are loved by everyone with lovely faces that make everyone "insolent"

		        Material: Gon feather, good elasticity.

		        Color: white

	        	Bear sweater with funny shapes and outstanding colors, gives your baby interesting hours of fun, suitable for being a lover or crush gift. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 22, 'promotion_price' => 0, 'image' => 'TB00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00009', 'id_type' => 2, 'name' => 'Bear fur coat dog legs 75cm', 'description' => 'The extremely cute little bears have been updated by Chip Chip quickly for you! Teddy bears wearing shirts that everyone loves with lovely faces that make everyone "bureaucratic"

                Material: Saigon feather, good elasticity.

                Color: purple rose

                Teddy Bear wears a shirt with funny shapes and striking colors, giving your children fun and interesting hours, suitable as a gift for lover or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use.', 'unit_price' => 21, 'promotion_price' => 0, 'image' => 'TB00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00010', 'id_type' => 2, 'name' => 'Bear sweater face 75cm', 'description' => 'The extremely cute little bears have been updated by Chip Chip quickly for you! Teddy bears wearing shirts that everyone loves with lovely faces that make everyone "bureaucratic"

                Material: Saigon feather, good elasticity.

                Colors: brown   

                Teddy Bear wears a shirt with funny shapes and striking colors, giving your children fun and interesting hours, suitable as a gift for lover or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use.', 'unit_price' => 22, 'promotion_price' => 0, 'image' => 'TB00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00011', 'id_type' => 2, 'name' => 'Bear sweater 75cm bear eyes', 'description' => 'The tedious "teddy bears" were quickly updated for you by Chip Chip! Teddy is loved by everyone with his lovely face that everyone has to "fall in love" with.

                Material: Gon feather, good elasticity.

                Color: dark brown

                Teddy with a funny shape and outstanding color, gives your baby interesting hours of fun, suitable for being a lover or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 17, 'promotion_price' => 10, 'image' => 'TB00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00012', 'id_type' => 2, 'name' => 'Fur bear only 40cm ghile shirt', 'description' => 'The cute little bear-wearing tops have been quickly updated by Chip Chip for you! Teddy bears wearing shirts that everyone loves with lovely faces that make everyone "bureaucratic"

                Material: Saigon feather, good elasticity.

                Colors: brown

                Teddy Bear wears a shirt with funny shapes and striking colors, giving your children fun and interesting hours, suitable as a gift for lover or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use.', 'unit_price' => 26, 'promotion_price' => 0, 'image' => 'TB00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00013', 'id_type' => 2, 'name' => '100cm flamingos', 'description' => 'Very cute flamingos have been updated quickly by Chip Chip! The flaming pink bear is loved by everyone with a lovely face that makes everyone "fall in love"

                Material: Gon feather, good elasticity.

                Color: purple pink
    
                Pink fluffy bear with funny shapes and outstanding colors, gives your children interesting hours of play, suitable for lovers or crush gifts. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 14, 'promotion_price' => 0, 'image' => 'TB00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00014', 'id_type' => 2, 'name' => '120cm sweater bear.', 'description' => 'Very cute sweater sweaters were quickly updated for you by Chip Chip! Sweaters are loved by everyone with lovely faces that make everyone "insolent"

		        Material: Gon feather, good elasticity.

		        Color: white

		        Bear sweater with funny shapes and outstanding colors, gives your baby interesting hours of fun, suitable for being a lover or crush gift. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 17, 'promotion_price' => 10, 'image' => 'TB00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00015', 'id_type' => 2, 'name' => 'Checked dress', 'description' => 'Bear sweater tie 55cm tie\', \'description\' => \'Bear sweater tie 55cm tie
                Little bears wearing cute tops are quickly updated for you by Chip Chip! Teddy bears dressed in sweethearts with lovely faces make everyone "fall in love".

                Material: Gon feather, good elasticity.

                Color: brown

                Teddy bears wear clothes with funny shapes and outstanding colors, giving your children exciting hours of play, suitable for lovers or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 23, 'promotion_price' => 0, 'image' => 'TB00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'TB00016', 'id_type' => 2, 'name' => '60cm bear bear shirt', 'description' => 'Very cute sweater sweaters were quickly updated for you by Chip Chip! Sweaters are loved by everyone with lovely faces that make everyone "insolent"

		        Material: Gon feather, good elasticity.

		        Color: white

	        	Bear sweater with funny shapes and outstanding colors, gives your baby interesting hours of fun, suitable for being a lover or crush gift. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 25, 'promotion_price' => 0, 'image' => 'TB00016.jpg', 'unit' => rand(10, 99)],
            //Doraemon
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00001', 'id_type' => 3, 'name' => 'Doraemon holding 35cm cake', 'description' => 'Doremon took the cake that was quickly updated for you by Chip Chip! Be loved by everyone with a lovely face that everyone has to "begging"

                Material: Gon feather, good elasticity.

                Color: white blue

                Doremon holds a cake with a funny shape and outstanding color, giving your baby interesting hours of fun, suitable for being a lover or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 25, 'promotion_price' => 0, 'image' => 'DR00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00002', 'id_type' => 3, 'name' => 'Doraemon holding 35cm steering wheel', 'description' => 'Doremon took the steering wheel, which was quickly updated by Chip Chip! Be loved by everyone with a lovely face that everyone has to "begging"

                Material: Gon feather, good elasticity.

                Color: white blue

                Doremon holds the steering wheel with a funny shape and striking color, giving your children an enjoyable time of play, suitable for being a lover or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 30, 'promotion_price' => 0, 'image' => 'DR00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00003', 'id_type' => 3, 'name' => 'Doraemon wearing a 35cm hat', 'description' => 'Doremon hats have been updated quickly by Chip Chip! Be loved by everyone with a lovely face that everyone has to "begging"

                Material: Gon feather, good elasticity.

                Color: white blue

                Doremon wears hats with funny shapes and outstanding colors, giving your children interesting hours of play, suitable for lovers or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'DR00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00004', 'id_type' => 3, 'name' => 'Doraemon holds the face HK', 'description' => 'Doremon took the steering wheel, which was quickly updated by Chip Chip! Be loved by everyone with a lovely face that everyone has to "begging"

                Material: Gon feather, good elasticity.

                Color: white blue

                Doremon holds the steering wheel with a funny shape and striking color, giving your children an enjoyable time of play, suitable for being a lover or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 21, 'promotion_price' => 0, 'image' => 'DR00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00005', 'id_type' => 3, 'name' => ' Doreamon hugged 30cm cake', 'description' => 'Doraemon wearing a 35cm hat\', \'description\' => \'Doremon hats have been updated quickly by Chip Chip! Be loved by everyone with a lovely face that everyone has to "begging"

                Material: Gon feather, good elasticity.

                Color: white blue

                Doremon wears hats with funny shapes and outstanding colors, giving your children interesting hours of play, suitable for lovers or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 25, 'promotion_price' => 0, 'image' => 'DR00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00006', 'id_type' => 3, 'name' => 'Pirate Doremon 30cm', 'description' => 'Very cute pirate Doremon has been updated quickly by Chip Chip! Doremon is loved by everyone with a lovely face that everyone has to "roam".

                Material: Gon feather, good elasticity.

                Color: green

                Doremon pirate with funny shapes and outstanding colors, gives your children interesting hours of play, suitable for lovers or crush gifts. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 23, 'promotion_price' => 0, 'image' => 'DR00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00007', 'id_type' => 3, 'name' => 'Cooking Doremon 35cm', 'description' => 'Very cute Doremon has been quickly updated for you by Chip Chip! Doremon is loved by everyone with a lovely face that everyone has to "roam".

                Material: Gon feather, good elasticity.

                Color: green

                Doremon with funny shapes and outstanding colors, gives your children the hours of fun to play, suitable for making lovers or crush gifts. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 23, 'promotion_price' => 0, 'image' => 'DR00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00008', 'id_type' => 3, 'name' => 'Doremon graduated', 'description' => 'Very cute Doremon has been quickly updated for you by Chip Chip! Doremon is loved by everyone with a lovely face that everyone has to "roam".

                Material: Gon feather, good elasticity.

                Color: green

                Doremon with funny shapes and outstanding colors, gives your children the hours of fun to play, suitable for making lovers or crush gifts. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 30, 'promotion_price' => 0, 'image' => 'DR00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00009', 'id_type' => 3, 'name' => 'Doraemon holds the face HK', 'description' => 'Doremon took the steering wheel, which was quickly updated by Chip Chip! Be loved by everyone with a lovely face that everyone has to "begging"

                Material: Gon feather, good elasticity.

                Color: white blue

                Doremon holds the steering wheel with a funny shape and striking color, giving your children an enjoyable time of play, suitable for being a lover or crush. With smooth velvet material, the same is stuffed with good elasticity, does not cause sensitivity to the skin, safe to use.', 'unit_price' => 24, 'promotion_price' => 12, 'image' => 'DR00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00010', 'id_type' => 3, 'name' => 'Smooth Totoro 40cm smiley face', 'description' => '100% Brand New and Premium Quality.
                Ideal for Totoro fans
                Inner Material: PP Cotton
                Outer Material: Plush 
                Color: As shown in pictures
                Sizes available (total length): 40cm, 55cm, 70cm', 'unit_price' => 26, 'promotion_price' => 0, 'image' => 'DR00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00011', 'id_type' => 3, 'name' => 'Baby wearing a totoro hat', 'description' => 'No description for this product yet', 'unit_price' => 24, 'promotion_price' => 10, 'image' => 'DR00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00012', 'id_type' => 3, 'name' => 'Totoro hand pillow 35cm', 'description' => 'Totoro blanket is a 3 in 1 product that is extremely useful for everyone, every home when using in the office, when going away or camping with family and friends.
                Safe, smooth fabric in contact 
                - Convenient and smart design, lovely design 
                - Comfortable to use for many different purposes', 'unit_price' => 21, 'promotion_price' => 10, 'image' => 'DR00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00013', 'id_type' => 3, 'name' => 'Totoro sits smooth 60cm', 'description' => 'Material: Saigon feather, good elasticity.
                Colors: gray.
                Totoro teddy bear with funny shapes and striking colors, gives your children fun hours of fun. With fine velvet material, the same stuffed with good elasticity, does not cause skin sensitivity, safe for babies to use.', 'unit_price' => 23, 'promotion_price' => 0, 'image' => 'DR00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00014', 'id_type' => 3, 'name' => 'The evil Totoro', 'description' => 'The evil Totoro 35cm = 199,000
                The evil Totoro 45cm
                The evil Totoro 65cm
                The mean Totoro is 75cm
                The cruel Totoro 95cm', 'unit_price' => 27, 'promotion_price' => 0, 'image' => 'DR00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00015', 'id_type' => 3, 'name' => 'Totoro pikachu shirt 33cm', 'description' => 'No description for this product yet', 'unit_price' => 24, 'promotion_price' => 0, 'image' => 'DR00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00016', 'id_type' => 3, 'name' => 'Totoro sits smooth 60cm', 'description' => 'No description for this product yet', 'unit_price' => 23, 'promotion_price' => 15, 'image' => 'DR00016.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00017', 'id_type' => 3, 'name' => 'Totoro sits smooth 60cm', 'description' => 'No description for this product yet', 'unit_price' => 25, 'promotion_price' => 0, 'image' => 'DR00017.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'DR00018', 'id_type' => 3, 'name' => 'Totoro holds the ghost\'s head', 'description' => 'Totoro holds the ghost\'s head
                Quality materials : feathers Gon smooth, good elasticity, safe for health
                Color : gray
                Describe the character Totoro with the awkward version holding a leaf to shield the sun from the funny rain.', 'unit_price' => 32, 'promotion_price' => 0, 'image' => 'DR00018.jpg', 'unit' => rand(10, 99)],
            //Pillow
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00001', 'id_type' => 4, 'name' => 'Expressive carrot 100cm', 'description' => 'Chip carrots "chirping" have been quickly updated by Chip Chip for you! Carrots are loved by everyone with a lovely face that makes everyone "bureaucratic"
                Material: Saigon feather, good elasticity.
                Colors: pink and orange
                Carrots with funny shapes and striking colors, give your children fun hours of fun, suitable as gifts for lovers or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00002', 'id_type' => 4, 'name' => 'Dinosaur pudding', 'description' => 'The extremely cute rabbit pudding pillow has been updated quickly by Chip Chip for you! Rabbit pudding pillows are loved by everyone with a lovely face that makes everyone "bureaucratic"
                Material: Saigon feather, good elasticity.
                Colors: pink, blue, yellow
                Rabbit pudding pillow with funny shape and striking colors, gives your child fun hours of fun, suitable as a gift for your lover or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00003', 'id_type' => 4, 'name' => '40cm smooth round watermelon', 'description' => 'Smooth round watermelon "chirping" has been quickly updated Chip Chip for you and here! Smooth round watermelon is loved by everyone with a lovely face that makes everyone "bureaucratic"
                Material: Saigon feather, good elasticity.
                Colors: red and blue
                Smooth round watermelon with funny shapes and striking colors, gives your children fun hours of fun, suitable as gifts for lovers or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00004', 'id_type' => 4, 'name' => 'Pink leopard neck pillow', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00005', 'id_type' => 4, 'name' => 'Cat motorcycle pillow', 'description' => 'High quality motorbike / car pillow at work or  on car seat to  help stabilize body, head and neck.
                Ride pillows are very convenient features for users such as: 
                - Cool, not hot, squash when used  
                - Easy to wash and clean 
                - No smell even when used for a long time when lying or working The force on the pillow will flow the airflow regularly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00006', 'id_type' => 4, 'name' => 'Motorcycle pikachu pillow', 'description' => 'High quality motorbike / car pillow at work or  on car seat to  help stabilize body, head and neck.
                Ride pillows are very convenient features for users such as: 
                - Cool, not hot, squash when used  
                - Easy to wash and clean 
                - No smell even when used for a long time when lying or working The force on the pillow will flow the airflow regularly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00007', 'id_type' => 4, 'name' => 'Rilakuma pillow', 'description' => 'High quality latex headrest / backrest pillows when sitting or sitting  on car seats to  help stabilize the body, prevent back pain, degenerative spine, caused by sitting too long .
                The soft rubber backrest pillow has very convenient features for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for long days when lying down or applying pressure to pillows, the airflow will flow steadily 
                - There is no dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00008', 'id_type' => 4, 'name' => 'Pillow stitch', 'description' => 'High quality latex headrest / backrest pillows when sitting or sitting  on car seats to  help stabilize the body, prevent back pain, degenerative spine, caused by sitting too long .
                The soft rubber backrest pillow has very convenient features for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for long days when lying down or applying pressure to pillows, the airflow will flow steadily 
                - There is no dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00009', 'id_type' => 4, 'name' => 'Duck pillow', 'description' => 'High quality latex headrest / backrest pillows when sitting or sitting  on car seats to  help stabilize the body, prevent back pain, degenerative spine, caused by sitting too long .
                The soft rubber backrest pillow has very convenient features for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for long days when lying down or applying pressure to pillows, the airflow will flow steadily 
                - There is no dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'PL00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00010', 'id_type' => 4, 'name' => 'BTS square black and white 40cm', 'description' => 'Chip Chip has many models for you to choose: chicken, monkey, pig rubber backrest pillows ... And Korean Idol backrest pillows, square pillows for lying, ...
                The square pillow made of cotton has very convenient features for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time when lying down or impact on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00011', 'id_type' => 4, 'name' => 'Brown bear lying 70cm', 'description' => 'Extremely cute brown bears have been quickly updated by Chip Chip for you! Brown bear is loved by everyone with a lovely face that makes everyone "bureaucratic"
                Material: Saigon feather, good elasticity.
                Colors: dark brown
                Brown bear with funny shape and striking colors, gives your children fun hours of fun, suitable as a gift for your lover or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00012', 'id_type' => 4, 'name' => 'Neck pillow penguin blindfold', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'PL00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00013', 'id_type' => 4, 'name' => 'Frog neck pillow', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00014', 'id_type' => 4, 'name' => 'Rabbit car pillow', 'description' => 'High quality rubber backrest pillows at work or  on car seats  help stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.
                The soft rubber backrest pillow has very convenient features for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for long days when lying down or applying pressure to pillows, the airflow will flow steadily 
                - There is no dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00015', 'id_type' => 4, 'name' => 'Blindfolded neck pillow', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'PL00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00016', 'id_type' => 4, 'name' => 'Pillow with large pikachu animal heads', 'description' => 'Cute Pikachu bears have been updated by Chip Chip quickly for you! Pikachu bears are loved by everyone with a cute face that makes everyone "bureaucratic"
                Material: Saigon feather, good elasticity.
                Colors: yellow
                Pikachu bears with funny shapes and striking colors, giving your children fun hours of fun, suitable as gifts for lovers or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00016.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00017', 'id_type' => 4, 'name' => 'Angry bird head pillow 1 bird', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00017.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00018', 'id_type' => 4, 'name' => '1-pillows pikachu pillow', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00018.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 1, 'id' => 'PL00019', 'id_type' => 4, 'name' => 'Pillow one pooh bear head', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PL00019.jpg', 'unit' => rand(10, 99)],

            //GiftBox
            //Box Of Gift
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00001', 'id_type' => 5, 'name' => 'Gift box decorated with colored Christmas', 'description' => 'Chip Chip\'s rectangular gift box provides the necessary convenience for gifts in general and for the gift recipient in particular. With hard material, good strength, rectangular gift boxes are not only used for gift packaging but also suitable for storing other personal items after use as gifts.
                Besides,  rectangular gift boxes  ensure you have a truly meaningful, sophisticated and luxurious gift with high quality imported materials.
                Color: green', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BG00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00002', 'id_type' => 5, 'name' => 'Square Gift Box Bow Ribbon', 'description' => 'After having a satisfactory gift for your relatives and friends, you will surely think of a gift box, gift bag to add an eye-catching and choosing a gift box will cause difficult for you because you do not know what your loved ones like or how to impress you and there are many thoughts that confuse you, but now you do not have to worry too much because That too chipchip will help you with a variety of product models with new designs and colors, from simple to complex, you can choose for your choice is very simple, right?', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BG00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00003', 'id_type' => 5, 'name' => 'Dot shaped Tower Gift Box', 'description' => 'After having a satisfactory gift for your relatives and friends, you will surely think of a gift box, gift bag to add an eye-catching and choosing a gift box will cause difficult for you because you do not know what your loved ones like or how to impress you and there are many thoughts that confuse you, but now you do not have to worry too much because That too chipchip will help you with a variety of product models with new designs and colors, from simple to complex, you can choose for your choice is very simple, right?', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BG00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00004', 'id_type' => 5, 'name' => 'Dot shaped Tower Gift Box', 'description' => 'After having a satisfactory gift for your relatives and friends, you will surely think of a gift box, gift bag to add an eye-catching and choosing a gift box will cause difficult for you because you do not know what your loved ones like or how to impress you and there are many thoughts that confuse you, but now you do not have to worry too much because That too chipchip will help you with a variety of product models with new designs and colors, from simple to complex, you can choose for your choice is very simple, right?', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BG00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00005', 'id_type' => 5, 'name' => 'HCN Gift Box', 'description' => 'After having a satisfactory gift for your relatives and friends, you will surely think of a gift box, gift bag to add an eye-catching and choosing a gift box will cause difficult for you because you do not know what your loved ones like or how to impress you and there are many thoughts that confuse you, but now you do not have to worry too much because That too chipchip will help you with a variety of product models with new designs and colors, from simple to complex, you can choose for your choice is very simple, right?', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BG00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00006', 'id_type' => 5, 'name' => 'Gift box shaped rectangular', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'BG00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00007', 'id_type' => 5, 'name' => 'Gift box shaped rectangular', 'description' => 'After having a satisfactory gift for your relatives and friends, you will surely think of a gift box, gift bag to add an eye-catching and choosing a gift box will cause difficult for you because you do not know what your loved ones like or how to impress you and there are many thoughts that confuse you, but now you do not have to worry too much because That too chipchip will help you with a variety of product models with new designs and colors, from simple to complex, you can choose for your choice is very simple, right?', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BG00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00008', 'id_type' => 5, 'name' => 'Long, clean gift boxes', 'description' => 'Long, clean gift boxes', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'BG00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00009', 'id_type' => 5, 'name' => 'Heart shaped gift box', 'description' => 'Heart shaped gift box', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BG00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00010', 'id_type' => 5, 'name' => 'Square gift box', 'description' => 'Square gift box', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'BG00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00011', 'id_type' => 5, 'name' => 'Square gift box', 'description' => 'After having a satisfactory gift for your relatives and friends, you will surely think of a gift box, gift bag to add an eye-catching and choosing a gift box will cause difficult for you because you do not know what your loved ones like or how to impress you and there are many thoughts that confuse you, but now you do not have to worry too much because That too chipchip will help you with a variety of product models with new designs and colors, from simple to complex, you can choose for your choice is very simple, right?', 'unit_price' => rand(20, 30), 'promotion_price' => 10, 'image' => 'BG00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'BG00012', 'id_type' => 5, 'name' => 'Short-bottomed gift box', 'description' => 'After having a satisfactory gift for your relatives and friends, you will surely think of a gift box, gift bag to add an eye-catching and choosing a gift box will cause difficult for you because you do not know what your loved ones like or how to impress you and there are many thoughts that confuse you, but now you do not have to worry too much because That too chipchip will help you with a variety of product models with new designs and colors, from simple to complex, you can choose for your choice is very simple, right?', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BG00012.jpg', 'unit' => rand(10, 99)],
            //Gift Bag
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00001', 'id_type' => 6, 'name' => 'Bag of 2 straps of brown bear', 'description' => 'If you give a gift to a relative if your gift is put in a beautiful small bag with a unique and unique design, it will give the recipient a much more attractive feeling than a gift with a gift. The outside is normal, so adding a paper bag would be a lot better for present gifts.
                When you use the paper bag product, it also makes the gift more luxurious and much more valuable than other plastic bags and especially during the holidays, a beautiful gift will make the recipient happier. so many, so much.', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'GB00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00002', 'id_type' => 6, 'name' => 'Bag of 2 striped bear straps', 'description' => 'If you give a gift to a relative if your gift is put in a beautiful small bag with a unique and unique design, it will give the recipient a much more attractive feeling than a gift with a gift. The outside is normal, so adding a paper bag would be a lot better for present gifts.
                When you use the paper bag product, it also makes the gift more luxurious and much more valuable than other plastic bags and especially during the holidays, a beautiful gift will make the recipient happier. so many, so much.', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'GB00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00003', 'id_type' => 6, 'name' => 'Bags of 2 color HPBD straps', 'description' => 'If you give a gift to a relative if your gift is put in a beautiful small bag with a unique and unique design, it will give the recipient a much more attractive feeling than a gift with a gift. The outside is normal, so adding a paper bag would be a lot better for present gifts.
                When you use the paper bag product, it also makes the gift more luxurious and much more valuable than other plastic bags and especially during the holidays, a beautiful gift will make the recipient happier. so many, so much.', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'GB00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00004', 'id_type' => 6, 'name' => '2 small HPBT straps', 'description' => 'If you give a gift to a relative if your gift is put in a beautiful small bag with a unique and unique design, it will give the recipient a much more attractive feeling than a gift with a gift. The outside is normal, so adding a paper bag would be a lot better for present gifts.
                When you use the paper bag product, it also makes the gift more luxurious and much more valuable than other plastic bags and especially during the holidays, a beautiful gift will make the recipient happier. so many, so much.', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'GB00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00005', 'id_type' => 6, 'name' => 'LOVE 2 straps bag', 'description' => 'If you give a gift to a relative if your gift is put in a beautiful small bag with a unique and unique design, it will give the recipient a much more attractive feeling than a gift with a gift. The outside is normal, so adding a paper bag would be a lot better for present gifts.
                When you use the paper bag product, it also makes the gift more luxurious and much more valuable than other plastic bags and especially during the holidays, a beautiful gift will make the recipient happier. so many, so much.', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'GB00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00006', 'id_type' => 6, 'name' => 'Bag with 2 large straps', 'description' => 'No description for this product yet', 'unit_price' => rand(5, 10), 'promotion_price' => 0, 'image' => 'GB00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00007', 'id_type' => 6, 'name' => 'Paper bags', 'description' => 'If you give a gift to a relative if your gift is put in a beautiful small bag with a unique and unique design, it will give the recipient a much more attractive feeling than a gift with a gift. The outside is normal, so adding a paper bag would be a lot better for present gifts.
                When you use the paper bag product, it also makes the gift more luxurious and much more valuable than other plastic bags and especially during the holidays, a beautiful gift will make the recipient happier. so many, so much.', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'GB00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00008', 'id_type' => 6, 'name' => 'Large wallpaper bags', 'description' => 'No description for this product yet', 'unit_price' => rand(5, 10), 'promotion_price' => 0, 'image' => 'GB00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00009', 'id_type' => 6, 'name' => 'Medium wallpaper bags', 'description' => 'If you give a gift to a relative if your gift is put in a beautiful small bag with a unique and unique design, it will give the recipient a much more attractive feeling than a gift with a gift. The outside is normal, so adding a paper bag would be a lot better for present gifts.
                When you use the paper bag product, it also makes the gift more luxurious and much more valuable than other plastic bags and especially during the holidays, a beautiful gift will make the recipient happier. so many, so much.', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'GB00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GB00010', 'id_type' => 6, 'name' => 'Paper gift bags', 'description' => 'There is no description for this product', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'GB00010.jpg', 'unit' => rand(10, 99)],
            //Gift Card
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00001', 'id_type' => 7, 'name' => 'Wooden pen greeting card for teachers', 'description' => 'Vietnamese Teachers\' Day 20-11, besides beautiful bouquets, congratulations ... the cards also contain affection and great meaning that you can send to your teachers.
                - Luxurious, beautifully
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00002', 'id_type' => 7, 'name' => 'Teachers greeting cards with flower baskets attached', 'description' => 'Vietnamese Teachers\' Day 20-11, besides beautiful bouquets, congratulations ... the cards also contain affection and great meaning that you can send to your teachers.
                - Luxurious, beautifully
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00003', 'id_type' => 7, 'name' => 'Greeting cards for teachers', 'description' => 'Vietnamese Teachers\' Day 20-11, besides beautiful bouquets, congratulations ... the cards also contain affection and great meaning that you can send to your teachers.
                - Luxurious, beautifully
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00004', 'id_type' => 7, 'name' => 'Wooden floral greeting card for teachers', 'description' => 'Vietnamese Teachers\' Day 20-11, besides beautiful bouquets, congratulations ... the cards also contain affection and great meaning that you can send to your teachers.
                - Luxurious, beautifully
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00005', 'id_type' => 7, 'name' => 'Wooden hanging cards to congratulate teachers', 'description' => 'Vietnamese Teachers\' Day 20-11, besides beautiful bouquets, congratulations ... the cards also contain affection and great meaning that you can send to your teachers.
                - Luxurious, beautifully
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00006', 'id_type' => 7, 'name' => 'Pop-up gift box pop-up card', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00007', 'id_type' => 7, 'name' => 'Happy birthday card happybirthday', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00008', 'id_type' => 7, 'name' => 'Handmade birthday card', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00009', 'id_type' => 7, 'name' => 'Large handmade birthday card', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00010', 'id_type' => 7, 'name' => 'Large handmade birthday card', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00011', 'id_type' => 7, 'name' => 'Small handmade birthday card', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00012', 'id_type' => 7, 'name' => 'Small handmade birthday card', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00013', 'id_type' => 7, 'name' => 'Flower star birthday card', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00014', 'id_type' => 7, 'name' => 'Pop-up birthday card', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 2, 'id' => 'GC00015', 'id_type' => 7, 'name' => 'Birthday card pop-up candle', 'description' => 'Birthdays, besides fresh bouquets, lovely birthday presents ... the cards also contain affection, great meaning that you can send to your friends.
                - Funny design, cute
                - Bright, elegant colors
                - High quality Ivory paper
                - Enclosed with karft paper envelopes', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'GC00015.jpg', 'unit' => rand(10, 99)],

            //Keychains
            //Strap Keychains
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00001', 'id_type' => 8, 'name' => 'Strap shaped V', 'description' => 'Strap called idols are always items sought after by young people.
                With strap strap pair, backpack or keychains. No matter what you do, this easy-to-transform Strap will create its own substance when used. ', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'SK00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00002', 'id_type' => 8, 'name' => 'Telephone cord for short ear', 'description' => 'Telephone cord for short ear', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00003', 'id_type' => 8, 'name' => 'Brown short telephone cord', 'description' => 'No description for this product yet', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00004', 'id_type' => 8, 'name' => 'Doraemon short cord', 'description' => 'No description for this product yet', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00005', 'id_type' => 8, 'name' => 'Hello kitty phone cord long', 'description' => 'There is no description for this product', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00006', 'id_type' => 8, 'name' => 'Long rose phone cord', 'description' => 'No description for this product yet', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00007', 'id_type' => 8, 'name' => 'Long snow phone cord', 'description' => 'No description for this product yet', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00008', 'id_type' => 8, 'name' => 'Supreme short telephone cord', 'description' => 'SUPREME SHORT TELEPHONE CORD', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00009', 'id_type' => 8, 'name' => 'Kitty bear telephone cord short', 'description' => 'No description for this product yet', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'SK00010', 'id_type' => 8, 'name' => 'Long brown telephone cord', 'description' => 'LONG BROWN TELEPHONE CORD', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'SK00010.jpg', 'unit' => rand(10, 99)],

            //Cute Keychains
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00001', 'id_type' => 9, 'name' => 'Ball bell', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00002', 'id_type' => 9, 'name' => 'Brown bell', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00003', 'id_type' => 9, 'name' => 'Doreamon bell', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00004', 'id_type' => 9, 'name' => 'Pink pig bell', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00005', 'id_type' => 9, 'name' => 'Peppa pig bells', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00006', 'id_type' => 9, 'name' => 'Chi cat bell', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00007', 'id_type' => 9, 'name' => 'Smiling bells', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00008', 'id_type' => 9, 'name' => 'Keychains for baby wearing Minie hat', 'description' => 'Made of high-grade plastic material is very durable and lightweight,this accessory is doing crazy youth, and create highlights as you go. This product can also be used as a pair of keychains, bag keychains, handbags, car keychains ... etc. This Doll Key Chain promises to be an extremely hot accessory for men and women. in the near future.', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00009', 'id_type' => 9, 'name' => 'Pikachu bell', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00010', 'id_type' => 9, 'name' => 'Keychains love', 'description' => 'No description for this product yet', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00011', 'id_type' => 9, 'name' => 'Shin bells', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00012', 'id_type' => 9, 'name' => 'Totoro bell', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00013', 'id_type' => 9, 'name' => 'Keychains baby mickey', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00014', 'id_type' => 9, 'name' => 'Keychains baby pacifier', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00015', 'id_type' => 9, 'name' => 'Keychains baby pikachu', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00016', 'id_type' => 9, 'name' => 'Keychains baby duck hats', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00016.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'CK00017', 'id_type' => 9, 'name' => 'Pig knotting pair', 'description' => 'No description for this product yet', 'unit_price' => rand(2, 5), 'promotion_price' => 0 , 'image' => 'CK00017.jpg', 'unit' => rand(10, 99)],
            //Keychains Squeeze
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00001', 'id_type' => 10, 'name' => 'Keychain with striped bow tie', 'description' => 'keychain with striped bow tie', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00002', 'id_type' => 10, 'name' => 'Keychain with black striped rabbit backpack', 'description' => 'keychain with black striped rabbit backpack', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00003', 'id_type' => 10, 'name' => 'Backpack with big eyes', 'description' => 'backpack with big eyes', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00004', 'id_type' => 10, 'name' => 'Noctilucent keychain', 'description' => 'No description for this product yet', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00005', 'id_type' => 10, 'name' => 'Brown backpack keychains', 'description' => 'Brown backpack keychains', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00006', 'id_type' => 10, 'name' => 'Key chain Cony blue', 'description' => 'key chain Cony blue', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00007', 'id_type' => 10, 'name' => 'Key chain backpack chicken Happy', 'description' => 'key chain backpack chicken Happy', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00008', 'id_type' => 10, 'name' => 'Keychain with white Cony backpack', 'description' => 'keychain with white Cony backpack', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00009', 'id_type' => 10, 'name' => 'Keychain with black striped rabbit backpack', 'description' => 'keychain with black striped rabbit backpack', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00010', 'id_type' => 10, 'name' => 'Brown cony backpack keychains', 'description' => 'Brown cony backpack keychains', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00011', 'id_type' => 10, 'name' => 'Key chain Cony Hong', 'description' => 'Key chain Cony Hong', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00012', 'id_type' => 10, 'name' => 'Cony keychain', 'description' => 'Cony keychain', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00013', 'id_type' => 10, 'name' => 'Doraemon squeeze keychain', 'description' => 'Doraemon squeeze keychain', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00014', 'id_type' => 10, 'name' => 'Brown bear keychain', 'description' => 'Brown bear keychain', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00015', 'id_type' => 10, 'name' => 'Keychains backpack kakao friend', 'description' => 'It is interesting when this Kakao Friend became close friends who always stand by his side, bringing lots of joy, sharing love. You can both make a keychain and make a small wallet with money
                Material: high-class leather is safe.
                Seam delicate, meticulous, sure
                Outstanding colors, eye-catching ', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'KS00016', 'id_type' => 10, 'name' => 'Flexible plastic keychain', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'KS00016.jpg', 'unit' => rand(10, 99)],
            //Animal Keychains
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00001', 'id_type' => 11, 'name' => 'Keychains teddy bear brothers', 'description' => 'It is interesting that these brothers become close friends who always stand by their side, bringing lots of joy, sharing love. Making keychains while being able to carry around like little bears
                Material: Saigon feather soft, high class safety.
                Seam delicate, meticulous, sure, not shed hair, safe for health.
                Outstanding, eye-catching colors attract children\'s curiosity.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00002', 'id_type' => 11, 'name' => 'Keychains birch chimmy cotton', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00003', 'id_type' => 11, 'name' => 'Key ring bts rj cotton', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching ', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00004', 'id_type' => 11, 'name' => 'Keychains bts cotton valve', 'description' => 'It is interesting to know that this keyring becomes a close friend that is always close to you, bringing lots of fun. Making keychains while being able to carry around like toys with jingling sounds is very fun.
                Material: high quality stainless steel.
                No worry about rust, safe for health.
                Colors, striking designs, eye-catching', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00005', 'id_type' => 11, 'name' => 'Unicorn teddy bear snakes 25cm', 'description' => 'It is interesting that this horse becomes a close friend who is always by his side, bringing lots of joy, sharing love. Give your baby a horse like this so he can  create many interesting games, he can also sleep because the rainbow horse is moderate in size and very soft, smooth, soothing. Good night baby.
                Material: Saigon feather soft, high class safety.
                Seam delicate, meticulous, sure, not shed hair, safe for health.
                Outstanding, eye-catching colors attract children\'s curiosity.
                Suitable as gifts for babies on special occasions.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00006', 'id_type' => 11, 'name' => 'Plastic cat keychain with soft cat hole', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00007', 'id_type' => 11, 'name' => 'Keychains for baby bottles and animal hats', 'description' => 'KEYCHAINS FOR BABY BOTTLES AND ANIMAL HATS', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00008', 'id_type' => 11, 'name' => 'Keychains dog cotton backpack', 'description' => 'KEYCHAINS DOG COTTON BACKPACK', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00009', 'id_type' => 11, 'name' => 'Cotton mouse keychains', 'description' => 'COTTON MOUSE KEYCHAINS', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00010', 'id_type' => 11, 'name' => 'Fur dog keychains', 'description' => 'Keychains stuffed animals cute and extremely lovely.
                Soft cotton material, no twist, no shedding, safe for users. 
                Used to hook into keys, bags, backpacks, ... 
                Compact design, fit to the pocket. 
                There are many models of stuffed animal keychain for you to choose to equip yourself or as gifts for friends, relatives, ...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00011', 'id_type' => 11, 'name' => 'Owl padlock', 'description' => 'Keychains stuffed animals cute and extremely lovely.
                Soft cotton material, no twist, no shedding, safe for users. 
                Used to hook into keys, bags, backpacks, ... 
                Compact design, fit to the pocket. 
                There are many models of stuffed animal keychain for you to choose to equip yourself or as gifts for friends, relatives, ...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00012', 'id_type' => 11, 'name' => 'Keychains cotton lalafanfan pig shirt', 'description' => 'Keychains stuffed animals cute and extremely lovely.
                Soft cotton material, no twist, no shedding, safe for users. 
                Used to hook into keys, bags, backpacks, ... 
                Compact design, fit to the pocket. 
                There are many models of stuffed animal keychain for you to choose to equip yourself or as gifts for friends, relatives, ...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00013', 'id_type' => 11, 'name' => 'Keychains cotton lalafanfan dinosaur coat', 'description' => 'Keychains stuffed animals cute and extremely lovely.
                Soft cotton material, no twist, no shedding, safe for users. 
                Used to hook into keys, bags, backpacks, ... 
                Compact design, fit to the pocket. 
                There are many models of stuffed animal keychain for you to choose to equip yourself or as gifts for friends, relatives, ...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 3, 'id' => 'AK00014', 'id_type' => 11, 'name' => 'Squirrel cotton buckle', 'description' => 'Keychains stuffed animals cute and extremely lovely.
                Soft cotton material, no twist, no shedding, safe for users. 
                Used to hook into keys, bags, backpacks, ... 
                Compact design, fit to the pocket. 
                There are many models of stuffed animal keychain for you to choose to equip yourself or as gifts for friends, relatives, ...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'AK00014.jpg', 'unit' => rand(10, 99)],

            //Appliances
            //Water Bottle
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00001', 'id_type' => 12, 'name' => 'Doraemon thermos bottle 350ml', 'description' => 'Doraemon thermos bottle 350ml', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00002', 'id_type' => 12, 'name' => '500ml totoro thermos bottle', 'description' => '500ml totoro thermos bottle', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00003', 'id_type' => 12, 'name' => '6749 Mirror Bear Thermos', 'description' => '6749 Mirror Bear Thermos', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00004', 'id_type' => 12, 'name' => 'Minion water tank holds heat', 'description' => 'The image of the minion was introduced by chip shop through the product of minion water heater, which keeps heat. This will be a unique gift that you will hardly think.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00005', 'id_type' => 12, 'name' => 'BTS water dispenser', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!
                Chip Chip water bottle has many designs from zodiac signs to colorful BT21 and countless other cute styles that will make you drink more water.
                Material is strong and transparent plastic, do not worry about falling and breaking', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00006', 'id_type' => 12, 'name' => 'Caricorn small water pitcher', 'description' => 'Caricorn small water pitcher', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00007', 'id_type' => 12, 'name' => 'Plastic coated flower pot', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00008', 'id_type' => 12, 'name' => 'TT ryan water bottle', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!
                Chip Chip water bottle has many designs from zodiac signs to colorful BT21 and countless other cute styles that will make you drink more water.
                Material is strong and transparent plastic, do not worry about falling and breaking', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00009', 'id_type' => 12, 'name' => 'Plastic jar with 2 storks', 'description' => 'PLASTIC JAR WITH 2 STORKS', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00010', 'id_type' => 12, 'name' => 'Cranes wrapped in plastic', 'description' => 'CRANES WRAPPED IN PLASTIC', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00011', 'id_type' => 12, 'name' => 'Plastic coated cactus', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00012', 'id_type' => 12, 'name' => 'Thermos bottle 1805', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!
                Chip Chip water bottle has many designs from zodiac signs to colorful BT21 and countless other cute styles that will make you drink more water.
                Material is strong and transparent plastic, do not worry about falling and breaking', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00013', 'id_type' => 12, 'name' => '6878 thermos flask', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!
                Chip Chip water bottle has many designs from zodiac signs to colorful BT21 and countless other cute styles that will make you drink more water.
                Material is strong and transparent plastic, do not worry about falling and breaking', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00014', 'id_type' => 12, 'name' => '8044 thermos bottle', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!
                Chip Chip water bottle has many designs from zodiac signs to colorful BT21 and countless other cute styles that will make you drink more water.
                Material is strong and transparent plastic, do not worry about falling and breaking', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00015', 'id_type' => 12, 'name' => 'Pink heat keeping bottle', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!
                Chip Chip water bottle has many designs from zodiac signs to colorful BT21 and countless other cute styles that will make you drink more water.
                Material is strong and transparent plastic, do not worry about falling and breaking', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00016', 'id_type' => 12, 'name' => 'Long-lasting pink heat keeping bottle', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00016.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00017', 'id_type' => 12, 'name' => 'Glass tea strainer', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!
                Chip Chip water bottle has many designs from zodiac signs to colorful BT21 and countless other cute styles that will make you drink more water.
                Material is strong and transparent plastic, do not worry about falling and breaking', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00017.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00018', 'id_type' => 12, 'name' => 'Glass jar 3 brothers bear 2516', 'description' => 'GLASS JAR 3 BROTHERS BEAR 2516', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00018.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00019', 'id_type' => 12, 'name' => 'Animal glass water bottle', 'description' => 'animal glass water bottle', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00019.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'WB00020', 'id_type' => 12, 'name' => 'Glass covered with plastic holes', 'description' => 'Glass covered with plastic holes', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'WB00020.jpg', 'unit' => rand(10, 99)],
            //Essential Oil Lamp
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00001', 'id_type' => 13, 'name' => 'May flowers essential oil', 'description' => 'MAY FLOWERS ESSENTIAL OIL', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00002', 'id_type' => 13, 'name' => 'Porcelain flower vase flower star', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00003', 'id_type' => 13, 'name' => 'Nightlight girl', 'description' => 'Description: Essential nightlight with special touch function makes it easy to turn on and off, designed with many floral patterns when the lights turn on will show beautiful images, soft light without glare to help you have a nice sleep...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00004', 'id_type' => 13, 'name' => 'Nightlight pattern', 'description' => 'Description: Essential nightlight with special touch function makes it easy to turn on and off, designed with many floral patterns when the lights turn on will show beautiful images, soft light without glare to help you have a nice sleep...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00005', 'id_type' => 13, 'name' => 'Fragrant essential oil', 'description' => 'Fragrance spreads in a modern room This product combines scent technology and art design. Can be placed in bedroom, toilet or office.
                Soothing scent makes you feel more comfortable.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00006', 'id_type' => 13, 'name' => 'Square fragrant oil', 'description' => 'Fragrance spreads in a modern room This product combines scent technology and art design. Can be placed in bedroom, toilet or office.
                Soothing scent makes you feel more comfortable.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00007', 'id_type' => 13, 'name' => 'Porcelain flower lamp essential oil', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00008', 'id_type' => 13, 'name' => 'Essential oil bottle', 'description' => 'Essential oil is one of the most popular essential oil products. Essential oils extracted from nature are a precious gift that nature has bestowed on us with many surprising effects not everyone knows.
                With a scent that is both sweet and aromatic, essential oils are able to lift spirits, reduce stress, bring a sense of relaxation and lightness. Very good for those who often work stress, mild depression.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00009', 'id_type' => 13, 'name' => 'Essential oil bottle', 'description' => 'Essential oil is one of the most popular essential oil products. Essential oils extracted from nature are a precious gift that nature has bestowed on us with many surprising effects not everyone knows.
                With a scent that is both sweet and aromatic, essential oils are able to lift spirits, reduce stress, bring a sense of relaxation and lightness. Very good for those who often work stress, mild depression.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00010', 'id_type' => 13, 'name' => 'Porcelain flower candle', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00011', 'id_type' => 13, 'name' => 'Essential oil 2 litchi flower', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00012', 'id_type' => 13, 'name' => 'Bup essential oilsbaby dress', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'EL00013', 'id_type' => 13, 'name' => 'Essential oil girl sitting tree stump', 'description' => 'No description for this product yet', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'EL00013.jpg', 'unit' => rand(10, 99)],
            //Mini Fan
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00001', 'id_type' => 14, 'name' => 'Fan slanted BTS', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate', 'unit_price' => rand(5, 30), 'promotion_price' => 0 , 'image' => 'MF00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00002', 'id_type' => 14, 'name' => 'Doraemon sole fan light', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'MF00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00003', 'id_type' => 14, 'name' => 'Totoro desk fan', 'description' => 'It is very convenient to integrate additional clamping feet for fans to conveniently place fans everywhere. Fans can be clamped on some edges of tables, iron frames and even bookshelves thin. ', 'unit_price' => rand(5, 30), 'promotion_price' => 0 , 'image' => 'MF00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00004', 'id_type' => 14, 'name' => 'Portable mini fan Carrot', 'description' => 'This is an indispensable item in the hot weather of summer. However, during the travels, the tired classes, the hard working days, carrying this mini fan is really necessary. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.', 'unit_price' => rand(5, 30), 'promotion_price' => 0 , 'image' => 'MF00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00005', 'id_type' => 14, 'name' => 'Smooth color mini fan', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate', 'unit_price' => rand(5, 30), 'promotion_price' => 0 , 'image' => 'MF00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00006', 'id_type' => 14, 'name' => 'Fan flipped kitty cap', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.
                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00007', 'id_type' => 14, 'name' => 'Doraemon fan winked', 'description' => 'With hot weather, a portable fan to blow away the heat is a necessary thing, right? Chip Chip has many types of fans for you to choose from.
                The fans are pretty, with LED lights that are charged by electricity, you can use hundreds of times without worrying about running out of battery.
                There is a compact, convenient design suitable for taking to school, going out or outdoor picnics', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00008', 'id_type' => 14, 'name' => 'Portable mini fan ferris wheel', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'MF00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00009', 'id_type' => 14, 'name' => 'Kitty portable mini fan', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'MF00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00010', 'id_type' => 14, 'name' => 'Mini desktop fan rilakuma', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.

                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00011', 'id_type' => 14, 'name' => 'Mini-kumamon desktop fan', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.

                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00012', 'id_type' => 14, 'name' => 'Yase-shaped fan', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.

                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00013', 'id_type' => 14, 'name' => 'Portable kitty fan', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.

                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00014', 'id_type' => 14, 'name' => 'Hand bearing fan', 'description' => 'With hot weather, a portable fan to blow away the heat is a necessary thing, right? Chip Chip has many types of fans for you to choose from.

                The handheld fan BT21 has outstanding color and redesign also looks lovely

                Or the beautiful fan, with LED lights that are charged by electricity, you can use hundreds of times without worrying about running out of battery.

                There is a compact, convenient design suitable for taking to school, going out or outdoor picnics', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00015', 'id_type' => 14, 'name' => 'Shakey hand fan', 'description' => 'With hot weather, a portable fan to blow away the heat is a necessary thing, right? Chip Chip has many types of fans for you to choose from.

                The handheld fan BT21 has outstanding color and redesign also looks lovely

                Or the beautiful fan, with LED lights that are charged by electricity, you can use hundreds of times without worrying about running out of battery.

                There is a compact, convenient design suitable for taking to school, going out or outdoor picnics', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00016', 'id_type' => 14, 'name' => 'Valve hand fan', 'description' => 'With hot weather, a portable fan to blow away the heat is a necessary thing, right? Chip Chip has many types of fans for you to choose from.

                The handheld fan BT21 has outstanding color and redesign also looks lovely

                Or the beautiful fan, with LED lights that are charged by electricity, you can use hundreds of times without worrying about running out of battery.

                There is a compact, convenient design suitable for taking to school, going out or outdoor picnics', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00016.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00017', 'id_type' => 14, 'name' => 'Antique mini fan breaks Kitty.', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.

                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00017.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00018', 'id_type' => 14, 'name' => 'Fan reindeer desk lamp.', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.

                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00018.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00019', 'id_type' => 14, 'name' => 'Doraemon pen fan', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.

                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00019.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'MF00020', 'id_type' => 14, 'name' => 'Brown hand-held fan', 'description' => 'This is an indispensable item in the hot weather of summer. In the travels, the tired classes, the hard working days, it is really necessary to bring a mini fan. Next to the wind, the air will soften everywhere the absence of air conditioning has a sweltering climate.

                Cute designs, striking colors, with many choices for you', 'unit_price' => rand(5, 10), 'promotion_price' => 0 , 'image' => 'MF00020.jpg', 'unit' => rand(10, 99)],
            //Household Appliances
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00001', 'id_type' => 15, 'name' => 'Strawberry 3D cushion', 'description' => 'High-quality feather-feather cushioning at work or  on car seats  helps to stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.

                The cushion has a very convenient feature for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time due to lying or impacting force on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00002', 'id_type' => 15, 'name' => 'Cactus-shaped spray', 'description' => 'Plastic sprays have many outstanding advantages that you can take advantage of in many different functions:

                High quality plastic material, transparent, hard, durable, safe for users. You can rest assured that the product is not deformed, brittle plastic over time. 
                The hand-shaped nozzles are designed to bevel, you just need to press and drag the lever to spray water. 
                Can put oil into spray to prevent sticking.
                Clean and clean after use, store in a cool, dry place.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00003', 'id_type' => 15, 'name' => 'Tree reindeer roller', 'description' => 'Dust roller with adhesive roll will remove dirt, hairs, dog and cat hair on clothes, blankets, sofas, chairs ... easily and quickly.

                In addition, the roller can add a serrated surface to help collect hair, fur in difficult corners of the sofa, carpet, corner ... Simple usage, just need to roll slightly on the surface of clothes, blankets The mattress, the glue part of the tool will help get rid of dirt.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00004', 'id_type' => 15, 'name' => 'Unicorn clothes rollers', 'description' => 'Dust roller with adhesive roll will remove dirt, hairs, dog and cat hair on clothes, blankets, sofas, chairs ... easily and quickly.

                In addition, the roller can add a serrated surface to help collect hair, fur in difficult corners of the sofa, carpet, corner ... Simple usage, just need to roll slightly on the surface of clothes, blankets The mattress, the glue part of the tool will help get rid of dirt.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00005', 'id_type' => 15, 'name' => '3D Brown sleeping pad', 'description' => 'High-quality feather-feather cushioning at work or  on car seats  helps to stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.

                The cushion has a very convenient feature for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time due to lying or impacting force on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00006', 'id_type' => 15, 'name' => '3D Brown padding', 'description' => 'High-quality feather-feather cushioning at work or  on car seats  helps to stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.

                The cushion has a very convenient feature for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time due to lying or impacting force on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00007', 'id_type' => 15, 'name' => 'Orange 3D cushion', 'description' => 'High-quality feather-feather cushioning at work or  on car seats  helps to stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.

                The cushion has a very convenient feature for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time due to lying or impacting force on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00008', 'id_type' => 15, 'name' => '3D lime pad', 'description' => 'High-quality feather-feather cushioning at work or  on car seats  helps to stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.

                The cushion has a very convenient feature for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time due to lying or impacting force on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00009', 'id_type' => 15, 'name' => '3D watermelon pad', 'description' => 'High-quality feather-feather cushioning at work or  on car seats  helps to stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.

                The cushion has a very convenient feature for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time due to lying or impacting force on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00010', 'id_type' => 15, 'name' => 'Hello clothes roller', 'description' => 'Dust roller with adhesive roll will remove dirt, hairs, dog and cat hair on clothes, blankets, sofas, chairs ... easily and quickly.

                In addition, the roller can add a serrated surface to help collect hair, fur in difficult corners of the sofa, carpet, corner ... Simple usage, just need to roll slightly on the surface of clothes, blankets The mattress, the glue part of the tool will help get rid of dirt.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00011', 'id_type' => 15, 'name' => '3D wood padding', 'description' => 'High-quality feather-feather cushioning at work or  on car seats  helps to stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.

                The cushion has a very convenient feature for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time due to lying or impacting force on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00012', 'id_type' => 15, 'name' => 'Kiwi 3D cushion', 'description' => 'High-quality feather-feather cushioning at work or  on car seats  helps to stabilize the body, prevent back pain, degenerative spine, caused by sitting too long.

                The cushion has a very convenient feature for users such as: 
                - Cool, not hot, steamy when used  
                - Easy to wash and clean 
                - No smell even when used for a long time due to lying or impacting force on the airflow pillows will flow smoothly 
                - No dirt, mold, parasites because the pillow is always dry, not moisturizing', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00013', 'id_type' => 15, 'name' => 'Cushion sitting brown dinosaur', 'description' => 'Material: Saigon feather, good elasticity.

                Colors: light green

                Seat cushions with funny shapes and striking colors, giving your children fun hours of fun, suitable as a gift for your lover or crush. With fine velvet material, the same cotton stuffed with good elasticity, does not cause skin sensitivity, safe to use.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00014', 'id_type' => 15, 'name' => 'Inhale the 3 sitting bears refrigerator', 'description' => 'Fridge inhalers with lovely shape, will refresh your house and appliances 
                - Diverse colors, designs, cute 
                - Made from plastic without worrying of breaking 
                - Backside has magnet so you can inhale iron surfaces such as fridge wings, hoods, microwave ovens, ovens, metal closets, etc. 
                - You can also use 2-sided glue to stick on non-iron surfaces: Cabinets Wooden clothes, fish cabinets, computer screens.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00015', 'id_type' => 15, 'name' => 'Inhale the chimmy refrigerator', 'description' => 'Fridge inhalers with lovely shape, will refresh your house and appliances 
                - Diverse colors, designs, cute 
                - Made from plastic without worrying of breaking 
                - Backside has magnet so you can inhale iron surfaces such as fridge wings, hoods, microwave ovens, ovens, metal closets, etc. 
                - You can also use 2-sided glue to stick on non-iron surfaces: Cabinets Wooden clothes, fish cabinets, computer screens.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'HA00016', 'id_type' => 15, 'name' => 'Inhale the refrigerator peppa pig', 'description' => 'Fridge inhalers with lovely shape, will refresh your house and appliances 
                - Diverse colors, designs, cute 
                - Made from plastic without worrying of breaking 
                - Backside has magnet so you can inhale iron surfaces such as fridge wings, hoods, microwave ovens, ovens, metal closets, etc. 
                - You can also use 2-sided glue to stick on non-iron surfaces: Cabinets Wooden clothes, fish cabinets, computer screens.', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'HA00016.jpg', 'unit' => rand(10, 99)],
            //Glass Of Water
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00001', 'id_type' => 16, 'name' => 'Ly pair of sheep', 'description' => '- Color: clear white

                - Plastic material

                - Size: 12 x 6 cm', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00002', 'id_type' => 16, 'name' => 'Glass of butterfly', 'description' => '', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00003', 'id_type' => 16, 'name' => 'Cups pair pictures', 'description' => ' - A pair of cups is suitable for both men and women.

                    - Extremely beautiful design, unique with cute images on the separation.

                - High quality white porcelain material.

                - Thick glass, good heat resistance.

                - Many cute models.

                - Meaningful, practical gift and connect two hearts together, suitable as a gift 

                - A meaningful gift given at the right time sometimes gives both the giver and the receiver a lot of fun. Bringing the message of love is an item that the recipient can use every day, the porcelain cup of love will be a meaningful gift for you couple.  Cups are made of high quality ceramic material, clean, beautiful and handy. Especially very safe, non-toxic to users. Ly is decorated with vivid patterns, extremely cute and funny pictures. Glossy enamel coating makes it easy to clean after using and especially keeps the gloss durable.', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00004', 'id_type' => 16, 'name' => 'Court bridge', 'description' => 'No description', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00005', 'id_type' => 16, 'name' => 'Set of bowls to eat yellow duck noodles', 'description' => 'Material: porcelain', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00006', 'id_type' => 16, 'name' => 'Thermos cup set with stainless steel accessories', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!

                My water glass has a lot of designs, different materials from stainless steel cups to keep heat with accessories to protect the environment, to cute, simple porcelain glasses suitable as gifts and countless cute designs. else will make you drink more water

                Material is high-grade stainless steel keeps heat, does not worry about falling, with accessories including stainless steel straws and cup bags', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00007', 'id_type' => 16, 'name' => 'Thermostats with stainless steel accessories AS', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!

                My water glass has a lot of designs, different materials from stainless steel cups to keep heat with accessories to protect the environment, to cute, simple porcelain glasses suitable as gifts and countless cute designs. else will make you drink more water

                Material is high-grade stainless steel keeps heat, does not worry about falling, with accessories including stainless steel straws and cup bags', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00008', 'id_type' => 16, 'name' => 'Thermos Cup set with stainless steel accessories Elsa', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!

                My water glass has a lot of designs, different materials from stainless steel cups to keep heat with accessories to protect the environment, to cute, simple porcelain glasses suitable as gifts and countless cute designs. else will make you drink more water

                Material is high-grade stainless steel keeps heat, does not worry about falling, with accessories including stainless steel straws and cup bags', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00009', 'id_type' => 16, 'name' => 'Thermostats with stainless steel accessories SP', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!

                My water glass has a lot of designs, different materials from stainless steel cups to keep heat with accessories to protect the environment, to cute, simple porcelain glasses suitable as gifts and countless cute designs. else will make you drink more water

                Material is high-grade stainless steel keeps heat, does not worry about falling, with accessories including stainless steel straws and cup bags', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00010', 'id_type' => 16, 'name' => 'Thermo cup holder set with Stainless Steel Unicorn accessories', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!

                My water glass has a lot of designs, different materials from stainless steel cups to keep heat with accessories to protect the environment, to cute, simple porcelain glasses suitable as gifts and countless cute designs. else will make you drink more water

                Material is high-grade stainless steel keeps heat, does not worry about falling, with accessories including stainless steel straws and cup bags', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00011', 'id_type' => 16, 'name' => 'Ly animal 3D', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!

                My water glass has a lot of designs, different materials from stainless steel cups to keep heat with accessories to protect the environment, to cute, simple porcelain glasses suitable as gifts and countless cute designs. else will make you drink more water

                Material is high-grade stainless steel keeps heat, does not worry about falling, with accessories including stainless steel straws and cup bags', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 4, 'id' => 'GW00012', 'id_type' => 16, 'name' => 'Ly BT21', 'description' => '70% of our body is water, so we have to drink water regularly to have health to go to miscellaneous things !!

                My water glass has a lot of designs, different materials from stainless steel cups to keep heat with accessories to protect the environment, to cute, simple porcelain glasses suitable as gifts and countless cute designs. else will make you drink more water

                Material is high-grade stainless steel keeps heat, does not worry about falling, with accessories including stainless steel straws and cup bags', 'unit_price' => rand(10, 20), 'promotion_price' => 0 , 'image' => 'GW00012.jpg', 'unit' => rand(10, 99)],
            //Souvenir
            //Pig Tube
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00001', 'id_type' => 17, 'name' => 'Pig dog tube way', 'description' => 'No description...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00002', 'id_type' => 17, 'name' => 'Write a striped cat', 'description' => '- Color: Gray

                -  Material: crockery

                - Size: 15x13 cm', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'PT00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00003', 'id_type' => 17, 'name' => 'Mail girl girl', 'description' => 'No description...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00004', 'id_type' => 17, 'name' => 'Plug in writing totoro', 'description' => 'No description...', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00005', 'id_type' => 17, 'name' => 'Cos boys and girls', 'description' => 'No description...', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'PT00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00006', 'id_type' => 17, 'name' => 'Kute piggy bank', 'description' => 'No description...', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'PT00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00007', 'id_type' => 17, 'name' => 'Doremon ATM machine', 'description' => 'Doremon ATM machine', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00008', 'id_type' => 17, 'name' => 'ATM minion', 'description' => 'ATM minion', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00009', 'id_type' => 17, 'name' => 'ATM totoro', 'description' => 'ATM totoro', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00010', 'id_type' => 17, 'name' => 'Statue of high Kitty tower', 'description' => 'With cute statues like this, you can decorate the corner of your room, desk, dressing table. It will help you relieve stress very much

                Or you can give to your loved ones as a way to express your love. The recipient will definitely "collapse" immediately !!

                Advanced plastic materials', 'unit_price' => rand(20, 30), 'promotion_price' => 10 , 'image' => 'PT00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00011', 'id_type' => 17, 'name' => 'Cony the rabbit sitting at the window', 'description' => 'With cute statues like this, you can decorate the corner of your room, desk, dressing table. It will help you relieve stress very much

                Or you can give to your loved ones as a way to express your love. The recipient will definitely "collapse" immediately !!

                Advanced plastic materials', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00012', 'id_type' => 17, 'name' => 'Statue of the bridegroom', 'description' => 'The statue of the bridegroom is an impressive gift you can give to your loved ones and friends on the day they "go home together".

                Made of high quality materials, firmly held, the bridegroom statue will not easily crack or break when you accidentally drop it

                With beautiful design lovely, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00013', 'id_type' => 17, 'name' => 'Statue of the bridegroom', 'description' => 'The statue of the bridegroom is an impressive gift you can give to your loved ones and friends on the day they "go home together".

                Made of high quality materials, firmly held, the bridegroom statue will not easily crack or break when you accidentally drop it

                With beautiful design lovely, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00014', 'id_type' => 17, 'name' => 'Statue of strawberry root arch', 'description' => 'The statue of the bridegroom is an impressive gift you can give to your loved ones and friends on the day they "go home together".

                Made of high quality materials, firmly held, the bridegroom statue will not easily crack or break when you accidentally drop it

                With beautiful design lovely, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'PT00015', 'id_type' => 17, 'name' => 'Statue of mulberry root holding umbrella', 'description' => 'The statue of the bridegroom is an impressive gift you can give to your loved ones and friends on the day they "go home together".

                Made of high quality materials, firmly held, the bridegroom statue will not easily crack or break when you accidentally drop it

                With beautiful design lovely, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'PT00015.jpg', 'unit' => rand(10, 99)],
            //Bowl Starfish,
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'BS00001', 'id_type' => 18, 'name' => 'Tofu lamp star dog bow', 'description' => 'I on many beautiful glass jars with a variety of designs and needs of customers

                Glass jars are used to store stars, paper beads, craft decor, gifts, crafts. Store drinks for the shop, bringing new and sophisticated style

                Products made from beautiful bright glass, solid wooden buttons, luxury', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BS00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'BS00002', 'id_type' => 18, 'name' => 'Tofu lamp cactus green star', 'description' => 'I on many beautiful glass jars with a variety of designs and needs of customers

                Glass jars are used to store stars, paper beads, craft decor, gifts, crafts. Store drinks for the shop, bringing new and sophisticated style

                Products made from beautiful bright glass, solid wooden buttons, luxury', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BS00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'BS00003', 'id_type' => 18, 'name' => 'Crystal star jar', 'description' => 'I on many beautiful glass jars with a variety of designs and needs of customers

                Glass jars are used to store stars, paper beads, craft decor, gifts, crafts. Store drinks for the shop, bringing new and sophisticated style

                Products made from beautiful bright glass, solid wooden buttons, luxury', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BS00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'BS00004', 'id_type' => 18, 'name' => 'Huar has no face', 'description' => 'I on many beautiful glass jars with a variety of designs and needs of customers

                Glass jars are used to store stars, paper beads, craft decor, gifts, crafts. Store drinks for the shop, bringing new and sophisticated style

                Products made from beautiful bright glass, solid wooden buttons, luxury', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BS00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'BS00005', 'id_type' => 18, 'name' => 'Crystal star jar 6638', 'description' => 'I on many beautiful glass jars with a variety of designs and needs of customers

                Glass jars are used to store stars, paper beads, craft decor, gifts, crafts. Store drinks for the shop, bringing new and sophisticated style

                Products made from beautiful bright glass, solid wooden buttons, luxury', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BS00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'BS00006', 'id_type' => 18, 'name' => 'High star panda', 'description' => 'I on many beautiful glass jars with a variety of designs and needs of customers

                Glass jars are used to store stars, paper beads, craft decor, gifts, crafts. Store drinks for the shop, bringing new and sophisticated style

                Products made from beautiful bright glass, solid wooden buttons, luxury', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'BS00006.jpg', 'unit' => rand(10, 99)],
            //Glass Globe
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00001', 'id_type' => 19, 'name' => 'Snow bear, old man', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00002', 'id_type' => 19, 'name' => 'Water bridge 2 babies bear pink', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00003', 'id_type' => 19, 'name' => 'Totoro girl holding umbrella', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00004', 'id_type' => 19, 'name' => 'Snow bridge old man snowman', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00005', 'id_type' => 19, 'name' => 'SNOW GLOBE 2 HUGGING FLOWERS AND SMILING', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00006', 'id_type' => 19, 'name' => 'Water bridge 2 small children', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00007', 'id_type' => 19, 'name' => '2 children water bridge to sit', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00008', 'id_type' => 19, 'name' => 'Moon water bridge', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00009', 'id_type' => 19, 'name' => 'Water bridge reindeer old man hat', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00010', 'id_type' => 19, 'name' => 'Water bridge 2 children turn around', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00011', 'id_type' => 19, 'name' => 'Water bridge 2 pink deer', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00012', 'id_type' => 19, 'name' => 'Water bridge Tontoro little girl sat big', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00012.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00013', 'id_type' => 19, 'name' => 'Double deer water bridge', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00013.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00014', 'id_type' => 19, 'name' => 'Bear water bridge hugging the moon', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00014.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00015', 'id_type' => 19, 'name' => 'Water bridge rabbit holding large umbrella', 'description' => 'Water bridge rabbit holding large umbrella', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00015.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00016', 'id_type' => 19, 'name' => 'Rainbow unicorn water bridge', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00016.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'GG00017', 'id_type' => 19, 'name' => 'Totoro glass bridge', 'description' => 'Glass ball is an impressive gift that you can give to your loved ones and friends on special occasions.

                The sphere is made of high-grade, transparent glass that helps the inside exhibits to stand out.

                With a beautiful transparent design, unique, delicate and meticulous lines', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'GG00017.jpg', 'unit' => rand(10, 99)],
            //Rose Wax
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00001', 'id_type' => 20, 'name' => 'Flower pot', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00001.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00002', 'id_type' => 20, 'name' => '6 cotton wax roses', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00002.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00003', 'id_type' => 20, 'name' => 'Box of 6 bunches of rose wax', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00003.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00004', 'id_type' => 20, 'name' => 'Flower pot', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00004.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00005', 'id_type' => 20, 'name' => 'Flower pot', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00005.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00006', 'id_type' => 20, 'name' => '5-flower wax rose box', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00006.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00007', 'id_type' => 20, 'name' => '9 teddy bear wax roses box', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00007.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00008', 'id_type' => 20, 'name' => 'Flower bag', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00008.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00009', 'id_type' => 20, 'name' => 'Square heart flower box', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00009.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00010', 'id_type' => 20, 'name' => 'Flower bag', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00010.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00011', 'id_type' => 20, 'name' => 'Box of hanging flowers', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00011.jpg', 'unit' => rand(10, 99)],
            ['feature' => rand(0,1), 'id_whole' => 5, 'id' => 'RW00012', 'id_type' => 20, 'name' => 'Box of hanging flowers', 'description' => 'The  beautiful everlasting wax flower is a symbol of love with the everlasting endurance of the wax flower forever with time, will be a meaningful gift, on special occasions such as birthdays, October 20, 8-3 , valentine and other special occasions.

                The scent of waxed petals will be with you and the people you love. With this scented wax gift, it will be a meaningful gift, especially this bouquet can be your most memorable confession to the person you love', 'unit_price' => rand(20, 30), 'promotion_price' => 0 , 'image' => 'RW00012.jpg', 'unit' => rand(10, 99)],

        ]);
    }
}
