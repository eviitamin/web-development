function showInfoPanel(event, location) {
    // Get the info panel element
    var infoPanel = document.getElementById('info-panel');

    // Set the position of the panel based on the cursor position
    infoPanel.style.left = event.clientX + 'px';
    infoPanel.style.top = event.clientY + 'px';

    // Update the content of the panel based on the location
    var header = infoPanel.querySelector('h2');
    var image = infoPanel.querySelector('img');
    var paragraph = infoPanel.querySelector('p');

    if (location === 'chapel') {
      header.textContent = 'Interfaith Chapel';
      image.src = 'pup chapel.jpg';
      paragraph.textContent = 'The Interfaith Chapel for students and faculty members of different faiths.';

    } else if (location === 'pool') {
      header.textContent = 'Swimming Pool';
      image.src = 'pup-pool.jpg';
      paragraph.textContent = 'An olympic-sized swimming pool that is capable of handling several swimming classes and student athlete activities simultaneously.';

    } else if (location === 'obelisk') {
        header.textContent = 'PUP Obelisk';
        image.src = 'pup obelisk.jpeg';
        paragraph.textContent = 'The Obelisk, standing majestic on its base, depicts the strength of the Polytechnic University of the Philippines as an institution of higher learning, promoting educational and moral aims which are fortified by a determined leadership with a clear vision for the Filipino youth and an efficient support system inspired by the virtues of public service.';

    } else if (location === 'gym') {
        header.textContent = 'PUP Gymnasium';
        image.src = 'pup gym.jpg';
        paragraph.textContent = 'The University Gymnasium serves as the training ground for the student athletes that participate in the intercollegiate sports program.';

    } else if (location === 'oval') {
        header.textContent = 'Track and Football Oval';
        image.src = 'pup-oval.jpg';
        paragraph.textContent = 'A football field that can serve as softball, soccer, and football fields for students.';

    } else if (location === 'gate') {
        header.textContent = 'PUP Main Gate';
        image.src = 'pup main gate.jpg';
        paragraph.textContent = 'The main gate of the Polytechnic University of the Philippines (PUP). On its walls a large brass mural is erected, called "The Transformation" that symbolizes PUP transformation over the years.';

    } else if (location === 'north wing') {
        header.textContent = 'North Wing';
        image.src = 'pup north wing.jpg';
        paragraph.textContent = 'Front view of the north wing portion of the main building of the Polytechnic University of the Philippines (PUP) Mabini Campus';

    } else if (location === 'lagoon') {
        header.textContent = 'PUP Lagoon';
        image.src = 'pup lagoon.jpg';
        paragraph.textContent = 'The PUP Lagoon, for some, was just an ordinary mossy creek with trees around and birds chirping for drama; but this is something special for every PUPian. This was probably the most hung-out place compared to the rest of the spot in PUP.';

    } else if (location === 'library') {
        header.textContent = 'Ninoy Aquino Library';
        image.src = 'pup library.jpg';
        paragraph.textContent = 'The Ninoy Aquino Library and Learning Resources Center (NALLRC) is the library system of the Polytechnic University of the Philippines composed of libraries providing services to the PUP System.';

    } else if (location === 'charlie') {
        header.textContent = 'Charlie del Rosario Building';
        image.src = 'pup charlie del rosario.jpg';
        paragraph.textContent = 'The Charlie Del Rosario Building is a structure dedicated to the first victim of the Marcos Regime.';

    } else {
      // Default content if location is not recognized
      header.textContent = 'Unknown Location';
      image.src = 'unknown.jpg';
      paragraph.textContent = 'No information available for this location.';
    }

    // Show the panel
    infoPanel.style.display = 'block';
  }

  function hideInfoPanel() {
    // Get the info panel element
    var infoPanel = document.getElementById('info-panel');

    // Hide the panel
    infoPanel.style.display = 'none';
  }