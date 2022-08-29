<?php
class Song
{
    public $songId;
    public $title;
}
$octoposSong = new Song();
$octoposSong->songId =1;
$octoposSong->title = "garden's Octopus";
var_dump($octoposSong);

class Playlist
{
    public $name;
    public  $songs = [];
    public function addSong($song){
        $this->songs[] = $song;
    }
}
$yellowsubmarine= new Song();
$yellowsubmarine->songId = 2;
$yellowsubmarine->title = "yellow submarine";

$playlist = new Playlist();
$playlist->name = "ROck ";
$playlist->addSong($octoposSong);
$playlist->addSong($yellowsubmarine);
var_dump($playlist->songs);
