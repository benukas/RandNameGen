<?php
    //RANDOM NAME GENERATOR BY BENUKAS (GITHUB)
    $names = array(
            "Liam", "Noah", "Oliver", "James", "Elijah", "William", "Henry", "Lucas", "Benjamin", "Theodore",
            "Mateo", "Levi", "Sebastian", "Daniel", "Jack", "Michael", "Alexander", "Owen", "Asher", "Samuel",
            "Ethan", "Leo", "Jackson", "Mason", "Ezra", "John", "Hudson", "Luca", "Aiden", "Joseph", "David",
            "Jacob", "Logan", "Luke", "Julian", "Gabriel", "Grayson", "Wyatt", "Matthew", "Maverick", "Dylan",
            "Isaac", "Elias", "Anthony", "Thomas", "Jayden", "Carter", "Santiago", "Ezekiel", "Charles", "Josiah",
            "Caleb", "Cooper", "Lincoln", "Miles", "Christopher", "Nathan", "Isaiah", "Kai", "Joshua", "Andrew",
            "Angel", "Adrian", "Cameron", "Nolan", "Waylon", "Jaxon", "Roman", "Eli", "Wesley", "Aaron", "Ian",
            "Christian", "Ryan", "Leonardo", "Brooks", "Axel", "Walker", "Jonathan", "Easton", "Everett", "Weston",
            "Bennett", "Robert", "Jameson", "Landon", "Silas", "Jose", "Beau", "Micah", "Colton", "Jordan", "Jeremiah",
            "Parker", "Greyson", "Rowan", "Adam", "Nicholas", "Theo", "Xavier", "Hunter", "Dominic", "Jace", "Gael",
            "River", "Thiago", "Kayden", "Damian", "August", "Carson", "Austin", "Myles", "Amir", "Declan", "Emmett",
            "Ryder", "Luka", "Connor", "Jaxson", "Milo", "Enzo", "Giovanni", "Vincent", "Diego", "Luis", "Archer",
            "Harrison", "Kingston", "Atlas", "Jasper", "Sawyer", "Legend", "Lorenzo", "Evan", "Jonah", "Chase", "Bryson",
            "Adriel", "Nathaniel", "Arthur", "Juan", "George", "Cole", "Zion", "Jason", "Ashton", "Carlos", "Calvin",
            "Brayden", "Elliot", "Rhett", "Emiliano", "Ace", "Jayce", "Graham", "Max", "Braxton", "Leon", "Ivan",
            "Hayden", "Jude", "Malachi", "Dean", "Tyler", "Jesus", "Zachary", "Kaiden", "Elliott", "Arlo", "Emmanuel",
            "Ayden", "Bentley", "Maxwell", "Amari", "Ryker", "Finn", "Antonio", "Charlie", "Maddox", "Justin", "Judah",
            "Kevin", "Dawson", "Matteo", "Miguel", "Zayden", "Camden", "Messiah", "Alan", "Alex", "Nicolas", "Felix",
            "Alejandro", "Jesse", "Beckett", "Matias", "Tucker", "Emilio", "Xander", "Knox", "Oscar", "Beckham", "Timothy",
            "Abraham", "Andres", "Gavin", "Brody", "Barrett", "Hayes", "Jett", "Brandon", "Joel", "Victor", "Peter", "Abel",
            "Edward", "Karter", "Patrick", "Richard", "Grant", "Avery", "King", "Caden", "Adonis", "Riley", "Tristan", "Kyrie",
            "Blake", "Eric", "Griffin", "Malakai", "Rafael", "Israel", "Tate", "Lukas", "Nico", "Marcus", "Stetson", "Javier",
            "Colt", "Omar", "Simon", "Kash", "Remington", "Jeremy", "Louis", "Mark", "Lennox", "Callum", "Kairo", "Nash",
            "Kyler", "Dallas", "Crew", "Preston", "Paxton", "Steven", "Zane", "Kaleb", "Lane", "Phoenix", "Paul", "Cash",
            "Kenneth", "Bryce", "Ronan", "Kaden", "Maximiliano", "Walter", "Maximus", "Emerson", "Hendrix", "Jax", "Atticus",
            "Zayn", "Tobias", "Cohen", "Aziel", "Kayson", "Rory", "Brady", "Finley", "Holden", "Jorge", "Malcolm", "Clayton",
            "Niko", "Francisco", "Josue", "Brian", "Bryan", "Cade", "Colin", "Andre", "Cayden", "Aidan", "Muhammad", "Derek",
            "Ali", "Elian", "Bodhi", "Cody", "Jensen", "Damien", "Martin", "Cairo", "Ellis", "Khalil", "Otto", "Zander",
            "Dante", "Ismael", "Angelo", "Brantley", "Manuel", "Colson", "Cruz", "Tatum", "Jaylen", "Jaden", "Erick", "Cristian",
            "Romeo", "Milan", "Reid", "Cyrus", "Leonel", "Joaquin", "Ari", "Odin", "Orion", "Ezequiel", "Gideon", "Daxton",
            "Warren", "Casey", "Anderson", "Spencer", "Karson", "Eduardo", "Chance", "Fernando", "Raymond", "Bradley", "Cesar",
            "Wade", "Prince", "Julius", "Dakota", "Kade", "Koa", "Raiden", "Callan", "Hector", "Onyx", "Remy", "Ricardo", "Edwin",
            "Stephen", "Kane", "Saint", "Titus", "Desmond", "Killian", "Sullivan", "Mario", "Jay", "Kamari", "Luciano", "Royal",
            "Zyaire", "Marco", "Wilder", "Russell", "Nasir", "Rylan", "Archie", "Jared", "Gianni", "Kashton", "Kobe", "Sergio",
            "Travis", "Marshall", "Iker", "Briggs", "Gunner", "Apollo", "Bowen", "Baylor", "Sage", "Tyson", "Kyle", "Oakley",
            "Malik", "Mathias", "Sean", "Armani", "Hugo", "Johnny", "Sterling", "Forrest", "Harvey", "Banks", "Grady", "Kameron",
            "Jake", "Franklin", "Lawson", "Tanner", "Eden", "Jaziel", "Pablo", "Reed", "Pedro", "Zayne", "Royce", "Edgar", "Ibrahim",
            "Winston", "Ronin", "Leonidas", "Devin", "Damon", "Noel", "Rhys", "Clark", "Corbin", "Sonny", "Colter", "Esteban", "Erik",
            "Baker", "Adan", "Dariel", "Kylo", "Tripp", "Caiden", "Frank", "Solomon", "Major", "Memphis", "Quinn", "Dax", "Hank",
            "Donovan", "Finnegan", "Nehemiah", "Andy", "Camilo", "Asa", "Jeffrey", "Santino", "Isaias", "Jaiden", "Kian", "Fabian",
            "Callen", "Ruben", "Alexis", "Emanuel", "Francis", "Garrett", "Kendrick", "Matthias", "Wells", "Augustus", "Jasiah",
            "Alijah", "Alonzo", "Koda", "Collin", "Ford", "Frederick", "Jaxton", "Kohen", "Troy", "Kason", "Seth", "Denver", "Kyson",
            "Ares", "Raphael", "Bodie", "Sylas", "Uriel", "Zaiden", "Shiloh", "Lewis", "Kieran", "Marcos", "Bo", "Shepherd", "Philip",
            "Zaire", "Gregory", "Princeton", "Roberto", "Leland", "Eithan", "Moshe", "Johnathan", "Lucca", "Kenzo", "Mack", "Porter",
            "Kolton", "Kaison", "Valentino", "Saul", "Shane", "Jamari", "Rocco", "Kylan", "Deacon", "Dalton", "Moses", "Callahan",
            "Tadeo", "Makai", "Amiri", "Rowen", "Drew", "Jalen", "Kylian", "Sutton", "Dominick", "Reece", "Rodrigo", "Soren", "Kasen",
            "Ridge", "Zachariah", "Jamir", "Peyton", "Omari", "Trevor", "Morgan", "Izaiah", "Alessandro", "Kaysen", "Enrique", "Marcelo",
            "Sincere", "Lucian", "Leandro", "Armando", "Braylen", "Jayson", "Julio", "Lawrence", "Cassius", "Raul", "Jase", "Mohammad",
            "Zain", "Jayceon", "Jonas", "Ronald", "Ayaan", "Rio", "Allen", "Bruce", "Mohamed", "Dorian", "Maximilian", "Keegan", "Shawn",
            "Yusuf", "Pierce", "Ariel", "Ander", "Conor", "Conrad", "Phillip", "Arjun", "Roy", "Moises", "Arturo", "Johan", "Gerardo",
            "Atreus", "Nikolai", "Braylon", "Samson", "Hezekiah", "Kayce", "Scott", "Gunnar", "Jamison", "Samir", "Keanu", "Ledger",
            "Jaime", "Finnley", "Cannon", "Colby", "Nikolas", "Emmitt", "Kamden", "Miller", "Boone", "Hamza", "Ocean", "Mac", "Anakin",
            "Brixton", "Roland", "Huxley", "Zeke", "Danny", "Marvin", "Otis", "Albert", "Clay", "Emir", "Boston", "Bruno", "Lionel",
            "Ozzy", "Taylor", "Jamie", "Augustine", "Chaim", "Krew", "Rayan", "Alden", "Bellamy", "Amos", "Drake", "Davis", "Dustin",
            "Corey", "Ahmad", "Conner", "Gustavo", "Layton", "Abram", "Axton", "Chandler", "Azariah", "Reese", "Benson", "Tru", "Case",
            "Trey", "Mauricio", "Westin", "Gage", "Reign", "Creed", "Mylo", "Dennis", "Quentin", "Madden", "Rome", "Julien", "Sam",
            "Zaid", "Marcel", "Maximo", "Layne", "Ahmed", "Kannon", "Quincy", "Yosef", "Aarav", "Lennon", "Ryland", "Skyler", "Chris",
            "Eliam", "Kareem", "Kyree", "Dario", "Donald", "Fletcher", "Darius", "Duke", "Rayden", "Salem", "Vicente", "Vincenzo",
            "Cayson", "Eliseo", "Issac", "Lian", "Clyde", "Wilson", "Santana", "Tomas", "Dexter", "Keith", "Houston", "Harry", "Uriah",
            "Lee", "Rex", "Tony", "Carmelo", "Alberto", "Loyal", "Trace", "Alfredo", "Riggs", "Forest", "Raylan", "Salvador", "Jakari",
            "Zakai", "Louie", "Flynn", "Leonard", "Mohammed", "Derrick", "Musa", "Avi", "Ty", "Westley", "Ambrose", "Brycen", "Aron",
            "Caspian", "Gatlin", "Harlan", "Dillon", "Emery", "Nixon", "Tommy", "Watson", "Zayd", "Azrael", "Zyair", "Azriel", "Legacy",
            "Cillian", "Alvin", "Bridger", "Alec", "Edison", "Kingsley", "Remi");

    function getRandomName(){
        global $names;
        return $names[array_rand($names)];
    }            
    
    $generated = getRandomName();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Name Generator | A project by Benukas (Github)</title>
    <style>
        body {
        margin: 200px;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        background-color: darkgray;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        }

        .name {
            margin-top: 40px;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            color: black;
            font-size: 20px;
            margin-bottom:20px;
         }

         .explanation {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            color: black;
            font-size: 15px;
            text-align: center;
            margin-bottom: 40px

         }

         .styledOutput {
            margin-top: 10px;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            color: black;
            font-size: 50px;
            text-align: center;
            margin-bottom: 40px

         }

        .button {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="name">Welcome to Random Name Generator</div>
    <div class="explanation">This website uses the list of 600 common, popular names to provide you with a random name to use anywhere.<br>
    Refresh the page to see a different name.
    </div>

    <div class="name1">
        This is your name:
    </div>
    <div class="styledOutput">
    <?php echo $generated; ?>
    </div>

    <button class="button" onclick="refreshPage()">Generate Name</button>

    <script>
        function refreshPage() {
            location.reload();
        }
    </script>
</body>
</html>
