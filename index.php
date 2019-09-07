<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php-teacher-array</title>

    <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>

</head>
<body>

    <?php
        foreach ($db as $key => $value) {
            echo "<h1> $key </h1>";
            foreach ($value as $fullname) {

                $name = $fullname['name'];
                $lastname = $fullname['lastname'];

                if ($key == "teachers") {
                    echo "<div style='width: 130px; background: grey;'>" . $name . ' ' . $lastname . '<br>' . "</div>";
                } else {
                    echo "<div style='width: 130px; background: green;'>" . $name . ' ' . $lastname . '<br>' . "</div>";
                    
                }
            }
        }
    ?>

</body>
</html>
