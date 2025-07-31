<?php 
    $itens = [
        ['href' => 'https://www.youtube.com/@englishwithpatricia007',  'src' => "/img/youtube.png", 'alt' => 'Youtube'],
        ['href' => 'https://www.linkedin.com/in/poulainpatricia',  'src' => "/img/linkedin.png", 'alt' => 'LinkedIn'],
        ['href' => 'https://x.com/pattypoulain',  'src' => "/img/twitter.png", 'alt' => 'X'],
    ]
?>


<section class="flex justify-between gap-x-3 ">
    <div class="w-2/3">
        <h1 class="text-3xl font-bold">Oi, meu nome é Patrícia</h1>
        <p class="text-xl leading-6 mt-6">
            👋 Hey there! I’m Patricia — @englishwithpatricia007 <br>
            💻 Tech enthusiast diving into the worlds of React and Python <br>
            🚀 Always up for collaboration on passion projects and personal growth <br>
            🔍 Curious about the intersection of language, technology, and creativity <br>
            📫 Let’s connect on LinkedIn — I love meeting like-minded learners! <br>
            🎶✝️ Fun fact — I play the flute, love hiking, trekking and cycling, and my faith is an important part of
            who I am
        </p>
        <ul class="flex gap-x-3 mt-3">
            <?php foreach ($itens as $item): ?>
            <li>
                <a href="<?=$item['href']?>" target="_blank" class="hover:underline">
                    <img class="h-8 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>">
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="w-1/3 flex items-center justify-center">
        <div>
            <img src="/img/avatar.svg" alt="Foto de Patrícia" class="h-60 -mt-6 hover:animate-pulse">
        </div>
    </div>
</section>