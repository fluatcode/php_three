class VideoJukebox extends Jukebox {
    public function playVideo() {
        echo "Playing video clip...\n";
    }
}

$vJukebox = new VideoJukebox();
$vJukebox->insertCoin();
$vJukebox->addCD("Song + Video");
$vJukebox->play(0);
$vJukebox->playVideo();
