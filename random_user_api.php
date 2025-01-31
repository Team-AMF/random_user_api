<?php
// API Headers to return JSON
header('Content-Type: application/json');

// Function to generate random user data
function generateRandomUser() {
    // Example arrays for random data generation
    $firstNames = ['John', 'Jane', 'Michael', 'Sarah', 'David', 'Emily', 'Sophia', 'Lucas', 'Oliver', 'Emma'];
    $lastNames = ['Doe', 'Smith', 'Johnson', 'Brown', 'Davis', 'Martinez', 'Taylor', 'Anderson', 'Jackson', 'White'];
    $cities = ['New York', 'Los Angeles', 'Chicago', 'Houston', 'Phoenix', 'San Antonio', 'San Diego', 'Dallas'];
    $countries = ['USA', 'UK', 'Canada', 'Australia', 'India', 'Germany', 'Brazil', 'South Korea', 'Japan'];
    $avatars = ['https://randomuser.me/api/portraits/men/1.jpg', 'https://randomuser.me/api/portraits/men/2.jpg', 'https://randomuser.me/api/portraits/men/3.jpg'];
    $usernames = ['johnnyDoe', 'sarahTheGreat', 'mightyMike', 'emma21', 'lucasQueen', 'bigDave1980'];
    $nations = ['American', 'British', 'Canadian', 'Australian', 'Indian', 'German', 'Brazilian', 'South Korean', 'Japanese'];

    // Generate random user data
    $user = [
        'owner' => '@mehadi_420', // Adding the API owner username
        'gender' => rand(0, 1) ? 'male' : 'female',
        'name' => [
            'title' => rand(0, 1) ? 'Mr' : 'Ms',
            'first' => $firstNames[array_rand($firstNames)],
            'last' => $lastNames[array_rand($lastNames)]
        ],
        'location' => [
            'street' => [
                'number' => rand(1000, 9999),
                'name' => $firstNames[array_rand($firstNames)] . ' St'
            ],
            'city' => $cities[array_rand($cities)],
            'state' => 'Some State',
            'country' => $countries[array_rand($countries)],
            'postcode' => rand(10000, 99999),
            'coordinates' => [
                'latitude' => number_format(rand(-90, 90) + (rand(0, 100) / 100), 4),
                'longitude' => number_format(rand(-180, 180) + (rand(0, 100) / 100), 4)
            ],
            'timezone' => [
                'offset' => "+3:30",
                'description' => "Tehran"
            ]
        ],
        'email' => strtolower($firstNames[array_rand($firstNames)]) . '.' . strtolower($lastNames[array_rand($lastNames)]) . '@example.com',
        'login' => [
            'uuid' => uniqid('user_'),
            'username' => $usernames[array_rand($usernames)],
            'password' => 'randompassword123',
            'salt' => 'randomsalt',
            'md5' => md5('randompassword123'),
            'sha1' => sha1('randompassword123'),
            'sha256' => hash('sha256', 'randompassword123')
        ],
        'dob' => [
            'date' => '1990-05-15T06:38:14.355Z',
            'age' => rand(18, 60)
        ],
        'registered' => [
            'date' => '2015-05-15T02:13:35.695Z',
            'age' => 5
        ],
        'phone' => '+1-' . rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999),
        'cell' => '+1-' . rand(100, 999) . '-' . rand(100, 999) . '-' . rand(1000, 9999),
        'id' => [
            'name' => 'SVNR',
            'value' => rand(1000, 9999) . ' ' . rand(1000, 9999) . ' H ' . rand(100, 999)
        ],
        'picture' => [
            'large' => $avatars[array_rand($avatars)],
            'medium' => $avatars[array_rand($avatars)],
            'thumbnail' => $avatars[array_rand($avatars)]
        ],
        'nat' => $nations[array_rand($nations)]
    ];

    return $user;
}

// Generate a random user and return it as JSON
echo json_encode(['results' => [generateRandomUser()]]);
?>
