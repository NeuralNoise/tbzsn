<?php
\Flight::set('flight.views.path', __DIR__ . '/../views');
\Flight::path(__DIR__ . '/../controllers');

$connection = new PDO('mysql:host=localhost;dbname=tbzsn', 'root', '');

$h = new \ClanCats\Hydrahon\Builder('mysql', function($query, $queryString, $queryParameters) use($connection)
{
    $statement = $connection->prepare($queryString);
    $statement->execute($queryParameters);

    if ($query instanceof \ClanCats\Hydrahon\Query\Sql\Select)
    {
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
});

echo $h->table('users')->select('username')->count();
