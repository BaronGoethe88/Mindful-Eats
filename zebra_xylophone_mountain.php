<?php

//1
class CookingAndNutritionWorkshops{ 
    public $workshopName; //name of the workshop
    public $workshopDate; //date of the workshop 
    public $workshopVenue; //venue of the workshop
    public $workshopDescription; //description of the workshop
    public $workshopInstructors; //array containing info about the workshop instructors
    public $workshopParticipants; //array containing info about the workshop participants

//2
    public function __construct($name,$date,$venue,$desc){
        $this->workshopName = $name;
        $this->workshopDate = $date;
        $this->workshopVenue = $venue;
        $this->workshopDescription = $desc;
        $this->workshopInstructors = array();
        $this->workshopParticipants = array();
    }

//3
    public function addInstructor($instructorName,$instructorBio,$instructorImage){
        $instructor = array(
            "name" => $instructorName,
            "bio" => $instructorBio,
            "image" => $instructorImage
        );
        array_push($this->workshopInstructors,$instructor);
    }

//4
    public function addParticipant($participantName,$participantBio,$participantImage){
        $participant = array(
            "name" => $participantName,
            "bio" => $participantBio,
            "image" => $participantImage
        );
        array_push($this->workshopParticipants,$participant);
    }

//5
    public function getInstructors(){
        return $this->workshopInstructors;
    }

//6
    public function getParticipants(){
        return $this->workshopParticipants;
    }

//7
    public function getName(){
        return $this->workshopName;
    }

//8
    public function getDate(){
        return $this->workshopDate;
    }

//9
    public function getVenue(){
        return $this->workshopVenue;
    }

//10
    public function getDescription(){
        return $this->workshopDescription;
    }
}

//11
$workshop1 = new CookingAndNutritionWorkshops("Healthy Cooking for Busy People", "June 25, 2020", "Virtual", "Learn how to cook healthy meals quickly and efficiently!");

//12
$workshop1->addInstructor("Chef John", "Chef John is a professional chef with 20 years of experience. He specializes in healthy cooking.", "chefjohn.jpg");

//13
$workshop1->addInstructor("Chef Jane", "Chef Jane is a professional chef with 15 years of experience. She specializes in vegan and vegetarian cooking.", "chefjane.jpg");

//14
$workshop1->addParticipant("Paul", "Paul is a busy professional looking to learn healthy cooking techniques.", "paul.jpg");

//15
$workshop1->addParticipant("Susan", "Susan is a busy mom looking to make healthier meals for her family.", "susan.jpg");

//16
$instructors = $workshop1->getInstructors();

//17
$participants = $workshop1->getParticipants();

//18
$name = $workshop1->getName();

//19
$date = $workshop1->getDate();

//20
$venue = $workshop1->getVenue();

//21
$description = $workshop1->getDescription();

//22
echo "Name: " . $name . "<br>";
echo "Date: " . $date . "<br>";
echo "Venue: " . $venue . "<br>";
echo "Description: " . $description . "<br><br>";

//23
echo "Instructors:<br>";

//24
foreach($instructors as $instructor){
    echo "Name: " . $instructor["name"] . "<br>";
    echo "Bio: " . $instructor["bio"] . "<br>";
    echo "Image: " . $instructor["image"] . "<br><br>";
}

//25
echo "Participants:<br>";

//26
foreach($participants as $participant){
    echo "Name: " . $participant["name"] . "<br>";
    echo "Bio: " . $participant["bio"] . "<br>";
    echo "Image: " . $participant["image"] . "<br><br>";
}

//27
$workshop2 = new CookingAndNutritionWorkshops("Plant-Based Nutrition for Beginners","August 5, 2020", "Virtual","Learn the basics of plant-based nutrition and how to get started!");

//28
$workshop2->addInstructor("Dr. Smith","Dr. Smith is a nutritionist with 10 years of experience. He specializes in plant-based nutrition.","drsmith.jpg");

//29
$workshop2->addInstructor("Dr. Jones","Dr. Jones is a nutritionist with 8 years of experience. She specializes in vegan nutrition.","drjones.jpg");

//30
$workshop2->addParticipant("Jake","Jake is a beginner looking to learn more about plant-based nutrition.","jake.jpg");

//31
$workshop2->addParticipant("Tina","Tina is a beginner looking to transition to a plant-based lifestyle.","tina.jpg");

//32
$instructors = $workshop2->getInstructors();

//33
$participants = $workshop2->getParticipants();

//34
$name = $workshop2->getName();

//35
$date = $workshop2->getDate();

//36
$venue = $workshop2->getVenue();

//37
$description = $workshop2->getDescription();

//38
echo "Name: " . $name . "<br>";
echo "Date: " . $date . "<br>";
echo "Venue: " . $venue . "<br>";
echo "Description: " . $description . "<br><br>";

//39
echo "Instructors:<br>";

//40
foreach($instructors as $instructor){
    echo "Name: " . $instructor["name"] . "<br>";
    echo "Bio: " . $instructor["bio"] . "<br>";
    echo "Image: " . $instructor["image"] . "<br><br>";
}

//41
echo "Participants:<br>";

//42
foreach($participants as $participant){
    echo "Name: " . $participant["name"] . "<br>";
    echo "Bio: " . $participant["bio"] . "<br>";
    echo "Image: " . $participant["image"] . "<br><br>";
}

//43
$workshop3 = new CookingAndNutritionWorkshops("Meal Planning for Busy Families","October 21, 2020","Virtual","Learn how to plan healthy and delicious meals with minimal effort!");

//44
$workshop3->addInstructor("Chef David","Chef David is a professional chef with 15 years of experience. He specializes in meal planning.","chefdavid.jpg");

//45
$workshop3->addInstructor("Chef Sarah","Chef Sarah is a professional chef with 10 years of experience. She specializes in healthy family cooking.","chefsarah.jpg");

//46
$workshop3->addParticipant("Molly","Molly is a busy mom looking to simplify her family's meal planning.","molly.jpg");

//47
$workshop3->addParticipant("Sam","Sam is a busy professional looking to make delicious and healthy dinners.","sam.jpg");

//48
$instructors = $workshop3->getInstructors();

//49
$participants = $workshop3->getParticipants();

//50
$name = $workshop3->getName();

//51
$date = $workshop3->getDate();

//52
$venue = $workshop3->getVenue();

//53
$description = $workshop3->getDescription();

//54
echo "Name: " . $name . "<br>";
echo "Date: " . $date . "<br>";
echo "Venue: " . $venue . "<br>";
echo "Description: " . $description . "<br><br>";

//55
echo "Instructors:<br>";

//56
foreach($instructors as $instructor){
    echo "Name: " . $instructor["name"] . "<br>";
    echo "Bio: " . $instructor["bio"] . "<br>";
    echo "Image: " . $instructor["image"] . "<br><br>";
}

//57
echo "Participants:<br>";

//58
foreach($participants as $participant){
    echo "Name: " . $participant["name"] . "<br>";
    echo "Bio: " . $participant["bio"] . "<br>";
    echo "Image: " . $participant["image"] . "<br><br>";
}

//59
$workshop4 = new CookingAndNutritionWorkshops("Cooking for Kids","December 16, 2020", "Virtual","Learn how to make healthy and fun meals for kids!");

//60
$workshop4->addInstructor("Chef Mary","Chef Mary is a professional chef with 10 years of experience. She specializes in cooking for kids.","chefmary.jpg");

//61
$workshop4->addInstructor("Chef Mike","Chef Mike is a professional chef with 8 years of experience. He specializes in healthy kid-friendly meals.","chefmike.jpg");

//62
$workshop4->addParticipant("Emily","Emily is a busy mom looking to make nutritious meals for her kids.","emily.jpg");

//63
$workshop4->addParticipant("Dan","Dan is a busy dad looking to make fun and healthy meals for his kids.","dan.jpg");

//64
$instructors = $workshop4->getInstructors();

//65
$participants = $workshop4->getParticipants();

//66
$name = $workshop4->getName();

//67
$date = $workshop4->getDate();

//68
$venue = $workshop4->getVenue();

//69
$description = $workshop4->getDescription();

//70
echo "Name: " . $name . "<br>";
echo "Date: " . $date . "<br>";
echo "Venue: " . $venue . "<br>";
echo "Description: " . $description . "<br><br>";

//71
echo "Instructors:<br>";

//72
foreach($instructors as $instructor){
    echo "Name: " . $instructor["name"] . "<br>";
    echo "Bio: " . $instructor["bio"] . "<br>";
    echo "Image: " . $instructor["image"] . "<br><br>";
}

//73
echo "Participants:<br>";

//74
foreach($participants as $participant){
    echo "Name: " . $participant["name"] . "<br>";
    echo "Bio: " . $participant["bio"] . "<br>";
    echo "Image: " . $participant["image"] . "<br><br>";
}

//75
$workshop5 = new CookingAndNutritionWorkshops("Vegan Baking","February 15, 2021","Virtual","Learn how to make delicious vegan baked goods!");

//76
$workshop5->addInstructor("Chef Jane","Chef Jane is a professional chef with 15 years of experience. She specializes in vegan baking.","chefjane.jpg");

//77
$workshop5->addInstructor("Chef Sarah","Chef Sarah is a professional chef with 10 years of experience. She specializes in gluten-free baking.","chefsarah.jpg");

//78
$workshop5->addParticipant("Anna","Anna is a vegan looking to learn how to make vegan baked goods.","anna.jpg");

//79
$workshop5->addParticipant("Matt","Matt is a baker looking to transition to vegan baking.","matt.jpg");

//80
$instructors = $workshop5->getInstructors();

//81
$participants = $workshop5->getParticipants();

//82
$name = $workshop5->getName();

//83
$date = $workshop5->getDate();

//84
$venue = $workshop5->getVenue();

//85
$description = $workshop5->getDescription();

//86
echo "Name: " . $name . "<br>";
echo "Date: " . $date . "<br>";
echo "Venue: " . $venue . "<br>";
echo "Description: " . $description . "<br><br>";

//87
echo "Instructors:<br>";

//88
foreach($instructors as $instructor){
    echo "Name: " . $instructor["name"] . "<br>";
    echo "Bio: " . $instructor["bio"] . "<br>";
    echo "Image: " . $instructor["image"] . "<br><br>";
}

//89
echo "Participants:<br>";

//90
foreach($participants as $participant){
    echo "Name: " . $participant["name"] . "<br>";
    echo "Bio: " . $participant["bio"] . "<br>";
    echo "Image: " . $participant["image"] . "<br><br>";
}

//91
$workshop6 = new CookingAndNutritionWorkshops("Gluten-Free Baking","April 19, 2021","Virtual","Learn how to make delicious gluten-free baked goods!");

//92
$workshop6->addInstructor("Chef John","Chef John is a professional chef with 20 years of experience. He specializes in gluten-free baking.","chefjohn.jpg");

//93
$workshop6->addInstructor("Chef Mike","Chef Mike is a professional chef with 8 years of experience. He specializes in healthy gluten-free meals.","chefmike.jpg");

//94
$workshop6->addParticipant("Amy","Amy is looking to learn how to make gluten-free baked goods.","amy.jpg");

//95
$workshop6->addParticipant("Jim","Jim is looking to make delicious gluten-free treats.","jim.jpg");

//96
$instructors = $workshop6->getInstructors();

//97
$participants = $workshop6->getParticipants();

//98
$name = $workshop6->getName();