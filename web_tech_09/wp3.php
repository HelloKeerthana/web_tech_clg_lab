<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Database Analytics</title>
</head>
<body>

    <h1>Movie Database Analytics</h1>

    <?php
    // Sample movie data (simulating a database)
    $movies = [
        ["title" => "Inception", "genre" => "Sci-Fi", "year" => 2010, "rating" => 8.8],
        ["title" => "The Dark Knight", "genre" => "Action", "year" => 2008, "rating" => 9.0],
        ["title" => "Interstellar", "genre" => "Sci-Fi", "year" => 2014, "rating" => 8.6],
        ["title" => "Titanic", "genre" => "Romance", "year" => 1997, "rating" => 7.8],
        ["title" => "Avatar", "genre" => "Sci-Fi", "year" => 2009, "rating" => 7.9],
        ["title" => "The Matrix", "genre" => "Sci-Fi", "year" => 1999, "rating" => 8.7]
    ];

    // Calculate analytics
    $total_movies = count($movies);
    $average_rating = array_sum(array_column($movies, 'rating')) / $total_movies;

    // Count movies per genre
    $genres = [];
    foreach ($movies as $movie) {
        $genres[$movie['genre']] = ($genres[$movie['genre']] ?? 0) + 1;
    }

    // Get highest-rated movie
    $highest_rated = max($movies, fn($a, $b) => $a['rating'] <=> $b['rating']);
    ?>

    <h2>Total Movies: <?php echo $total_movies; ?></h2>
    <h2>Average Rating: <?php echo number_format($average_rating, 1); ?></h2>

    <h2>Movies Per Genre:</h2>
    <ul>
        <?php foreach ($genres as $genre => $count): ?>
            <li><?php echo "$genre: $count"; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Highest Rated Movie:</h2>
    <p><?php echo "{$highest_rated['title']} ({$highest_rated['year']}) - Rating: {$highest_rated['rating']}"; ?></p>

    <h2>All Movies:</h2>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Rating</th>
        </tr>
        <?php foreach ($movies as $movie): ?>
        <tr>
            <td><?php echo $movie['title']; ?></td>
            <td><?php echo $movie['genre']; ?></td>
            <td><?php echo $movie['year']; ?></td>
            <td><?php echo $movie['rating']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
