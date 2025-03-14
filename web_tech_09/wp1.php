<?php
$movies = [
    ["title" => "Inception", "genre" => "Sci-Fi", "rating" => 8.8, "release_year" => 2010, "duration" => 148, "box_office" => 829],
    ["title" => "Interstellar", "genre" => "Sci-Fi", "rating" => 8.6, "release_year" => 2014, "duration" => 169, "box_office" => 677],
    ["title" => "The Dark Knight", "genre" => "Action", "rating" => 9.0, "release_year" => 2008, "duration" => 152, "box_office" => 1005],
    ["title" => "Titanic", "genre" => "Romance", "rating" => 7.8, "release_year" => 1997, "duration" => 195, "box_office" => 2200],
    ["title" => "Avengers: Endgame", "genre" => "Action", "rating" => 8.4, "release_year" => 2019, "duration" => 181, "box_office" => 2797],
    ["title" => "Parasite", "genre" => "Thriller", "rating" => 8.6, "release_year" => 2019, "duration" => 132, "box_office" => 258],
    ["title" => "The Godfather", "genre" => "Crime", "rating" => 9.2, "release_year" => 1972, "duration" => 175, "box_office" => 250],
    ["title" => "Joker", "genre" => "Drama", "rating" => 8.4, "release_year" => 2019, "duration" => 122, "box_office" => 1074],
    ["title" => "Frozen", "genre" => "Animation", "rating" => 7.4, "release_year" => 2013, "duration" => 102, "box_office" => 1276],
    ["title" => "Shawshank Redemption", "genre" => "Drama", "rating" => 9.3, "release_year" => 1994, "duration" => 142, "box_office" => 58],
    ["title" => "The Matrix", "genre" => "Sci-Fi", "rating" => 8.7, "release_year" => 1999, "duration" => 136, "box_office" => 467],
    ["title" => "Forrest Gump", "genre" => "Drama", "rating" => 8.8, "release_year" => 1994, "duration" => 142, "box_office" => 678],
    ["title" => "The Lion King", "genre" => "Animation", "rating" => 8.5, "release_year" => 1994, "duration" => 88, "box_office" => 1657],
    ["title" => "Gladiator", "genre" => "Action", "rating" => 8.5, "release_year" => 2000, "duration" => 155, "box_office" => 460],
    ["title" => "Spider-Man: No Way Home", "genre" => "Action", "rating" => 8.3, "release_year" => 2021, "duration" => 148, "box_office" => 1912],
    ["title" => "Black Panther", "genre" => "Action", "rating" => 7.3, "release_year" => 2018, "duration" => 134, "box_office" => 1347],
    ["title" => "The Social Network", "genre" => "Drama", "rating" => 7.7, "release_year" => 2010, "duration" => 120, "box_office" => 224],
    ["title" => "Mad Max: Fury Road", "genre" => "Action", "rating" => 8.1, "release_year" => 2015, "duration" => 120, "box_office" => 375],
    ["title" => "Dune", "genre" => "Sci-Fi", "rating" => 8.0, "release_year" => 2021, "duration" => 155, "box_office" => 433],
    ["title" => "Toy Story", "genre" => "Animation", "rating" => 8.3, "release_year" => 1995, "duration" => 81, "box_office" => 373]
];

echo "<h3>Dataset Preview:</h3>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Title</th><th>Genre</th><th>Rating</th><th>Release Year</th><th>Duration</th><th>Box Office (M USD)</th></tr>";

foreach ($movies as $movie) {
    echo "<tr>
    <td>{$movie['title']}</td>
    <td>{$movie['genre']}</td>
    <td>{$movie['rating']}</td>
    <td>{$movie['release_year']}</td>
    <td>{$movie['duration']} min</td>
    <td>{$movie['box_office']} M</td>
    </tr>";
}

echo "</table>";
?>