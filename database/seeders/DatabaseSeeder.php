<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Blog::create([
            'title' => 'Why I Started Working Out',
            'slug' => 'why-i-started-working-out',
            'category' => 'Lifestyle',
            'body' => '<p>Working out has become an integral part of my life, and I have come to realize the incredible benefits that come with it. In this blog, I will share my personal journey of why I started working out and how it has transformed my life.</p><p>Growing up, I was never interested in sports or physical activities. I spent most of my time indoors, reading books, and watching TV. As a result, I became overweight and lacked the energy and stamina to keep up with my peers. I was self-conscious about my body and struggled with low self-esteem.</p><img class="w-100 my-3" src="/asset/blogs/workout2.jpeg" alt=""><p>It wasn\'t until my mid-twenties that I realized I needed to make a change. I was tired of feeling lethargic and unhappy with my body, so I decided to start working out. At first, it was a struggle. I lacked the motivation and discipline to stick to a routine, and I felt uncomfortable in the gym.</p><p>However, over time, I began to see the benefits of working out. I started to feel more energetic and confident in my body. I also noticed improvements in my mental health, as exercise released endorphins that boosted my mood and reduced my stress levels.</p><p>Working out has also helped me develop a sense of discipline and self-control. It takes dedication and commitment to maintain a consistent workout routine, and this has translated to other areas of my life. I am more focused and productive at work, and I am better able to manage my time and prioritize my goals.</p><img class="w-100 my-3" src="/asset/blogs/workout3.jpeg" alt=""><p>One of the most significant benefits of working out, for me, has been the sense of community it provides. I joined a gym and started attending group fitness classes, which allowed me to meet new people and make friends. It\'s inspiring to be around others who share a common goal of living a healthy and active lifestyle.</p><p>In conclusion, starting to work out has been one of the best decisions I have made in my life. It has transformed me physically and mentally, providing me with the energy, confidence, and discipline to live a fulfilling life. If you\'re considering starting a workout routine, I encourage you to take the first step. It may be challenging at first, but the benefits are well worth it.</p>',
            'image' => 'workout.jpeg'
        ]);
        Blog::create([
            'title' => 'What I Love about Inception',
            'slug' => 'what-i-love-about-inception',
            'category' => 'Review',
            'body' => '<p>Inception is a 2010 science fiction action thriller film directed by Christopher Nolan and starring Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page, Tom Hardy, and Ken Watanabe. The movie is known for its mind-bending plot, stunning visual effects, and incredible performances. In this blog, I will share my review of Inception and why it is one of the greatest movies ever made.</p><p>The film is set in a world where technology exists to enter people\'s dreams and extract information from their subconscious. Leonardo DiCaprio plays the role of Dom Cobb, a skilled thief who is offered a chance to regain his old life in exchange for completing an impossible task of planting an idea in someone\'s mind through dream-sharing technology.</p><img class="w-100 my-3" src="/asset/blogs/inception2.jpeg" alt=""><p>One of the most impressive things about Inception is the complexity and depth of its plot. The film explores themes of reality, perception, and the nature of dreams. It is a movie that demands the viewer\'s full attention, and it rewards them with an incredible story that is both thought-provoking and emotionally engaging.</p><p>The performances in Inception are outstanding. Leonardo DiCaprio delivers a powerful performance as Cobb, a man struggling with his past and trying to make amends. The supporting cast is equally impressive, with Joseph Gordon-Levitt, Ellen Page, and Tom Hardy all delivering strong performances.</p><img class="w-100 my-3" src="/asset/blogs/inception3.jpeg" alt=""><p>The visual effects in Inception are breathtaking, and they are used to great effect in creating the dreamscapes that are the backdrop for the movie\'s action scenes. The cinematography is also exceptional, with the film\'s use of different locations and camera angles adding to the sense of disorientation and unreality that is central to the film\'s plot.</p><p>Inception is a movie that will leave you thinking long after the credits roll. It is a masterful work of storytelling and filmmaking that combines incredible performances, stunning visual effects, and a mind-bending plot. It is a movie that is not to be missed, and one that will be remembered as one of the greatest films ever made.</p><p>In conclusion, Inception is a masterpiece of cinema, a film that pushes the boundaries of storytelling and filmmaking. It is a must-see movie for anyone who loves great cinema, and it is a movie that will stay with you long after you\'ve watched it.</p>',
            'image' => 'inception.jpeg'
        ]);
        Blog::create([
            'title' => 'The World\'s Factory: Shenzhen',
            'slug' => 'the-world-factory-shenzhen',
            'category' => 'Travel',
            'body' => '<p>Shenzhen, located in the Guangdong Province of China, is a vibrant city that has transformed itself into a global hub of technology, manufacturing, and innovation. As someone who has had the opportunity to travel to Shenzhen, I can attest to the fact that it is a city that is definitely worth visiting. In this blog, I will share my experience of traveling to Shenzhen and what makes it such an exciting destination.</p><p>One of the things that struck me most about Shenzhen is its modernity. The city has developed rapidly over the past few decades, and it is now home to some of the most innovative technology companies in the world, such as Huawei, Tencent, and DJI. This has resulted in a skyline that is dotted with impressive skyscrapers and a public transportation system that is efficient and convenient.</p><p>Despite its modernity, Shenzhen is still deeply rooted in its culture and history. The city is home to a number of temples and historical sites, such as the Dapeng Fortress, which dates back to the Ming Dynasty. There are also several museums that showcase the city\'s rich cultural heritage, including the Shenzhen Museum and the Guan Shanyue Art Museum.</p><img class="w-100 my-3" src="/asset/blogs/shenzhen3.jpeg" alt=""><p>One of the highlights of my trip to Shenzhen was visiting the city\'s famous theme parks. Shenzhen has several world-class theme parks, including Window of the World, which features replicas of famous landmarks from around the world, and the Happy Valley amusement park, which has thrilling rides and attractions for visitors of all ages.</p><p>Another thing that makes Shenzhen an attractive destination is its proximity to Hong Kong. Shenzhen is located just across the border from Hong Kong, and it is easily accessible by train or bus. This makes it an ideal location for travelers who want to explore both cities during their trip.</p><img class="w-100 my-3" src="/asset/blogs/shenzhen2.jpeg" alt=""><p>Overall, my experience of traveling to Shenzhen was incredible. The city is a fascinating blend of modernity and tradition, and it offers visitors a unique glimpse into China\'s booming tech industry and rich cultural heritage. Whether you\'re interested in exploring historical sites, visiting theme parks, or experiencing the buzz of a modern metropolis, Shenzhen is definitely a destination worth considering.</p>',
            'image' => 'shenzhen.jpeg'
        ]);
        Blog::create([
            'title' => 'The Meaning Behind \'Wish You Were Gay\'',
            'slug' => 'the-meaning-behind-wish-you-were-gay',
            'category' => 'Review',
            'body' => '<p>Billie Eilish is undoubtedly one of the most talented and influential musicians of our time, and her hit song "wish you were gay" is a prime example of her skill as a songwriter and performer. With its haunting melody and poignant lyrics, "wish you were gay" is a beautifully crafted masterpiece that speaks to the heart of anyone who has experienced the pain of unrequited love.<p><img class="w-100 my-3" src="/asset/blogs/billie.jpeg" alt=""></p>From the opening notes of the song, it is clear that Billie Eilish has poured her heart and soul into this track. Her soulful vocals, combined with the minimalist instrumental backing, create an emotional intensity that is hard to ignore. The lyrics, which tell the story of a person who longs for the love of someone who does not reciprocate their feelings, are both heartbreaking and relatable.<p></p>But what really sets "wish you were gay" apart is its honesty and vulnerability. Billie Eilish has never been one to shy away from difficult topics, and in this song, she lays bare her deepest emotions and insecurities. By doing so, she invites her listeners to do the same, creating a sense of connection and empathy that is rare in modern music.<p><img class="w-100 my-3" src="/asset/blogs/billie3.jpeg" alt=""></p>Overall, "wish you were gay" is a masterpiece of songwriting and performance. It is a testament to Billie Eilish\'s talent and creativity, as well as her willingness to tackle difficult topics with honesty and vulnerability. If you haven\'t heard this song yet, I highly recommend giving it a listen. It is a powerful and moving piece of music that is sure to leave a lasting impression.</p>',
            'image' => 'billie2.jpeg'
        ]);
    }
}
