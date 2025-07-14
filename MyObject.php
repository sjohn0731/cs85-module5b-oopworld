<?php
//Class
class GuitarPractice {
    //Properties
    private $practiceDate;
    private $technique;
    private $techniqueMinutes;
    private $song;
    private $songMinutes;
    private $wasRecorded;

    //Constructor
    public function __construct($date, $technique, $techniqueMinutes, $song, $songMinutes, $recorded)
    {
        $this->practiceDate = $date;
        $this->technique = $technique;
        $this->techniqueMinutes = $techniqueMinutes;
        $this->song = $song;
        $this->songMinutes = $songMinutes;
        $this->wasRecorded = $recorded;
    }

    //Display summary method
    //Note: this method was created using DeepSeek AI
    public function displaySummary() {
        echo "<h3>Practice Session on {$this->practiceDate}</h3>";
        echo "<ul>";
        echo "<li>Technique Practiced: {$this->technique} ({$this->techniqueMinutes} minutes) </li";
        echo "<li>Total practice time: " . $this->calculateTotalTime() . " minutes</li>";
        echo "<li>" . $this->checkRecording() . "</li>";
        echo "</ul>";
    }

    //Method for total practice time
    public function calculateTotalTime() {
        return $this->techniqueMinutes + $this->songMinutes;
    }

    //Method to get total practice time
    public function updateTechnique($newTechnique, $newMinutes) {
        $this->technique = $newTechnique;
        $this->techniqueMinutes = $newMinutes;
        echo "<p>Updated technique to: {$this->technique} for {$this->techniqueMinutes} minutes</p>";
    }

    //Method for descision logic
    public function checkRecording() {
        if ($this->wasRecorded) {
            return "Session Recorded - Make sure to review the recording!";
        } else {
            return "This session was not recorded - make sure to record the next time!";
        }
    }
}

//2 Session objects
$session1 = new GuitarPractice(
    "2025-07-09",
    "Strumming techinque",
    25,
    "Nirvana: All Apologies",
    15,
    true
);

$session1 = new GuitarPractice(
    "2025-07-09",
    "Hendrix-style chords & Unison bends",
    20,
    "No One Knows - Queens of the Stone Age",
    52,
    false
);

//Display Sessions
echo "<h2>Guitar Practice Sessions</h2>";
//Display session 1
$session1->displaySummary();

?>