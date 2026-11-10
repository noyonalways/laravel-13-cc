<?php

$name = "Noyon";
echo "Hi " . $name . "\n";
echo "Hi $name\n";

$skills = ["JavaScript", "React", "Node", "PHP"];
$project = ["title" => "Todo App", "stars" => 10];
echo $project["title"] . "\n";

foreach ($skills as $skill) {
    echo $skill . "\n";
}

// functions
function great($name) {
    return "Hi " . $name;
}
echo great("Noyon") . "\n";

// class and objects
class User {
    public function __construct(public $name) {}
}

$user = new User("Noyon");
echo $user->name . "\n";

// condition
if($project["stars"] > 100) {
    echo "This project is famous\n";
} elseif($project["stars"] >= 10) {
    echo "This project is popular\n";
} else {
    echo "This project is new\n";
}

// Scope Resolution Operator (::)
class Project {
    public static function create($title) {
        return "Created " . $title;
    }
}

echo Project::create("Todo App") . "\n";

function handle($path, $callback) {
    echo $path . " -> " . $callback() . "\n";
}
handle("/home", function() {
    return "Home Page";
});