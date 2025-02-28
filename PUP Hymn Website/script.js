const audio = document.getElementById('audio');
const lyricsContainer = document.querySelector('.lyrics');

const lyricLines = lyricsContainer.getElementsByTagName('p');
const lyricTimes = [];

for (let i = 0; i < lyricLines.length; i++) {
  const time = lyricLines[i].getAttribute('data-time');
  const [mins, secs] = time.split(':').map(parseFloat);
  const timeInSeconds = (mins * 60) + secs;
  lyricTimes.push(timeInSeconds);
}

// Play the audio when the page loads
window.addEventListener('load', () => {
  audio.play().catch(error => {
    // Autoplay was prevented, handle the error here
    console.error('Autoplay was prevented:', error);
  });
});

audio.addEventListener('timeupdate', () => {
  const currentTime = audio.currentTime;

  audio.volume = 0.25;

  for (let i = 0; i < lyricLines.length; i++) {
    const lyricLine = lyricLines[i];
    const time = lyricTimes[i];

    const prevlyricLine = lyricLines[i-1];

    if (currentTime >= time) {
      lyricLine.classList.add('active');
      lyricsContainer.scrollTop = lyricLine.offsetTop - lyricsContainer.offsetHeight / 2;
      if(i != 0){
        prevlyricLine.classList.remove('active');
      }

    } else {
      lyricLine.classList.remove('active');
    }
  }
});
