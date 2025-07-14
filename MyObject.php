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
    public function __construct($date, $technique, $techniqueMins, $song, $songMins, $recorded)
    {
        $this->practiceDate = $date;
        $this->technique = $technique;
        $this->techniqueMinutes = $techniqueMins;
        $this->song = $song;
        $this->songMinutes = $songMins;
        $this->wasRecorded = $recorded;
    }

    //Display summary method
    public function displaySummary() {
        echo "<h3>Practice Session on {$this->practiceDate}</h3>";
        echo "<ul>";
        echo "<li>Technique Practiced: {$this->technique} ({$this->techniqueMinutes} minutes)</li";
        echo "<li>Total practice time: " . $this->calculateTotalTime() . " minutes</li>";
        echo "<li>" . $this->checkRecording() . "</li>";
        echo "/ul>";
    }

    //Method to get total practice time
    public function updateTechnique($newTechnique, $newMinutes) {
        $this->technique = $newTechnique;
        $this->techniqueMinutes = $newMinutes;
        echo "<p>Updated technique to: {$this->technique} for {$this->techniqueMinutes} minutes</p>";
    }
}

?>